<?php
/**
 * Página pública: Más contactos.
 */

$contacts_images_uri = get_template_directory_uri() . '/assets/images';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail codepty-package-page codepty-more-contacts-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="service-hero contacts-hero" id="resumen">
        <div class="container package-hero-grid">
            <nav class="breadcrumbs" aria-label="Migas de pan">
                <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><span aria-current="page">Más contactos</span>
            </nav>
            <div class="package-hero-copy contacts-hero-copy">
                <p class="eyebrow">Más caminos hacia tu negocio</p>
                <h1 style="font-size: var(--font-h2);">Más contactos = más de todo</h1>
                <p class="contacts-intro">No todos tus clientes se sienten cómodos en el mismo lugar. Unos buscan en Google, otros prefieren Facebook o Instagram y otros quieren comprobar toda la información en tu web.</p>

                <div class="contacts-equation" aria-label="Google más Facebook más Instagram más página web producen más oportunidades de contacto">
                    <div class="contacts-equation__channel"><img src="<?php echo esc_url($contacts_images_uri . '/trust-google.webp'); ?>" width="64" height="64" alt=""><strong>Google</strong><span>Quien ya está buscando</span></div><span class="contacts-equation__operator" aria-hidden="true">+</span>
                    <div class="contacts-equation__channel"><img src="<?php echo esc_url($contacts_images_uri . '/trust-facebook.webp'); ?>" width="64" height="64" alt=""><strong>Facebook</strong><span>Quien prefiere comunidad</span></div><span class="contacts-equation__operator" aria-hidden="true">+</span>
                    <div class="contacts-equation__channel"><img src="<?php echo esc_url($contacts_images_uri . '/trust-instagram.webp'); ?>" width="64" height="64" alt=""><strong>Instagram</strong><span>Quien conecta con lo visual</span></div><span class="contacts-equation__operator" aria-hidden="true">+</span>
                    <div class="contacts-equation__channel"><img src="<?php echo esc_url($contacts_images_uri . '/trust-web.webp'); ?>" width="64" height="64" alt=""><strong>Web</strong><span>Quien necesita saber más</span></div>
                    <span class="contacts-equation__equals" aria-hidden="true">=</span>
                    <div class="contacts-equation__result"><span aria-hidden="true">+</span><strong>Más oportunidades de contacto</strong><small>WhatsApp, llamada o formulario</small></div>
                </div>

                <div class="contacts-profile-note"><strong>No tienes que mantener todos los canales con la misma intensidad.</strong><p>Sí conviene reservar el nombre de tu negocio, completar los perfiles y conectarlos. En determinadas configuraciones y campañas de Meta también puede ser necesario disponer de una cuenta profesional de Instagram vinculada.</p></div>
                <p class="contacts-clarification"><strong>Cada canal abre una puerta diferente.</strong> Más puertas no garantizan una venta, pero crean más oportunidades de ser encontrado y recibir una consulta.</p>
            </div>
            <aside class="package-hero-contact" id="consulta" aria-label="Formulario de contacto">
                <?php echo do_shortcode('[codepty_formulario_contacto]'); ?>
            </aside>
        </div>
    </section>

    <?php get_template_part('template-parts/more-contacts-content'); ?>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
