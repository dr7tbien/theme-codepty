<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * CodePTY_Theme_Updater - Integra las releases públicas del theme con WordPress.
 */
final class CodePTY_Theme_Updater
{
    private const THEME_SLUG = 'codepty';
    private const UPDATE_URI = 'https://github.com/dr7tbien/theme-codepty';
    private const API_URL = 'https://api.github.com/repos/dr7tbien/theme-codepty/releases/latest';
    private const ASSET_NAME = 'codepty.zip';
    private const CACHE_KEY = 'codepty_theme_github_release';
    private const CACHE_TTL = 6 * HOUR_IN_SECONDS;
    private const FAILURE_TTL = 30 * MINUTE_IN_SECONDS;

    /**
     * register - Conecta la comprobación y limpieza de caché con WordPress.
     *
     * @return void
     */
    public function register(): void
    {
        add_filter('update_themes_github.com', array($this, 'filter_update'), 10, 4);
        add_action('upgrader_process_complete', array($this, 'clear_cache_after_upgrade'), 10, 2);
        add_action('delete_site_transient_update_themes', array($this, 'clear_release_cache'));
    }

    /**
     * filter_update - Informa de una release estable superior para el theme CodePTY.
     *
     * @param array|false $update Respuesta previa de actualización.
     * @param array       $theme_data Cabeceras del theme instalado.
     * @param string      $theme_stylesheet Nombre de la carpeta del theme.
     * @param string[]    $locales Idiomas instalados.
     * @return array|false Datos de actualización o la respuesta previa.
     */
    public function filter_update($update, array $theme_data, string $theme_stylesheet, array $locales)
    {
        unset($locales);

        if (self::THEME_SLUG !== $theme_stylesheet || self::UPDATE_URI !== ($theme_data['UpdateURI'] ?? '')) {
            return $update;
        }

        $installed_version = isset($theme_data['Version']) ? (string) $theme_data['Version'] : '0.0.0';
        $release = $this->get_release();
        if (!$release || !version_compare($release['version'], $installed_version, '>')) {
            return false;
        }

        return array(
            'theme' => self::THEME_SLUG,
            'version' => $release['version'],
            'new_version' => $release['version'],
            'url' => $release['details_url'],
            'package' => $release['package_url'],
            'requires_php' => '7.4',
        );
    }

    /**
     * clear_cache_after_upgrade - Invalida la release guardada tras actualizar CodePTY.
     *
     * @param object $upgrader Instancia del actualizador de WordPress.
     * @param array  $options Datos de la operación terminada.
     * @return void
     */
    public function clear_cache_after_upgrade($upgrader, array $options): void
    {
        unset($upgrader);

        if ('update' !== ($options['action'] ?? '') || 'theme' !== ($options['type'] ?? '')) {
            return;
        }

        $themes = isset($options['themes']) && is_array($options['themes']) ? $options['themes'] : array();
        $theme = isset($options['theme']) ? (string) $options['theme'] : '';
        if (self::THEME_SLUG === $theme || in_array(self::THEME_SLUG, $themes, true)) {
            $this->clear_release_cache();
        }
    }

    /**
     * clear_release_cache - Elimina la respuesta de GitHub almacenada temporalmente.
     *
     * @return void
     */
    public function clear_release_cache(): void
    {
        delete_site_transient(self::CACHE_KEY);
    }

    /**
     * get_release - Obtiene y almacena la última release pública válida.
     *
     * @return array|false Release normalizada o false si GitHub falla.
     */
    private function get_release()
    {
        $cached = get_site_transient(self::CACHE_KEY);
        if (is_array($cached) && isset($cached['version'])) {
            return $cached;
        }
        if ('failure' === $cached) {
            return false;
        }

        $response = wp_remote_get(
            self::API_URL,
            array(
                'timeout' => 8,
                'redirection' => 3,
                'headers' => array(
                    'Accept' => 'application/vnd.github+json',
                    'User-Agent' => 'CodePTY-Theme-Updater',
                ),
            )
        );

        if (is_wp_error($response) || 200 !== wp_remote_retrieve_response_code($response)) {
            return $this->cache_failure();
        }

        $data = json_decode(wp_remote_retrieve_body($response), true);
        $release = is_array($data) ? $this->normalize_release($data) : false;
        if (!$release) {
            return $this->cache_failure();
        }

        set_site_transient(self::CACHE_KEY, $release, self::CACHE_TTL);
        return $release;
    }

    /**
     * normalize_release - Valida una respuesta remota y conserva solo datos confiables.
     *
     * @param array $data Respuesta decodificada de GitHub.
     * @return array|false Release normalizada o false.
     */
    private function normalize_release(array $data)
    {
        if (!empty($data['draft']) || !empty($data['prerelease'])) {
            return false;
        }

        $tag = isset($data['tag_name']) ? trim((string) $data['tag_name']) : '';
        if (!preg_match('/^v?([0-9]+\.[0-9]+\.[0-9]+)$/', $tag, $matches)) {
            return false;
        }

        $details_url = isset($data['html_url']) ? esc_url_raw((string) $data['html_url'], array('https')) : '';
        if (!$this->is_repository_url($details_url)) {
            return false;
        }

        foreach (($data['assets'] ?? array()) as $asset) {
            if (!is_array($asset) || self::ASSET_NAME !== ($asset['name'] ?? '')) {
                continue;
            }

            $package_url = esc_url_raw((string) ($asset['browser_download_url'] ?? ''), array('https'));
            if (!$this->is_allowed_package_url($package_url, $tag)) {
                return false;
            }

            return array(
                'version' => $matches[1],
                'details_url' => $details_url,
                'package_url' => $package_url,
            );
        }

        return false;
    }

    /**
     * is_allowed_package_url - Limita el ZIP a una release de este repositorio.
     *
     * @param string $url URL de descarga propuesta.
     * @param string $tag Etiqueta validada de la release.
     * @return bool True cuando la URL es exactamente la esperada.
     */
    private function is_allowed_package_url(string $url, string $tag): bool
    {
        $parts = wp_parse_url($url);
        if (!is_array($parts) || 'https' !== ($parts['scheme'] ?? '') || 'github.com' !== strtolower((string) ($parts['host'] ?? ''))) {
            return false;
        }

        $expected_path = '/dr7tbien/theme-codepty/releases/download/' . rawurlencode($tag) . '/' . self::ASSET_NAME;
        return $expected_path === ($parts['path'] ?? '')
            && !isset($parts['user'])
            && !isset($parts['pass'])
            && !isset($parts['query'])
            && !isset($parts['fragment']);
    }

    /**
     * is_repository_url - Comprueba que la página informativa pertenece al repositorio.
     *
     * @param string $url URL informativa de la release.
     * @return bool True para páginas HTTPS del repositorio público.
     */
    private function is_repository_url(string $url): bool
    {
        $parts = wp_parse_url($url);
        if (!is_array($parts) || 'https' !== ($parts['scheme'] ?? '') || 'github.com' !== strtolower((string) ($parts['host'] ?? ''))) {
            return false;
        }

        $path = (string) ($parts['path'] ?? '');
        return 0 === strpos($path, '/dr7tbien/theme-codepty/') && !isset($parts['user'], $parts['pass']);
    }

    /**
     * cache_failure - Recuerda temporalmente un fallo remoto sin afectar al theme.
     *
     * @return false
     */
    private function cache_failure(): bool
    {
        set_site_transient(self::CACHE_KEY, 'failure', self::FAILURE_TTL);
        return false;
    }
}
