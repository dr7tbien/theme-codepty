<?php
/**
 * CodePTY theme functions.
 */

if (!defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/service-landings.php';
require_once get_template_directory() . '/inc/class-codepty-theme-updater.php';

(new CodePTY_Theme_Updater())->register();

/**
 * codepty_theme_setup - Activa las funciones estándar de documento del tema.
 *
 * @return void
 */
function codepty_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'codepty_theme_setup');

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

/**
 * codepty_create_service_pages - Crea las páginas de detalle enlazadas desde la portada.
 *
 * @return void
 */
function codepty_create_service_pages() {
    if (get_option('codepty_content_version', 0) >= 4) {
        return;
    }

    $pages = array(
        array(
            'title' => 'Una página web que se parezca a tu negocio',
            'name'  => 'web-adaptada-a-tu-negocio',
            'ready' => true,
        ),
        array(
            'title' => 'Preparada para que Google la entienda',
            'name'  => 'pagina-preparada-para-google',
            'ready' => false,
        ),
        array(
            'title' => 'Cómoda de usar desde el móvil',
            'name'  => 'pagina-web-para-moviles',
            'ready' => false,
        ),
        array(
            'title' => 'Contacto directo por WhatsApp',
            'name'  => 'pagina-web-con-whatsapp',
            'ready' => false,
        ),
        array(
            'title' => 'Rápida y protegida',
            'name'  => 'pagina-web-rapida-y-segura',
            'ready' => false,
        ),
        array(
            'title' => 'Imagen coordinada en web y redes',
            'name'  => 'imagen-coordinada-web-redes',
            'ready' => false,
        ),
    );

    foreach ($pages as $page) {
        $existing = get_page_by_path($page['name'], OBJECT, 'page');
        $page_id  = $existing ? $existing->ID : wp_insert_post(
            array(
                'post_title'   => $page['title'],
                'post_name'    => $page['name'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            )
        );

        if (!$page['ready'] && $page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_codepty_noindex', '1');
        }
    }

    update_option('codepty_content_version', 4);
}
add_action('init', 'codepty_create_service_pages');

/**
 * codepty_service_document_title - Define el título SEO de la página desarrollada.
 *
 * @param string $title Título preparado por WordPress.
 * @return string
 */
function codepty_service_document_title($title) {
    $service = codepty_current_service_landing();
    if ($service) {
        return $service['title'] . ' | CodePTY';
    }

    return $title;
}
add_filter('pre_get_document_title', 'codepty_service_document_title');

/**
 * codepty_service_meta_tags - Imprime descripción y Open Graph básicos.
 *
 * @return void
 */
function codepty_service_meta_tags() {
    $service = codepty_current_service_landing();
    if (!$service) {
        return;
    }

    $title       = $service['title'] . ' | CodePTY';
    $description = wp_strip_all_tags($service['intro']);
    $url         = get_permalink();
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <?php
}
add_action('wp_head', 'codepty_service_meta_tags', 2);

/**
 * codepty_mark_service_landings_ready - Retira el noindex heredado de las cinco páginas terminadas.
 *
 * @return void
 */
function codepty_mark_service_landings_ready() {
    if (get_option('codepty_content_version', 0) >= 6) {
        return;
    }

    foreach (codepty_service_landings() as $service) {
        $page = get_page_by_path($service['slug'], OBJECT, 'page');
        if ($page instanceof WP_Post) {
            delete_post_meta($page->ID, '_codepty_noindex');
        }
    }

    update_option('codepty_content_version', 6);
}
add_action('init', 'codepty_mark_service_landings_ready', 20);

/**
 * codepty_service_robots - Evita indexar páginas de detalle todavía incompletas.
 *
 * @param array $robots Directivas de robots de WordPress.
 * @return array
 */
function codepty_service_robots($robots) {
    if (is_singular('page') && '1' === get_post_meta(get_queried_object_id(), '_codepty_noindex', true)) {
        $robots['noindex'] = true;
        $robots['follow']  = true;
    }

    return $robots;
}
add_filter('wp_robots', 'codepty_service_robots');

/**
 * codepty_hide_pending_pages_from_sitemap - Excluye del sitemap las páginas sin desarrollar.
 *
 * @param array  $args      Argumentos de la consulta del sitemap.
 * @param string $post_type Tipo de contenido solicitado.
 * @return array
 */
function codepty_hide_pending_pages_from_sitemap($args, $post_type) {
    if ('page' !== $post_type) {
        return $args;
    }

    $args['meta_query'][] = array(
        'key'     => '_codepty_noindex',
        'compare' => 'NOT EXISTS',
    );

    return $args;
}
add_filter('wp_sitemaps_posts_query_args', 'codepty_hide_pending_pages_from_sitemap', 10, 2);

/**
 * Crea la página principal con toda la información del paquete de página web.
 *
 * @return void
 */
function codepty_create_web_package_page() {
    if (get_option('codepty_content_version', 0) >= 5) {
        return;
    }

    $page = get_page_by_path('pagina-web-para-tu-negocio-en-panama', OBJECT, 'page');

    if (!$page) {
        $page = wp_insert_post(
            array(
                'post_title'   => 'Página web para tu negocio en Panamá',
                'post_name'    => 'pagina-web-para-tu-negocio-en-panama',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            )
        );
    }

    if ($page && !is_wp_error($page)) {
        update_option('codepty_content_version', 5);
    }
}
add_action('init', 'codepty_create_web_package_page');

/**
 * SEO básico de la página principal del paquete web.
 *
 * @param string $title Título preparado por WordPress.
 * @return string
 */
function codepty_web_package_document_title($title) {
    if (is_page('pagina-web-para-tu-negocio-en-panama')) {
        return 'Página web para tu negocio en Panamá | CodePTY';
    }

    return $title;
}
add_filter('pre_get_document_title', 'codepty_web_package_document_title');

/**
 * Descripción y Open Graph de la página del paquete web.
 *
 * @return void
 */
function codepty_web_package_meta_tags() {
    if (!is_page('pagina-web-para-tu-negocio-en-panama')) {
        return;
    }

    $title       = 'Página web para tu negocio en Panamá | CodePTY';
    $description = 'Conoce qué incluye el paquete de página web de CodePTY, cómo trabajamos, qué debes aportar, los plazos, la entrega y el control de tu hosting.';
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <?php
}
add_action('wp_head', 'codepty_web_package_meta_tags', 2);

/**
 * Declara el idioma real de la página larga para lectores de pantalla y buscadores.
 *
 * @param string $output Atributos HTML preparados por WordPress.
 * @return string
 */
function codepty_web_package_language_attributes($output) {
    if (!is_page('pagina-web-para-tu-negocio-en-panama')) {
        return $output;
    }

    return (string) preg_replace('/lang=("|\')[^"\']+("|\')/', 'lang="es-PA"', $output, 1);
}
add_filter('language_attributes', 'codepty_web_package_language_attributes');

/**
 * codepty_more_trust_document_title - Define el título SEO de Más confianza.
 *
 * @param string $title Título preparado por WordPress.
 * @return string
 */
function codepty_more_trust_document_title($title) {
    if (is_page('mas-confianza')) {
        return 'Más confianza y oportunidades para tu negocio | CodePTY';
    }

    return $title;
}
add_filter('pre_get_document_title', 'codepty_more_trust_document_title');

/**
 * codepty_more_trust_meta_tags - Imprime la descripción y Open Graph de Más confianza.
 *
 * @return void
 */
function codepty_more_trust_meta_tags() {
    if (!is_page('mas-confianza')) {
        return;
    }

    $title       = 'Más confianza y oportunidades para tu negocio | CodePTY';
    $description = 'Descubre cómo una presencia digital coherente en web, Google, Facebook, Instagram, Linktree y WhatsApp Business mejora la credibilidad de tu negocio.';
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <?php
}
add_action('wp_head', 'codepty_more_trust_meta_tags', 2);

/**
 * codepty_create_more_contacts_page - Crea la página Más contactos una sola vez.
 *
 * @return void
 */
function codepty_create_more_contacts_page() {
    if (get_option('codepty_content_version', 0) >= 6) {
        return;
    }

    $page = get_page_by_path('mas-contactos', OBJECT, 'page');

    if (!$page) {
        $page = wp_insert_post(
            array(
                'post_title'   => 'Más contactos',
                'post_name'    => 'mas-contactos',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
                'post_excerpt' => 'Más caminos para que nuevos clientes descubran tu negocio, entiendan qué ofrece y contacten desde la web, Google, redes sociales, WhatsApp o formulario.',
            )
        );
    }

    if ($page && !is_wp_error($page)) {
        update_option('codepty_content_version', 6);
    }
}
add_action('init', 'codepty_create_more_contacts_page');

/**
 * codepty_more_contacts_document_title - Define el título SEO de Más contactos.
 *
 * @param string $title Título preparado por WordPress.
 * @return string
 */
function codepty_more_contacts_document_title($title) {
    if (is_page('mas-contactos')) {
        return 'Más contactos para tu negocio en Panamá | CodePTY';
    }

    return $title;
}
add_filter('pre_get_document_title', 'codepty_more_contacts_document_title');

/**
 * codepty_more_contacts_meta_tags - Imprime la descripción y Open Graph de Más contactos.
 *
 * @return void
 */
function codepty_more_contacts_meta_tags() {
    if (!is_page('mas-contactos')) {
        return;
    }

    $title       = 'Más contactos para tu negocio en Panamá | CodePTY';
    $description = 'Descubre cómo conectar web, Google, Facebook, Instagram y WhatsApp para aumentar las oportunidades de recibir contactos para tu negocio en Panamá.';
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <?php
}
add_action('wp_head', 'codepty_more_contacts_meta_tags', 2);

/**
 * codepty_create_more_speed_page - Crea la página Más velocidad una sola vez.
 *
 * @return void
 */
function codepty_create_more_speed_page() {
    if (get_option('codepty_content_version', 0) >= 7) {
        return;
    }

    $page = get_page_by_path('mas-velocidad', OBJECT, 'page');

    if (!$page) {
        $page = wp_insert_post(
            array(
                'post_title'   => 'Más velocidad',
                'post_name'    => 'mas-velocidad',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
                'post_excerpt' => 'Una web clara, ligera y adaptada al móvil para reducir esperas innecesarias y facilitar el contacto con tu negocio.',
            )
        );
    }

    if ($page && !is_wp_error($page)) {
        update_option('codepty_content_version', 7);
    }
}
add_action('init', 'codepty_create_more_speed_page');

/**
 * codepty_more_speed_document_title - Define el título SEO de Más velocidad.
 *
 * @param string $title Título preparado por WordPress.
 * @return string
 */
function codepty_more_speed_document_title($title) {
    if (is_page('mas-velocidad')) {
        return 'Más velocidad y menos esperas para tu web | CodePTY';
    }

    return $title;
}
add_filter('pre_get_document_title', 'codepty_more_speed_document_title');

/**
 * codepty_more_speed_meta_tags - Imprime la descripción y Open Graph de Más velocidad.
 *
 * @return void
 */
function codepty_more_speed_meta_tags() {
    if (!is_page('mas-velocidad')) {
        return;
    }

    $title       = 'Más velocidad y menos esperas para tu web | CodePTY';
    $description = 'Descubre cómo una página web ligera, adaptada al móvil y bien preparada ayuda a reducir esperas innecesarias y facilita el contacto con tu negocio.';
    ?>
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PA">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <?php
}
add_action('wp_head', 'codepty_more_speed_meta_tags', 2);
