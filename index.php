<?php
/**
 * Fallback template.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php get_template_part('template-parts/site-header'); ?>
    <main>
        <h1>CodePTY</h1>
        <p>Tema activo.</p>
    </main>
    <?php wp_footer(); ?>
</body>
</html>