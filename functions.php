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
 * Crea la nueva guía interna "Procedimiento Presencia Web GPT".
 * Se publica técnicamente para que el rol personalizado pueda resolverla,
 * pero todo acceso queda protegido por codepty_guard_private_pages().
 *
 * @return void
 */
function codepty_create_presence_web_gpt_page() {
    if (get_option('codepty_content_version', 0) >= 3) {
        return;
    }

    $page = get_page_by_path('procedimiento-presencia-web-gpt', OBJECT, 'page');

    if (!$page) {
        $page = wp_insert_post(
            array(
                'post_title'   => 'Procedimiento Presencia Web GPT',
                'post_name'    => 'procedimiento-presencia-web-gpt',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            )
        );
    }

    if ($page && !is_wp_error($page)) {
        $page_id = $page instanceof WP_Post ? $page->ID : (int) $page;

        update_post_meta($page_id, '_codepty_internal_page', '1');
        update_option('codepty_content_version', 3);
    }
}
add_action('init', 'codepty_create_presence_web_gpt_page');

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
    $protected_pages = array(
        'procedimiento-presencia-web',
        'procedimiento-presencia-web-gpt',
    );

    if (!is_page($protected_pages)) {
        return;
    }

    if (!is_user_logged_in()) {
        wp_safe_redirect(wp_login_url(get_permalink()));
        exit;
    }

    if (!codepty_user_is_team_member()) {
        wp_safe_redirect(home_url('/'));
        exit;
    }
}
add_action('template_redirect', 'codepty_guard_private_pages', 1);

/**
 * Impide que el contenido interno se entregue mediante la API REST.
 *
 * @param WP_REST_Response $response Respuesta preparada.
 * @param WP_Post          $post     Página solicitada.
 * @return WP_REST_Response|WP_Error
 */
function codepty_guard_internal_page_rest_response($response, $post) {
    if ('1' !== get_post_meta($post->ID, '_codepty_internal_page', true)) {
        return $response;
    }

    if (!codepty_user_is_team_member()) {
        return new WP_Error(
            'codepty_forbidden',
            'No tienes permiso para consultar este contenido.',
            array('status' => is_user_logged_in() ? 403 : 401)
        );
    }

    return $response;
}
add_filter('rest_prepare_page', 'codepty_guard_internal_page_rest_response', 10, 2);

/**
 * Excluye las páginas internas de búsquedas públicas del sitio.
 *
 * @param WP_Query $query Consulta actual.
 * @return void
 */
function codepty_hide_internal_pages_from_search($query) {
    if (is_admin() || !$query->is_main_query() || !$query->is_search()) {
        return;
    }

    $meta_query   = (array) $query->get('meta_query');
    $meta_query[] = array(
        'key'     => '_codepty_internal_page',
        'compare' => 'NOT EXISTS',
    );

    $query->set('meta_query', $meta_query);
}
add_action('pre_get_posts', 'codepty_hide_internal_pages_from_search');

/**
 * Excluye las páginas internas del sitemap nativo de WordPress.
 *
 * @param array $args Argumentos de la consulta del sitemap.
 * @return array
 */
function codepty_hide_internal_pages_from_sitemap($args) {
    $args['meta_query'][] = array(
        'key'     => '_codepty_internal_page',
        'compare' => 'NOT EXISTS',
    );

    return $args;
}
add_filter('wp_sitemaps_posts_query_args', 'codepty_hide_internal_pages_from_sitemap');
