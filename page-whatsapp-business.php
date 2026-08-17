<?php
/**
 * Guía pública: configurar WhatsApp Business.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(array('codepty-guide-page', 'whatsapp-setup-guide')); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="guides-hero wa-guide-hero">
        <div class="container">
            <nav class="breadcrumbs" aria-label="Migas de pan"><a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><a href="<?php echo esc_url(home_url('/guias/')); ?>">Guías</a><span aria-hidden="true">/</span><span aria-current="page">WhatsApp Business</span></nav>
            <p class="eyebrow">Guía práctica · Configuración completa</p>
            <h1>Cómo configurar WhatsApp Business para tu negocio</h1>
            <p class="subtitle">Desde la instalación y el perfil comercial hasta los mensajes automáticos, el catálogo, la seguridad y el enlace que conectaremos con tu página web.</p>
            <div class="wa-guide-meta"><span>Tiempo orientativo: 30–60 minutos</span><span>Necesitas acceso al número comercial</span><span>Android o iPhone</span></div>
        </div>
    </section>

    <nav class="wa-guide-index" aria-label="Contenido de la guía"><div class="container"><a href="#antes">Antes de empezar</a><a href="#perfil">Perfil</a><a href="#atencion">Atención</a><a href="#catalogo">Catálogo</a><a href="#seguridad">Seguridad</a><a href="#comprobacion">Comprobación</a></div></nav>

    <section class="wa-guide-section" id="antes"><div class="container wa-guide-reading">
        <p class="eyebrow">Antes de empezar</p><h2>Prepara el número y protege tus conversaciones</h2>
        <div class="wa-callout wa-callout--warning"><strong>Si ya utilizas ese número en WhatsApp personal</strong><p>No registres el número apresuradamente. Actualiza la aplicación, realiza una copia de seguridad y utiliza la opción de migración cuando WhatsApp Business la ofrezca. Un número no puede permanecer activo al mismo tiempo en la aplicación personal y en WhatsApp Business.</p></div>
        <div class="wa-requirements"><article><h3>Ten preparado</h3><ul><li>El teléfono que recibe SMS o llamadas del número comercial.</li><li>Nombre exacto del negocio.</li><li>Logotipo o fotografía de perfil.</li><li>Categoría, descripción, horario y zona de atención.</li><li>Correo, web y dirección, si deben mostrarse.</li></ul></article><article><h3>Nunca compartas</h3><ul><li>El código de seis dígitos recibido por SMS.</li><li>El PIN de verificación en dos pasos.</li><li>Contraseñas o copias de seguridad.</li><li>Códigos QR para vincular dispositivos que no reconozcas.</li></ul></article></div>
    </div></section>

    <section class="wa-guide-section wa-guide-section--soft"><div class="container wa-guide-reading">
        <p class="eyebrow">Instalación y registro</p><h2>Instala la aplicación oficial y verifica tu número</h2>
        <ol class="wa-numbered"><li><span>1</span><div><h3>Descarga WhatsApp Business</h3><p>Instálala desde Google Play o App Store. Comprueba que sea la aplicación oficial de WhatsApp y que el icono incluya una “B”.</p></div></li><li><span>2</span><div><h3>Selecciona Panamá y escribe el número</h3><p>Elige Panamá (<strong>+507</strong>) y escribe el número sin repetir el prefijo. Revisa cada dígito antes de continuar.</p></div></li><li><span>3</span><div><h3>Verifica el código</h3><p>Recibe el código mediante SMS o llamada e introdúcelo únicamente dentro de la aplicación. CodePTY no necesita conocerlo.</p></div></li><li><span>4</span><div><h3>Restaura la copia si corresponde</h3><p>Si migras desde WhatsApp personal y aparece una copia compatible, confirma que pertenece al número correcto antes de restaurarla.</p></div></li></ol>
        <div class="wa-screen" role="img" aria-label="Ilustración de la pantalla para verificar un número de Panamá"><div class="wa-screen__top">WhatsApp Business</div><div class="wa-screen__body"><span class="wa-screen__icon">B</span><strong>Verifica tu número</strong><small>País</small><div class="wa-screen__field">Panamá &nbsp; +507</div><small>Número de teléfono</small><div class="wa-screen__field">6672 6470</div><div class="wa-screen__button">Siguiente</div></div></div>
    </div></section>

    <section class="wa-guide-section" id="perfil"><div class="container wa-guide-reading">
        <p class="eyebrow">Identidad del negocio</p><h2>Completa el perfil de empresa</h2><p>Busca <strong>Ajustes/Configuración → Herramientas para la empresa → Perfil de empresa</strong>. El nombre exacto de los menús puede variar según el teléfono y la versión instalada.</p>
        <div class="wa-profile-layout"><div><ul class="wa-field-list"><li><strong>Foto:</strong> logotipo o imagen clara que siga siendo reconocible dentro de un círculo.</li><li><strong>Nombre:</strong> el nombre comercial que aparece en la web y en tus redes.</li><li><strong>Categoría:</strong> la opción más cercana a tu actividad principal.</li><li><strong>Descripción:</strong> qué haces, para quién y en qué zona, sin eslóganes confusos.</li><li><strong>Horario:</strong> horas reales de atención y días cerrados.</li><li><strong>Dirección o zona:</strong> solo información que quieras hacer pública.</li><li><strong>Correo y web:</strong> datos comerciales revisados y activos.</li></ul></div><div class="wa-screen wa-screen--profile" role="img" aria-label="Ilustración de un perfil comercial completo"><div class="wa-screen__top">Perfil de empresa</div><div class="wa-screen__body"><div class="wa-avatar">LOGO</div><strong>Nombre del negocio</strong><small>Servicio profesional</small><div class="wa-screen__rows"><span>Descripción completa</span><span>Lun–Vie · 8:00–17:00</span><span>Ciudad de Panamá</span><span>negocio.com</span></div></div></div></div>
        <div class="wa-image-specs"><header><h3>Tamaños recomendados para preparar las imágenes</h3><p>Son medidas de trabajo prácticas, no límites garantizados: WhatsApp puede comprimir o recortar las imágenes y modificar sus requisitos.</p></header><article><div class="wa-ratio wa-ratio--square">1:1</div><h4>Foto de perfil</h4><strong>640 × 640 px</strong><p>Formato cuadrado JPG o PNG. Deja aire alrededor del logotipo porque se mostrará dentro de un círculo. Evita texto pequeño.</p></article><article><div class="wa-ratio wa-ratio--square">1:1</div><h4>Productos del catálogo</h4><strong>1200 × 1200 px</strong><p>Una imagen cuadrada, nítida y con fondo sencillo. Mantén el producto centrado y utiliza el mismo estilo en todo el catálogo.</p></article><article><div class="wa-ratio wa-ratio--vertical">9:16</div><h4>Estados, si los utilizas</h4><strong>1080 × 1920 px</strong><p>Formato vertical. Mantén textos y datos importantes alejados de los bordes superior e inferior de la pantalla.</p></article></div>
    </div></section>

    <section class="wa-guide-section wa-guide-section--dark" id="atencion"><div class="container wa-guide-reading">
        <p class="eyebrow">Atención organizada</p><h2>Configura mensajes, respuestas rápidas y etiquetas</h2>
        <div class="wa-tools-grid"><article><span>01</span><h3>Mensaje de bienvenida</h3><p>Presenta el negocio y pregunta cómo puedes ayudar. No prometas una respuesta inmediata si no puedes cumplirla.</p><blockquote>Hola, gracias por escribir a [Negocio]. Cuéntanos qué servicio necesitas y en qué zona te encuentras.</blockquote></article><article><span>02</span><h3>Mensaje de ausencia</h3><p>Indica el horario y cuándo revisarás el mensaje. Programa su envío fuera del horario comercial.</p><blockquote>Hemos recibido tu mensaje fuera de horario. Atendemos de lunes a viernes, de 8:00 a 17:00.</blockquote></article><article><span>03</span><h3>Respuestas rápidas</h3><p>Guarda respuestas repetidas con atajos fáciles de recordar.</p><div class="wa-shortcuts"><code>/horario</code><code>/ubicacion</code><code>/servicios</code><code>/pago</code></div></article><article><span>04</span><h3>Etiquetas</h3><p>Organiza las conversaciones según tu proceso, sin usar etiquetas con información sensible.</p><div class="wa-labels"><span>Consulta nueva</span><span>Esperando datos</span><span>Presupuesto enviado</span><span>Seguimiento</span><span>Finalizado</span></div></article></div>
        <p class="wa-menu-note">Estas opciones suelen estar dentro de <strong>Herramientas para la empresa</strong>. Abre cada mensaje, activa la función, escribe el texto, elige destinatarios u horario y guarda. Después pruébalo desde otro número.</p>
    </div></section>

    <section class="wa-guide-section" id="catalogo"><div class="container wa-guide-reading">
        <p class="eyebrow">Productos o servicios</p><h2>Crea un catálogo solo si ayuda al cliente</h2><p>El catálogo puede presentar servicios, productos o categorías principales. No es obligatorio para todos los negocios: una selección breve y actualizada es mejor que una lista extensa y abandonada.</p>
        <div class="wa-catalog"><div><h3>Para cada elemento prepara</h3><ul><li>Nombre breve y reconocible.</li><li>Imagen cuadrada recomendada de 1200 × 1200 px.</li><li>Precio solo si es correcto y puede mantenerse actualizado.</li><li>Descripción concreta, sin afirmaciones que no puedas demostrar.</li><li>Enlace hacia la página correspondiente, cuando exista.</li><li>Código interno, únicamente si realmente lo utilizas.</li></ul><p><strong>Revisa periódicamente:</strong> disponibilidad, precios, enlaces, fotografías y condiciones.</p></div><div class="wa-product-card" aria-label="Ejemplo ilustrado de ficha de catálogo"><div class="wa-product-card__image"><span>1200</span><b>×</b><span>1200</span></div><h3>Nombre del servicio</h3><strong>$—</strong><p>Descripción breve que explica qué recibe el cliente.</p><span class="wa-product-card__link">Ver en la web</span></div></div>
    </div></section>

    <section class="wa-guide-section wa-guide-section--soft"><div class="container wa-guide-reading">
        <p class="eyebrow">Conexión con la web</p><h2>Crea y prueba el enlace corto</h2><p>En <strong>Herramientas para la empresa → Enlace corto</strong> encontrarás un enlace que abre una conversación con tu número. Puedes añadir un mensaje inicial, pero debe ser breve y útil.</p>
        <div class="wa-link-flow"><div><span>1</span><strong>Copia el enlace</strong><small>Comprueba que contiene el número correcto.</small></div><div><span>2</span><strong>Prepara el saludo</strong><small>Ejemplo: “Hola, quiero información sobre…”</small></div><div><span>3</span><strong>Pruébalo</strong><small>Ábrelo en móvil y computadora.</small></div><div><span>4</span><strong>Envíalo a CodePTY</strong><small>Conectaremos el enlace aprobado con tu web.</small></div></div>
        <div class="wa-callout"><strong>El mensaje no se envía automáticamente</strong><p>El enlace abre WhatsApp y puede completar un texto inicial. La persona decide si lo revisa y lo envía. No añadas datos privados del visitante al enlace.</p></div>
    </div></section>

    <section class="wa-guide-section" id="seguridad"><div class="container wa-guide-reading">
        <p class="eyebrow">Cuenta protegida</p><h2>Activa la seguridad y controla los dispositivos</h2>
        <div class="wa-security-grid"><article><h3>Verificación en dos pasos</h3><p>En Cuenta → Verificación en dos pasos, crea un PIN que no reutilices y añade un correo de recuperación al que el negocio conserve acceso.</p></article><article><h3>Dispositivos vinculados</h3><p>Revisa periódicamente las computadoras y navegadores con sesión abierta. Cierra cualquier dispositivo que no reconozcas o que ya no utilice el equipo.</p></article><article><h3>Acceso del equipo</h3><p>No compartas códigos ni dejes la cuenta ligada al teléfono personal de un antiguo colaborador. Define quién responde y quién conserva el número.</p></article><article><h3>Privacidad</h3><p>Recoge solo la información necesaria, evita enviar datos sensibles sin protección y bloquea o reporta mensajes abusivos o fraudulentos.</p></article></div>
    </div></section>

    <section class="wa-guide-section wa-guide-section--dark" id="comprobacion"><div class="container wa-guide-reading">
        <p class="eyebrow">Antes de terminar</p><h2>Lista final de comprobación</h2>
        <div class="final-checklist wa-final-checklist"><label><input type="checkbox">El nombre, el número y la categoría son correctos.</label><label><input type="checkbox">La foto se reconoce cuando aparece recortada en círculo.</label><label><input type="checkbox">Descripción, horario, dirección, correo y web están actualizados.</label><label><input type="checkbox">Bienvenida y ausencia se activan en el momento correcto.</label><label><input type="checkbox">Las respuestas rápidas no contienen información desactualizada.</label><label><input type="checkbox">Las etiquetas reflejan el proceso real de atención.</label><label><input type="checkbox">Catálogo, precios y enlaces están revisados, si se utiliza.</label><label><input type="checkbox">El enlace corto abre el número correcto desde otro teléfono.</label><label><input type="checkbox">La verificación en dos pasos está activa y el correo de recuperación funciona.</label><label><input type="checkbox">No hay dispositivos vinculados desconocidos.</label></div>
        <div class="wa-share"><h3>Qué debes enviar a CodePTY</h3><p>Comparte el número comercial completo, el enlace corto probado, el mensaje inicial aprobado, el horario y la confirmación de que el perfil ya está configurado. Puedes enviar también el logotipo original para preparar una versión adecuada.</p><p><strong>No envíes códigos SMS, PIN, contraseñas ni códigos QR de vinculación.</strong></p></div>
    </div></section>

    <section class="wa-guide-section"><div class="container wa-guide-reading"><p class="eyebrow">Si algo falla</p><h2>Problemas frecuentes</h2><div class="faq-list wa-guide-faq"><details><summary>No recibo el código de verificación</summary><p>Comprueba país, prefijo y número; confirma que la línea recibe SMS o llamadas y espera el contador antes de pedir otro código. No pruebes repetidamente en pocos minutos.</p></details><details><summary>El número ya aparece registrado</summary><p>Puede estar activo en WhatsApp personal, Business u otro teléfono. Revisa dónde se utiliza y prepara la copia antes de migrar. Si no reconoces el registro, utiliza las opciones oficiales de recuperación.</p></details><details><summary>No encuentro una opción o el menú se llama distinto</summary><p>Actualiza la aplicación y busca en Ajustes/Configuración y Herramientas para la empresa. Android, iPhone y distintas versiones pueden ordenar los menús de forma diferente.</p></details><details><summary>La foto de perfil corta el logotipo</summary><p>Coloca el logotipo en el centro de un lienzo cuadrado de 640 × 640 px y aumenta el espacio libre alrededor. Comprueba la vista circular antes de guardarlo.</p></details><details><summary>El mensaje de ausencia se envía cuando estamos abiertos</summary><p>Revisa la zona horaria del teléfono, el horario definido en el perfil y la programación del mensaje. Haz una prueba desde otro número dentro y fuera del horario.</p></details><details><summary>¿CodePTY necesita mi contraseña?</summary><p>No. Para conectar la web necesitamos el número, el enlace y el texto acordado. Nunca nos envíes el código SMS ni el PIN de verificación.</p></details></div></div></section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
