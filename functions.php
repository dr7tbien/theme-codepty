<?php
/**
 * CodePTY theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * codepty_enqueue_assets - Carga los assets principales del theme.
 *
 * @return void
 */
function codepty_enqueue_assets() {
    $front_css_path   = get_template_directory() . '/assets/css/front-page.css';
    $desktop_css_path = get_template_directory() . '/assets/css/front-page-desktop.css';
    $front_js_path    = get_template_directory() . '/assets/js/front-page.js';

    wp_enqueue_style(
        'codepty-front-page',
        get_template_directory_uri() . '/assets/css/front-page.css',
        array(),
        file_exists($front_css_path) ? filemtime($front_css_path) : '0.1.0'
    );

    wp_enqueue_style(
        'codepty-front-page-desktop',
        get_template_directory_uri() . '/assets/css/front-page-desktop.css',
        array('codepty-front-page'),
        file_exists($desktop_css_path) ? filemtime($desktop_css_path) : '0.1.0',
        '(min-width: 768px)'
    );

    wp_enqueue_script(
        'codepty-front-page',
        get_template_directory_uri() . '/assets/js/front-page.js',
        array(),
        file_exists($front_js_path) ? filemtime($front_js_path) : '0.1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'codepty_enqueue_assets');

/**
 * Añade los iconos del sitio cuando WordPress todavía no tiene uno configurado.
 *
 * @return void
 */
function codepty_add_favicons() {
    if (has_site_icon()) {
        return;
    }

    $images_uri = get_template_directory_uri() . '/assets/images';
    ?>
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url($images_uri . '/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url($images_uri . '/favicon-16x16.png'); ?>">
    <link rel="icon" href="<?php echo esc_url($images_uri . '/favicon.ico'); ?>" sizes="any">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url($images_uri . '/apple-touch-icon.png'); ?>">
    <?php
}
add_action('wp_head', 'codepty_add_favicons');

/**
 * Crea una sola vez la página inicial de guías del sitio.
 *
 * @return void
 */
function codepty_create_guides_page() {
    if (get_option('codepty_content_version', 0) >= 1) {
        return;
    }

    $guides_page = get_page_by_path('guias', OBJECT, 'page');

    if (!$guides_page) {
        $guides_page = wp_insert_post(
            array(
                'post_title'   => 'Guías',
                'post_name'    => 'guias',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            )
        );
    }

    if ($guides_page && !is_wp_error($guides_page)) {
        update_option('codepty_content_version', 1);
    }
}
add_action('init', 'codepty_create_guides_page');
