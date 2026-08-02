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

/**
 * Crea una sola vez la página privada de procedimiento y las guías públicas
 * de creación de cuentas (WhatsApp Business, Facebook, Instagram, Google Business).
 *
 * @return void
 */
function codepty_create_workflow_pages() {
    if (get_option('codepty_content_version', 0) >= 2) {
        return;
    }

    $guides_page = get_page_by_path('guias', OBJECT, 'page');
    $guides_id   = $guides_page ? $guides_page->ID : 0;

    $pages = array(
        array(
            'path'   => 'guias/whatsapp-business',
            'title'  => 'Cómo crear tu WhatsApp Business',
            'name'   => 'whatsapp-business',
            'parent' => $guides_id,
            'status' => 'publish',
        ),
        array(
            'path'   => 'guias/facebook',
            'title'  => 'Cómo crear tu página de empresa en Facebook',
            'name'   => 'facebook',
            'parent' => $guides_id,
            'status' => 'publish',
        ),
        array(
            'path'   => 'guias/instagram',
            'title'  => 'Cómo crear tu cuenta profesional de Instagram',
            'name'   => 'instagram',
            'parent' => $guides_id,
            'status' => 'publish',
        ),
        array(
            'path'   => 'guias/google-business',
            'title'  => 'Cómo crear tu perfil de Google Business',
            'name'   => 'google-business',
            'parent' => $guides_id,
            'status' => 'publish',
        ),
        array(
            'path'   => 'procedimiento-presencia-web',
            'title'  => 'Procedimiento de trabajo para Presencia Web',
            'name'   => 'procedimiento-presencia-web',
            'parent' => 0,
            'status' => 'private',
        ),
    );

    foreach ($pages as $page) {
        if (get_page_by_path($page['path'], OBJECT, 'page')) {
            continue;
        }

        wp_insert_post(
            array(
                'post_title'   => $page['title'],
                'post_name'    => $page['name'],
                'post_parent'  => $page['parent'],
                'post_status'  => $page['status'],
                'post_type'    => 'page',
                'post_content' => '',
            )
        );
    }

    update_option('codepty_content_version', 2);
}
add_action('init', 'codepty_create_workflow_pages');

/**
 * Comprueba si el usuario actual pertenece al equipo interno de CodePTY
 * (Administrador o rol "Equipo CodePTY").
 *
 * @return bool
 */
function codepty_user_is_team_member() {
    if (!is_user_logged_in()) {
        return false;
    }

    $user = wp_get_current_user();

    return (bool) array_intersect(array('administrator', 'equipocodepty'), (array) $user->roles);
}

/**
 * Restringe el acceso a las páginas privadas de uso interno: si no hay
 * sesión iniciada redirige al login, y si el usuario no pertenece al
 * equipo lo devuelve a la home.
 *
 * @return void
 */
function codepty_guard_private_pages() {
    if (get_query_var('pagename') !== 'procedimiento-presencia-web') {
        return;
    }

    if (!is_user_logged_in()) {
        wp_safe_redirect(wp_login_url(home_url('/procedimiento-presencia-web/')));
        exit;
    }

    if (!codepty_user_is_team_member()) {
        wp_safe_redirect(home_url('/'));
        exit;
    }
}
add_action('template_redirect', 'codepty_guard_private_pages', 1);
