<?php
/**
 * Guía pública: Crear página de empresa en Facebook.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('codepty-guide-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main>
    <section class="guides-hero">
        <div class="container">
            <p class="eyebrow">Guía · Cuentas</p>
            <h1>Cómo crear tu página de empresa en Facebook</h1>
            <p class="subtitle">
                Una página de empresa es distinta a tu perfil personal: es pública, permite
                varios administradores y muestra información de contacto y horarios.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <ol class="guide-steps">
                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">01</span>
                    <div>
                        <h3>Crea la página (no un perfil personal)</h3>
                        <p>Desde tu cuenta personal de Facebook, ve a "Páginas" → "Crear nueva página". Elige el nombre de tu negocio y la categoría que mejor lo describa.</p>
                        <div class="image-placeholder">[IMAGEN 1: Pantalla "Crear página" de Facebook]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">02</span>
                    <div>
                        <h3>Completa la información básica de empresa</h3>
                        <p>Añade descripción, categoría, dirección (si aplica), teléfono, horario de atención, y foto de perfil y portada.</p>
                        <div class="image-placeholder">[IMAGEN 2: Sección de información de la página completada]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">03</span>
                    <div>
                        <h3>Danos acceso de administrador/editor</h3>
                        <p>Ve a Configuración → Roles de página (o "Centro de cuentas" en las versiones nuevas) → Añadir persona, e ingresa el correo o perfil de CodePTY con rol de Administrador o Editor.</p>
                        <div class="image-placeholder">[IMAGEN 3: Pantalla "Roles de página" al añadir un nuevo administrador]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">04</span>
                    <div>
                        <h3>Avísanos cuando esté listo</h3>
                        <p>Escríbenos por WhatsApp confirmando que ya creaste la página y nos diste acceso, para verificarlo y continuar.</p>
                    </div>
                </li>
            </ol>

            <div class="card why-note">
                <p>Por qué te lo pedimos:</p>
                <p>Con acceso de administrador podemos conectar la página a tu web, gestionar mensajes y publicaciones, y mantener tu presencia en Facebook actualizada como parte de tu paquete Presencia Web.</p>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
