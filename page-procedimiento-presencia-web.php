<?php
/**
 * Página privada: Procedimiento de trabajo para Presencia Web.
 * Visible solo para Administrador y el rol "Equipo CodePTY"
 * (control de acceso en functions.php: codepty_guard_private_pages).
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <?php wp_head(); ?>
</head>

<body <?php body_class('codepty-internal-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main>
    <section class="hero">
        <div class="container">
            <span class="private-notice">🔒 Uso interno — Equipo CodePTY</span>
            <p class="eyebrow" style="margin-top:16px;">Procedimiento de trabajo</p>
            <h1>Presencia Web</h1>
            <p class="subtitle">
                Referencia interna con los guiones y pasos a seguir durante la atención al
                cliente del paquete Presencia Web.
            </p>
        </div>
    </section>

    <section aria-labelledby="guion-conversacion">
        <div class="container">
            <p class="eyebrow" id="guion-conversacion">Atención por WhatsApp Business</p>
            <h2>Guion de conversación con clientes</h2>
            <p class="subtitle">
                Regla general: el cliente siempre debe iniciar la conversación en WhatsApp,
                para evitar reportes de cuenta no solicitados.
            </p>

            <ol class="message-list">
                <li class="card message-card">
                    <p class="message-label">1. Saludo — el cliente ya explicó qué necesita</p>
                    <blockquote id="msg-1">Hola, al habla [tu nombre] de CodePTY. Dame un momento, por favor.</blockquote>
                    <button type="button" class="copy-button" data-copy-target="msg-1">📋 Copiar</button>
                </li>

                <li class="card message-card">
                    <p class="message-label">2. Saludo — el cliente solo saludó, sin decir qué necesita</p>
                    <blockquote id="msg-2">Hola, al habla [tu nombre] de CodePTY. Dime, ¿cómo te puedo ayudar?</blockquote>
                    <button type="button" class="copy-button" data-copy-target="msg-2">📋 Copiar</button>
                </li>

                <li class="card message-card">
                    <p class="message-label">3. Filtro — piden que se repita lo que ya está en la web</p>
                    <blockquote id="msg-3">Toda la información de nuestros paquetes y servicios está detallada aquí: <?php echo esc_url(home_url('/#servicios')); ?>. Échale un vistazo y si tienes alguna duda puntual después de leerla, seguimos por aquí.</blockquote>
                    <button type="button" class="copy-button" data-copy-target="msg-3">📋 Copiar</button>
                </li>

                <li class="card message-card">
                    <p class="message-label">4. Accesos y tareas — al confirmar la contratación de Presencia Web</p>
                    <blockquote id="msg-4">¡Perfecto! Para arrancar con tu presencia web, necesitamos que hagas lo siguiente:<br>
                        1️⃣ Contratar tu hosting aquí: [enlace de afiliado Hostinger]<br>
                        2️⃣ Crear tu página de Facebook (empresa) y darnos acceso como administrador/editor a: [email de gestión] (guía aquí: <?php echo esc_url(home_url('/guias/facebook/')); ?>)<br>
                        3️⃣ Crear tu cuenta de Instagram profesional y darnos acceso admin (guía aquí: <?php echo esc_url(home_url('/guias/instagram/')); ?>)<br>
                        4️⃣ Crear tu WhatsApp Business (guía aquí: <?php echo esc_url(home_url('/guias/whatsapp-business/')); ?>)<br>
                        5️⃣ Crear tu perfil de Google Business y darnos acceso como gestor (guía aquí: <?php echo esc_url(home_url('/guias/google-business/')); ?>)<br>
                        6️⃣ Enviarnos tu logo (si ya tienes) y fotos/textos de tu negocio<br>
                        En cuanto tengamos esto, comenzamos con el diseño de tu web. Cualquier duda con alguno de estos pasos, aquí estamos.</blockquote>
                    <button type="button" class="copy-button" data-copy-target="msg-4">📋 Copiar</button>
                </li>
            </ol>

            <div class="card quick-reply-note">
                <p><strong>Nota:</strong> guarda también estos textos como "Respuestas rápidas" dentro de la app de WhatsApp Business, con estos atajos sugeridos:</p>
                <div class="quick-reply-tags">
                    <code>/saludo1</code>
                    <code>/saludo2</code>
                    <code>/referencia</code>
                    <code>/accesos</code>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
