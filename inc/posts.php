<?php
/** Posts: shared templates, administrator previews and progressive loading. */
if (!defined('ABSPATH')) { exit; }

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
    // Assets must already be available when a mobile panel imports only <main>.
    $dir = get_template_directory();
    $uri = get_template_directory_uri();
    wp_enqueue_style('codepty-posts', $uri . '/assets/css/posts.css', array('codepty-front-page', 'codepty-front-page-desktop'), filemtime($dir . '/assets/css/posts.css'));
    wp_enqueue_script('codepty-posts', $uri . '/assets/js/posts.js', array(), filemtime($dir . '/assets/js/posts.js'), true);
    if (wp_script_is('formularios-pw-contact', 'registered')) {
        wp_enqueue_style('formularios-pw-contact');
        wp_enqueue_script('formularios-pw-contact');
    }
}, 20);

add_action('pre_get_posts', function ($query) {
    if (is_admin() || !$query->is_main_query() || !$query->is_home()) { return; }
    $query->set('posts_per_page', 10);
    $query->set('ignore_sticky_posts', true);
    $query->set('orderby', array('date' => 'DESC', 'ID' => 'DESC'));
    if (current_user_can('manage_options')) {
        $query->set('post_status', array('publish', 'draft'));
    }
});

add_action('template_redirect', function () {
    if (is_home() && current_user_can('manage_options')) {
        nocache_headers();
    }
});

add_filter('wp_robots', function ($robots) {
    if ((is_home() && current_user_can('manage_options')) || (is_singular('post') && get_post_status() !== 'publish')) {
        $robots['noindex'] = true;
        unset($robots['index']);
    }
    return $robots;
});

add_filter('pre_get_document_title', function ($title) {
    if (is_singular('post')) {
        $seo_title = get_post_meta(get_queried_object_id(), '_codepty_seo_title', true);
        if ($seo_title) { return $seo_title; }
    }
    return $title;
});

// Extend the theme's existing metadata system; no additional SEO plugin.
add_action('wp_head', function () {
    if (!is_singular('post')) { return; }
    $id = get_queried_object_id();
    $description = get_post_meta($id, '_codepty_meta_description', true);
    if (!$description) { $description = get_the_excerpt($id); }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(get_the_title($id)) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
    if (has_post_thumbnail($id)) {
        echo '<meta property="og:image" content="' . esc_url(get_the_post_thumbnail_url($id, 'full')) . '">' . "\n";
    }
}, 2);

/**
 * Move the first editable contact Shortcode block into the article header.
 * Without that block, the template does not add a form on its own.
 */
function codepty_post_content_regions($content) {
    $body = array();
    $contact = '';
    $hero_image = '';
    foreach (parse_blocks($content) as $block) {
        if ($contact === '' && $block['blockName'] === 'core/shortcode'
            && has_shortcode($block['innerHTML'], 'codepty_formulario_contacto')) {
            $contact = serialize_block($block);
        } elseif ($hero_image === '' && $block['blockName'] === 'core/image'
            && in_array('post-heading-image', explode(' ', $block['attrs']['className'] ?? ''), true)) {
            $hero_image = serialize_block($block);
        } else {
            $body[] = $block;
        }
    }
    return array('contact' => $contact, 'hero_image' => $hero_image, 'body' => serialize_blocks($body));
}
