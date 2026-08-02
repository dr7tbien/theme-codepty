<?php
/**
 * Guía pública: Crear cuenta profesional de Instagram.
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
            <h1>Cómo crear tu cuenta profesional de Instagram</h1>
            <p class="subtitle">
                Una cuenta profesional (o "de empresa") desbloquea estadísticas, botones de
                contacto y la posibilidad de vincularla a tu página de Facebook.
            </p>
        </div>
    </section>

    <section>
        <div class="container">
            <ol class="guide-steps">
                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">01</span>
                    <div>
                        <h3>Crea o usa una cuenta de Instagram para el negocio</h3>
                        <p>Puede ser una cuenta nueva o una que ya tengas, siempre que se use exclusivamente para el negocio.</p>
                        <div class="image-placeholder">[IMAGEN 1: Pantalla de creación de cuenta de Instagram]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">02</span>
                    <div>
                        <h3>Cambia a cuenta profesional</h3>
                        <p>Ve a tu perfil → menú (☰) → Configuración → Cuenta → "Cambiar a cuenta profesional" y elige la categoría "Empresa".</p>
                        <div class="image-placeholder">[IMAGEN 2: Menú "Cambiar a cuenta profesional"]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number" aria-hidden="true">03</span>
                    <div>
                        <h3>Vincúlala con tu página de Facebook</h3>
                        <p>Durante ese mismo proceso, Instagram te ofrecerá conectar la cuenta con tu página de Facebook de empresa; acéptalo para mantener ambas sincronizadas.</p>
                        <div class="image-placeholder">[IMAGEN 3: Pantalla de vinculación con Facebook]</div>
                    </div>
                </li>

                <li class="card guide-step">
                    <span class="item-number red" aria-hidden="true">04</span>
                    <div>
                        <h3>Danos acceso de administrador/colaborador</h3>
                        <p>Como Instagram gestiona el acceso a través de Facebook, añádenos como administrador o editor desde los "Roles de página" de tu página de Facebook vinculada.</p>
                    </div>
                </li>
            </ol>

            <div class="card why-note">
                <p>Por qué te lo pedimos:</p>
                <p>Con la cuenta profesional vinculada podemos ayudarte a publicar contenido, revisar estadísticas y mantener coherencia entre tu Instagram, tu Facebook y tu web.</p>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
