<?php
/**
 * Página pública: Más confianza.
 */

$trust_images_uri = get_template_directory_uri() . '/assets/images';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail codepty-package-page codepty-more-trust-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="service-hero" id="resumen">
        <div class="container package-hero-grid">
           <nav class="breadcrumbs" aria-label="Migas de pan">
                <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><span aria-current="page">Más confianza para tu negocio</span>
            </nav>
            <div class="package-hero-copy">
                <h1 style="font-size: var(--font-h2);">Más confianza == Más ventas</h1>
                <p class="trust-intro">Una presencia digital coherente en tu página web, Facebook, Instagram, Google, Linktree y WhatsApp Business ayuda a demostrar que tu negocio existe, transmite profesionalidad y facilita que nuevos clientes confíen en ti.</p>

                <div class="trust-network" aria-label="Canales que refuerzan la presencia digital de tu negocio">
                    <div class="trust-channel trust-channel--web">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-web.webp'); ?>" width="96" height="96" alt="">
                        <span>Web</span>
                    </div>
                    <div class="trust-channel trust-channel--facebook">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-facebook.webp'); ?>" width="96" height="96" alt="">
                        <span>Facebook</span>
                    </div>
                    <div class="trust-channel trust-channel--business">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-business.webp'); ?>" width="96" height="96" alt="">
                        <strong>Tu negocio</strong>
                    </div>
                    <div class="trust-channel trust-channel--instagram">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-instagram.webp'); ?>" width="96" height="96" alt="">
                        <span>Instagram</span>
                    </div>
                    <div class="trust-channel trust-channel--linktree" aria-label="Linktree">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-linktree.svg'); ?>" width="96" height="96" alt="">
                        <span>Linktree</span>
                    </div>
                    <div class="trust-channel trust-channel--whatsapp">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-whatsapp.webp'); ?>" width="96" height="96" alt="">
                        <span>WhatsApp Business</span>
                    </div>
                    <div class="trust-channel trust-channel--google">
                        <img src="<?php echo esc_url($trust_images_uri . '/trust-google.webp'); ?>" width="96" height="96" alt="">
                        <span>Google</span>
                    </div>
                </div>

                <div class="trust-reach" aria-label="Alcance de las plataformas">
                    <div><strong>3.070 M</strong><span>Facebook</span></div>
                    <div><strong>2.000 M</strong><span>Instagram</span></div>
                    <div><strong>70 M+</strong><span>Linktree</span></div>
                    <p>Millones de personas ya usan estos espacios para descubrir y comparar negocios.</p>
                </div>

                <p class="trust-conclusion"><span aria-hidden="true">✓</span><strong>Más lugares donde encontrarte. Más señales de confianza. Más oportunidades de conseguir clientes.</strong></p>
            </div>
            <aside class="package-hero-contact" id="consulta" aria-label="Formulario de contacto">
                <?php echo do_shortcode('[codepty_formulario_contacto]'); ?>
            </aside>
        </div>
    </section>

    <?php get_template_part('template-parts/more-trust-content'); ?>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
