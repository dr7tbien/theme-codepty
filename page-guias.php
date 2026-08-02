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
                <span class="guide-status guide-status--ready">Cuentas</span>
                <h2>Crear tu WhatsApp Business</h2>
                <p>Cómo instalar la app, crear tu perfil de empresa y darnos acceso.</p>
                <a class="button small primary" href="<?php echo esc_url(home_url('/guias/whatsapp-business/')); ?>">Ver guía</a>
            </article>

            <article class="card guide-card">
                <span class="guide-status guide-status--ready">Cuentas</span>
                <h2>Crear tu página de Facebook</h2>
                <p>Cómo crear la página de empresa (no el perfil personal) y darnos acceso admin.</p>
                <a class="button small primary" href="<?php echo esc_url(home_url('/guias/facebook/')); ?>">Ver guía</a>
            </article>

            <article class="card guide-card">
                <span class="guide-status guide-status--ready">Cuentas</span>
                <h2>Crear tu Instagram profesional</h2>
                <p>Cómo pasar a cuenta profesional, vincularla a Facebook y darnos acceso.</p>
                <a class="button small primary" href="<?php echo esc_url(home_url('/guias/instagram/')); ?>">Ver guía</a>
            </article>

            <article class="card guide-card">
                <span class="guide-status guide-status--ready">Cuentas</span>
                <h2>Crear tu Google Business Profile</h2>
                <p>Cómo crear y verificar tu perfil para aparecer en Google Maps y búsquedas locales.</p>
                <a class="button small primary" href="<?php echo esc_url(home_url('/guias/google-business/')); ?>">Ver guía</a>
            </article>

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

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
