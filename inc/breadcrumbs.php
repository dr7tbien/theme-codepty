<?php
/** Global breadcrumb data, based on WordPress routing and page ancestry. */
if (!defined('ABSPATH')) { exit; }

function codepty_breadcrumb_items() {
    $items = array(array('label' => 'Home', 'url' => home_url('/')));
    if (is_front_page()) { $items[0]['url'] = ''; return $items; }
    if (is_home()) {
        $items[] = array('label' => 'Publicaciones', 'url' => '');
    } elseif (is_singular('post')) {
        $items[] = array('label' => 'Publicaciones', 'url' => codepty_posts_archive_url());
        $items[] = array('label' => get_the_title(get_queried_object_id()), 'url' => '');
    } elseif (is_page()) {
        $id = get_queried_object_id();
        foreach (array_reverse(get_post_ancestors($id)) as $parent_id) {
            if ($parent_id === (int) get_option('page_on_front')) { continue; }
            $items[] = array('label' => get_the_title($parent_id), 'url' => get_permalink($parent_id));
        }
        $items[] = array('label' => get_the_title($id), 'url' => '');
    } elseif (is_search()) {
        $items[] = array('label' => 'Resultados de búsqueda: ' . get_search_query(), 'url' => '');
    } elseif (is_404()) {
        $items[] = array('label' => 'Página no encontrada', 'url' => '');
    } elseif (is_singular()) {
        $items[] = array('label' => get_the_title(get_queried_object_id()), 'url' => '');
    } else {
        $items[] = array('label' => wp_strip_all_tags(get_the_archive_title()), 'url' => '');
    }
    return $items;
}

add_action('wp_enqueue_scripts', function () {
    $relative = '/assets/css/breadcrumbs.css';
    wp_enqueue_style(
        'codepty-breadcrumbs',
        get_template_directory_uri() . $relative,
        array('codepty-front-page'),
        filemtime(get_template_directory() . $relative)
    );
}, 25);
