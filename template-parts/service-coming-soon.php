<?php
/**
 * Estructura mínima de una página de detalle todavía no desarrollada.
 */

$service_title = get_the_title();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail codepty-service-pending'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>
<main id="contenido">
    <section class="service-hero service-pending-hero">
        <div class="container service-reading">
            <nav class="breadcrumbs" aria-label="Migas de pan"><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><span aria-current="page"><?php echo esc_html($service_title); ?></span></nav>
            <p class="eyebrow">Próximamente</p>
            <h1><?php echo esc_html($service_title); ?></h1>
            <p class="subtitle">Estamos preparando una explicación completa y fácil de entender sobre esta parte del servicio.</p>
            <div class="service-actions"><a class="button primary" href="<?php echo esc_url(home_url('/#inicio')); ?>">Ver la oferta completa de $200</a><a class="service-secondary-link" href="<?php echo esc_url(home_url('/#contacto')); ?>">Consultar directamente</a></div>
        </div>
    </section>
</main>
<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
