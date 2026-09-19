<?php /** Posts archive. */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('codepty-posts'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>
<main id="main-content" class="posts-archive container">
    <header class="posts-heading">
        <p class="eyebrow">Ideas para tu negocio</p>
        <h1>Posts</h1>
        <p class="posts-intro">Presencia digital, páginas web y formas de conectar con tus clientes.</p>
    </header>
    <?php if (have_posts()) : ?>
        <div class="posts-grid" id="posts-grid">
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-card'); ?>
        <?php endwhile; ?>
        </div>
        <nav class="posts-pagination" aria-label="Más artículos">
            <?php next_posts_link('Ver más artículos'); ?>
        </nav>
        <p class="posts-load-status" role="status" aria-live="polite"></p>
        <div class="posts-sentinel" aria-hidden="true"></div>
    <?php else : ?>
        <p class="posts-empty">Pronto compartiremos aquí nuevos artículos para tu negocio.</p>
    <?php endif; ?>
</main>
<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
