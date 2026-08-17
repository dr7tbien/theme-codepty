<?php
/**
 * Página pública: Más velocidad.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail codepty-package-page codepty-more-speed-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="service-hero speed-hero" id="resumen">
        <div class="container package-hero-grid">
            <nav class="breadcrumbs" aria-label="Migas de pan">
                <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><span aria-current="page">Más velocidad</span>
            </nav>
            <div class="package-hero-copy speed-hero-copy">
                <p class="eyebrow">Una experiencia sin esperas innecesarias</p>
                <h1 style="font-size: var(--font-h2);">Más velocidad == Menos esperas + Google</h1>
                <p class="speed-intro">Una página que responde rápido resulta más cómoda, mantiene la atención, mejora el posicionamiento en Google y facilita que la persona llegue hasta el contacto.</p>

                <div class="speed-path" aria-label="Recorrido rápido desde la visita hasta el contacto">
                    <div class="speed-path__step"><span>01</span><strong>Hace clic</strong><small>Llega desde una búsqueda, red o enlace.</small></div>
                    <div class="speed-path__line" aria-hidden="true"></div>
                    <div class="speed-path__step"><span>02</span><strong>La página responde</strong><small>El contenido principal aparece sin una espera molesta. Google posiciona mejor la web</small></div>
                    <div class="speed-path__line" aria-hidden="true"></div>
                    <div class="speed-path__step"><span>03</span><strong>Encuentra lo que busca</strong><small>Lee, compara y entiende la propuesta.</small></div>
                    <div class="speed-path__line" aria-hidden="true"></div>
                    <div class="speed-path__step speed-path__step--contact"><span>04</span><strong>Contacta</strong><small>WhatsApp, llamada o formulario.</small></div>
                </div>

                <div class="speed-meter" aria-label="Cómo cambia la atención según el tiempo de respuesta">
                    <div class="speed-meter__heading"><strong>El ritmo también cuenta</strong><span>Respuesta percibida</span></div>
                    <div class="speed-meter__track" aria-hidden="true"><span></span></div>
                    <div class="speed-meter__labels"><span><strong>0–1 s</strong>Atención intacta</span><span><strong>1–3 s</strong>El interés continúa</span><span><strong>Más espera</strong>Puede aparecer distracción</span></div>
                </div>
                <p class="speed-clarification"><strong>La rapidez no garantiza una venta.</strong> Ayuda a que una visita interesada no se encuentre obstáculos innecesarios antes de descubrir tu negocio o escribirte.</p>
            </div>
            <aside class="package-hero-contact" id="consulta" aria-label="Formulario de contacto">
                <?php echo do_shortcode('[codepty_formulario_contacto]'); ?>
            </aside>
        </div>
    </section>

    <?php get_template_part('template-parts/more-speed-content'); ?>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
