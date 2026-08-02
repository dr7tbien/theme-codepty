<?php
/**
 * Guía pública: Crear y configurar Google Business Profile.
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
            <h1>Cómo crear y configurar tu Google Business Profile</h1>
            <p class="subtitle">
                Google Business Profile (antes "Google Mi Negocio") es el perfil gratuito que
                hace que tu negocio aparezca en Google Maps y en los resultados de búsqueda
                locales. Es totalmente gratis y distinto de Google Workspace (el correo de pago).
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <ol class="guide-steps">
                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">01</span>
                    <div>
                        <h3>Entra a Google Business Profile</h3>
                        <p>Ve a business.google.com con tu cuenta de Google (o crea una nueva exclusiva para el negocio) y elige "Administrar ahora".</p>
                        <div class="image-placeholder">[IMAGEN 1: Página de inicio de Google Business Profile]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">02</span>
                    <div>
                        <h3>Crea el perfil de tu negocio</h3>
                        <p>Ingresa el nombre del negocio, la categoría, si atiendes en un local o a domicilio, la dirección o zona de cobertura, teléfono y sitio web.</p>
                        <div class="image-placeholder">[IMAGEN 2: Formulario de creación del perfil]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">03</span>
                    <div>
                        <h3>Verifica el negocio</h3>
                        <p>Google te pedirá verificar la propiedad del negocio, normalmente por código postal, llamada telefónica o video en directo. Sigue las instrucciones que te muestre en pantalla.</p>
                        <div class="image-placeholder">[IMAGEN 3: Pantalla de verificación del negocio]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">04</span>
                    <div>
                        <h3>Añádenos como gestor</h3>
                        <p>Ve a "Usuarios" dentro del perfil → "Añadir usuarios" → ingresa el correo de gestión de CodePTY y asígnale el rol de "Gestor".</p>
                        <div class="image-placeholder">[IMAGEN 4: Pantalla "Usuarios" al añadir un nuevo gestor]</div>
                    </div>
                </li>
            </ol>

            <div class="card why-note">
                <p>Por qué te lo pedimos:</p>
                <p>Un Google Business Profile bien configurado mejora tu visibilidad en Google Maps y en las búsquedas locales, y te da credibilidad frente a clientes potenciales gracias a las reseñas. Como gestores podemos mantenerlo actualizado y conectado a tu web.</p>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
