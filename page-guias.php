<?php
/**
 * Guides landing page.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('codepty-guides-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main>
    <section class="guides-hero">
        <div class="container">
            <p class="eyebrow">Conocimiento abierto</p>
            <h1>Guías</h1>
            <p class="subtitle">
                Manuales claros para ayudarte a gestionar tu web, tus archivos y los servicios
                digitales que ponemos a tu disposición.
            </p>
        </div>
    </section>

    <section class="guides-content" aria-label="Categorías de guías">
        <div class="container guide-grid">
            <article class="card guide-card">
                <span class="guide-status">Próximamente</span>
                <h2>Primeros pasos</h2>
                <p>Lo esencial para comenzar a trabajar con tu nueva página web.</p>
            </article>

            <article class="card guide-card">
                <span class="guide-status">Próximamente</span>
                <h2>Servidor y archivos</h2>
                <p>Cómo acceder al servidor y subir, organizar o actualizar los archivos de tu web.</p>
            </article>

            <article class="card guide-card">
                <span class="guide-status">Próximamente</span>
                <h2>Dominios y correo</h2>
                <p>Conceptos y procedimientos para gestionar tu dominio y tus cuentas de correo.</p>
            </article>
        </div>
    </section>
</main>

<?php wp_footer(); ?>
</body>
</html>
