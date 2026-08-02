<?php
/**
 * Guía pública: Crear tu WhatsApp Business.
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
            <h1>Cómo crear tu WhatsApp Business</h1>
            <p class="subtitle">
                WhatsApp Business es la versión gratuita de WhatsApp pensada para negocios:
                te permite tener un perfil con información de tu empresa, respuestas rápidas
                y estadísticas básicas.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <ol class="guide-steps">
                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">01</span>
                    <div>
                        <h3>Descarga la app WhatsApp Business</h3>
                        <p>Búscala en Google Play o App Store como "WhatsApp Business" (ícono verde con un maletín). No la confundas con el WhatsApp normal.</p>
                        <div class="image-placeholder">[IMAGEN 1: Búsqueda de WhatsApp Business en la tienda de apps]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">02</span>
                    <div>
                        <h3>Regístrate con el número de tu negocio</h3>
                        <p>Usa un número exclusivo para el negocio (idealmente distinto a tu WhatsApp personal) y verifícalo con el código SMS o llamada que te llegue.</p>
                        <div class="image-placeholder">[IMAGEN 2: Pantalla de registro del número de teléfono]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">03</span>
                    <div>
                        <h3>Completa el perfil de empresa</h3>
                        <p>Ve a Ajustes → Herramientas para la empresa → Perfil de empresa y añade: nombre, categoría del negocio, descripción, dirección, horario y correo.</p>
                        <div class="image-placeholder">[IMAGEN 3: Formulario de perfil de empresa completado]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">04</span>
                    <div>
                        <h3>Comparte el número con CodePTY</h3>
                        <p>Envíanos el número de WhatsApp Business ya verificado para conectarlo al botón de contacto de tu web.</p>
                    </div>
                </li>
            </ol>

            <div class="card why-note">
                <p>Por qué te lo pedimos:</p>
                <p>Un WhatsApp Business propio te da un perfil profesional, mensajes automáticos y estadísticas, y nos permite conectar el botón de contacto de tu web directamente con tu número, sin depender de cuentas personales.</p>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
