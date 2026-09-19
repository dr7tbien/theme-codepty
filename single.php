<?php /** Individual articles. */ ?>
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
<main id="main-content">
<?php while (have_posts()) : the_post();
    $regions = codepty_post_content_regions(get_the_content());
?>
    <article <?php post_class('post-article'); ?>>
        <div class="post-hero">
            <div class="container post-hero-inner">
                <div class="post-hero-grid<?php echo $regions['contact'] === '' ? ' post-hero-grid--no-contact' : ''; ?>">
                    <header class="card offer post-heading">
                        <p class="post-category"><?php echo esc_html(implode(' · ', wp_get_post_categories(get_the_ID(), array('fields' => 'names')))); ?></p>
                        <?php if (get_post_status() === 'draft') : ?><p class="post-draft">Vista previa · Borrador</p><?php endif; ?>
                        <h1><?php the_title(); ?></h1>
                        <?php if (has_excerpt()) : ?><div class="subtitle post-subtitle"><?php echo wpautop(esc_html(get_the_excerpt())); ?></div><?php endif; ?>
                        <?php if ($regions['hero_image'] !== '') : ?>
                            <?php echo apply_filters('the_content', $regions['hero_image']); ?>
                        <?php endif; ?>
                    </header>
                    <?php if ($regions['contact'] !== '') : ?>
                    <aside class="card contact post-hero-contact" id="contacto" aria-label="Contactar con CODEPTY">
                        <?php echo apply_filters('the_content', $regions['contact']); ?>
                    </aside>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="post-body">
            <?php echo apply_filters('the_content', $regions['body']); ?>
        </div>
    </article>
    <?php if ($regions['contact'] !== '') : ?>
    <div class="post-contact-return">
        <a class="button primary" href="#contacto">Contactar con CODEPTY</a>
    </div>
    <?php endif; ?>
<?php endwhile; ?>
</main>
<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
