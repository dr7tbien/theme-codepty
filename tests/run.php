<?php

define('ABSPATH', __DIR__ . '/');
define('HOUR_IN_SECONDS', 3600);
define('MINUTE_IN_SECONDS', 60);

$test_cache = array();
$test_response = null;
$test_requests = 0;
$test_passed = 0;

class WP_Error
{
}

function add_filter()
{
}

function add_action()
{
}

function get_site_transient($key)
{
    global $test_cache;
    return $test_cache[$key] ?? false;
}

function set_site_transient($key, $value, $ttl)
{
    global $test_cache;
    unset($ttl);
    $test_cache[$key] = $value;
    return true;
}

function delete_site_transient($key)
{
    global $test_cache;
    unset($test_cache[$key]);
    return true;
}

function wp_remote_get($url, $args)
{
    global $test_requests, $test_response;
    $test_requests++;
    return $test_response;
}

function is_wp_error($value)
{
    return $value instanceof WP_Error;
}

function wp_remote_retrieve_response_code($response)
{
    return is_array($response) ? (int) ($response['response']['code'] ?? 0) : 0;
}

function wp_remote_retrieve_body($response)
{
    return is_array($response) ? (string) ($response['body'] ?? '') : '';
}

function esc_url_raw($url, $protocols = null)
{
    unset($protocols);
    return filter_var((string) $url, FILTER_VALIDATE_URL) ? (string) $url : '';
}

function wp_parse_url($url)
{
    return parse_url($url);
}

function expect_true($condition, $message)
{
    global $test_passed;
    if (!$condition) {
        fwrite(STDERR, "ERROR: {$message}\n");
        exit(1);
    }
    $test_passed++;
}

function release_data($version, array $overrides = array())
{
    $tag = 'v' . $version;
    return array_merge(
        array(
            'tag_name' => $tag,
            'draft' => false,
            'prerelease' => false,
            'html_url' => 'https://github.com/dr7tbien/theme-codepty/releases/tag/' . $tag,
            'assets' => array(
                array(
                    'name' => 'codepty.zip',
                    'browser_download_url' => 'https://github.com/dr7tbien/theme-codepty/releases/download/' . $tag . '/codepty.zip',
                ),
            ),
        ),
        $overrides
    );
}

function response_for(array $data, $status = 200)
{
    return array('response' => array('code' => $status), 'body' => json_encode($data));
}

function reset_state($response)
{
    global $test_cache, $test_response, $test_requests;
    $test_cache = array();
    $test_response = $response;
    $test_requests = 0;
}

require dirname(__DIR__) . '/inc/class-codepty-theme-updater.php';

$updater = new CodePTY_Theme_Updater();
$theme = array('Version' => '0.4.0', 'UpdateURI' => 'https://github.com/dr7tbien/theme-codepty');

reset_state(response_for(release_data('0.4.0')));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array('es_ES')), 'Una versión igual no debe actualizar.');

reset_state(response_for(release_data('0.3.1')));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Una versión inferior no debe actualizar.');

reset_state(response_for(release_data('0.4.1')));
$update = $updater->filter_update(false, $theme, 'codepty', array());
expect_true(is_array($update) && '0.4.1' === $update['new_version'], 'Una versión superior debe producir actualización.');
expect_true('codepty' === $update['theme'], 'La actualización debe apuntar al theme codepty.');
expect_true(1 === $test_requests, 'La primera comprobación debe consultar GitHub una vez.');
$updater->filter_update(false, $theme, 'codepty', array());
expect_true(1 === $test_requests, 'La release válida debe reutilizarse desde caché.');

reset_state(response_for(release_data('0.4.1', array('draft' => true))));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Los drafts deben ignorarse.');

reset_state(response_for(release_data('0.4.1', array('prerelease' => true))));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Las prereleases deben ignorarse.');

reset_state(response_for(release_data('0.4.1', array('tag_name' => 'release-0.4.1'))));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Las etiquetas no semánticas deben ignorarse.');

$unsafe_asset = release_data('0.4.1');
$unsafe_asset['assets'][0]['browser_download_url'] = 'https://example.com/codepty.zip';
reset_state(response_for($unsafe_asset));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Las descargas ajenas a GitHub deben rechazarse.');

$wrong_asset = release_data('0.4.1');
$wrong_asset['assets'][0]['name'] = 'source.zip';
reset_state(response_for($wrong_asset));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'La release debe contener el asset exacto codepty.zip.');

reset_state(new WP_Error());
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Un fallo de GitHub no debe afectar al theme.');
expect_true(isset($test_cache['codepty_theme_github_release']), 'Los fallos deben almacenarse temporalmente.');

reset_state(response_for(array('message' => 'Not Found'), 404));
expect_true(false === $updater->filter_update(false, $theme, 'codepty', array()), 'Un repositorio sin releases no debe producir actualización.');

reset_state(response_for(release_data('0.4.1')));
$previous = array('version' => '9.9.9');
expect_true($previous === $updater->filter_update($previous, $theme, 'otro-theme', array()), 'El actualizador no debe modificar otros themes.');
expect_true(0 === $test_requests, 'Otros themes no deben provocar consultas a GitHub.');

reset_state(response_for(release_data('0.4.1')));
$updater->filter_update(false, $theme, 'codepty', array());
$updater->clear_cache_after_upgrade(null, array('action' => 'update', 'type' => 'theme', 'theme' => 'codepty'));
expect_true(!isset($test_cache['codepty_theme_github_release']), 'La caché debe limpiarse después de actualizar CodePTY.');

$functions_source = file_get_contents(dirname(__DIR__) . '/functions.php');
expect_true(is_string($functions_source) && 1 === substr_count($functions_source, 'name="facebook-domain-verification"'), 'La meta de Facebook debe declararse exactamente una vez.');
expect_true(is_string($functions_source) && false !== strpos($functions_source, "add_action('wp_head', 'codepty_facebook_domain_verification')"), 'La meta de Facebook debe conectarse mediante wp_head.');

echo "OK: {$test_passed} comprobaciones del actualizador del theme\n";
