<?php
/**
 * Página pública: información completa del paquete de página web.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail codepty-package-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="service-hero" id="resumen">
        <div class="container package-hero-grid">
            <nav class="breadcrumbs" aria-label="Migas de pan">
                <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a><span aria-hidden="true">/</span><span aria-current="page">Página web para tu negocio</span>
            </nav>
            <div class="package-hero-copy">
                <p class="eyebrow">Todo Conectado: Web, Facebook, Instagram, WhatsApp, linktree</p>
                <h1>Página web para tu negocio en Panamá</h1>
                
                <aside class="service-summary" aria-label="Resumen del paquete">
                    <strong>Mucho más que una página aislada</strong>
                    <p>Creamos la web y preparamos tus principales canales para que el negocio tenga una imagen coherente, sea fácil de conocer y ofrezca varias formas de contacto.</p>
                    <ul class="service-summary__list">
                        <li><span class="service-summary__item-title">Página web profesional</span><span>El espacio principal para explicar qué haces, mostrar tus servicios y recibir consultas.</span></li>
                        <li><span class="service-summary__item-title">Facebook e Instagram para tu negocio</span><span>Preparamos inicialmente ambos perfiles con información e imagen coordinadas con la web.</span></li>
                        <li><span class="service-summary__item-title">Linktree con tus enlaces</span><span>Reunimos en un solo lugar la web, las redes y las formas de contacto.</span></li>
                        <li><span class="service-summary__item-title">WhatsApp Business</span><span>Configuramos la información inicial para facilitar una atención directa y profesional.</span></li>
                        <li><span class="service-summary__item-title">Guías y tutoriales</span><span>Te damos recursos prácticos para cuidar estos canales y aprovecharlos mejor para generar oportunidades de venta.</span></li>
                    </ul>
                </aside>
            </div>
            <aside class="package-hero-contact" id="consulta" aria-label="Consulta sobre el paquete web">
                <?php echo do_shortcode('[codepty_formulario_contacto]'); ?>
            </aside>
        </div>
    </section>

    <!-- nav class="package-index" aria-labelledby="package-index-title">
        <div class="container">
            <p class="eyebrow">Contenido de esta página</p>
            <h2 id="package-index-title">Encuentra rápidamente lo que necesitas saber</h2>
            <div class="package-index-list">
                <details><summary>Qué recibes por $200</summary><div><p>Una página web profesional y la preparación inicial de los canales incluidos para presentar tu negocio y recibir contactos.</p><a href="#incluye">Ver qué recibes</a></div></details>
                <details><summary>Alcance, servicios adicionales y hosting</summary><div><p>Te explicamos qué cubre el precio, qué opciones pueden presupuestarse aparte y cómo mantienes el control del hosting.</p><a href="#alcance">Ver el alcance</a></div></details>
                <details><summary>Cómo desarrollamos tu página</summary><div><p>Conocemos el negocio, reunimos materiales, diseñamos, revisamos y preparamos una entrega clara.</p><a href="#proceso">Ver el proceso</a></div></details>
                <details><summary>Qué debes aportar tú</summary><div><p>Datos, materiales, accesos y una persona responsable de revisar y aprobar el proyecto.</p><a href="#necesitamos">Ver qué debes aportar</a></div></details>
                <details><summary>Plazos y revisiones</summary><div><p>Conoce el plazo orientativo, cuándo comienza y cómo organizamos las correcciones.</p><a href="#tiempos">Ver plazos y revisiones</a></div></details>
                <details><summary>Entrega, hosting y trabajos posteriores</summary><div><p>Recibes el proyecto definitivo y conservas el control directo de tus cuentas, dominio y alojamiento.</p><a href="#entrega">Ver cómo se entrega</a></div></details>
                <details><summary>Preguntas frecuentes</summary><div><p>Respuestas claras sobre dominio, hosting, Google, ventas online, propiedad, materiales y cambios futuros.</p><a href="#preguntas">Ver las respuestas</a></div></details>
            </div>
        </div>
    </nav -->

    <section class="service-section anchor-section" id="incluye">
        <div class="container service-reading">
            <p class="eyebrow">El centro de tu presencia en Internet</p>
            <h2>Una página web de aterrizaje repleta de contenido</h2>
            <p>Tu página web será el lugar principal donde explicar el negocio con claridad. Reunirá la información que una persona necesita para entender qué ofreces, decidir si encaja con lo que busca y contactar contigo sin dificultad.</p>
            <div class="website-content-grid">
                <article>
                    <h3>Contenido útil para tus clientes</h3>
                    <p>Explicamos a qué se dedica la empresa, qué vende o qué servicios presta, a quién se dirige y, cuando corresponda, sus precios y condiciones principales.</p>
                </article>
                <article>
                    <h3>SEO trabajado en toda la página</h3>
                    <p>Organizamos títulos, textos, enlaces y datos para que los buscadores entiendan el negocio y la página disponga de una base sólida para ganar visibilidad.</p>
                </article>
                <article>
                    <h3>Formas de contacto evidentes</h3>
                    <p>WhatsApp, teléfono, correo y formulario aparecen en lugares fáciles de reconocer para que el visitante no tenga que buscar cómo comunicarse.</p>
                </article>
                <article>
                    <h3>Todos tus canales conectados</h3>
                    <p>Enlazamos tus redes sociales y, si procede, tus perfiles, tiendas o productos en plataformas como Amazon, eBay y otros canales relevantes.</p>
                </article>
            </div>
            <h3 class="package-breakdown-title">Además, el paquete conecta y prepara tus canales principales</h3>
            <div class="package-card-grid">
                <article><span>01</span><h3>Página web profesional</h3><p>Diseño adaptado a tu negocio, estructura clara, textos organizados, imágenes, servicios, datos de contacto y llamadas a la acción.</p></article>
                <article><span>02</span><h3>Experiencia móvil cuidada</h3><p>La navegación, los paneles, botones y textos se preparan para que la página resulte cómoda en pantallas táctiles, tabletas y computadoras.</p></article>
                <article><span>03</span><h3>Contacto conectado</h3><p>Integramos WhatsApp, teléfono, correo y formulario para que el visitante pueda elegir cómo comunicarse.</p></article>
                <article><span>04</span><h3>Preparación para Google</h3><p>Estructura, títulos, descripciones y contenido comprensible para buscadores, como base para trabajar la visibilidad de tu negocio.</p></article>
                <article><span>05</span><h3>Redes coordinadas</h3><p>Preparación inicial de página profesional de Facebook, perfil de empresa en Instagram y Linktree con enlaces principales.</p></article>
                <article><span>06</span><h3>WhatsApp Business</h3><p>Configuración inicial de la información del negocio para que el canal de atención se vea completo y profesional.</p></article>
            </div>
        </div>
    </section>

    <section class="service-section service-section--soft anchor-section" id="alcance">
        <div class="container service-split">
            <div><p class="eyebrow">Un precio con alcance claro - Servicios adicionales y hosting</p><h2>Si tu proyecto necesita algo más</h2><p>El paquete cubre la web informativa y los canales descritos en esta página. Tienda online, reservas, pagos, áreas privadas, integraciones a medida, campañas, gestión mensual de redes, producción profesional de fotografía o vídeo, traducciones y trabajos completos de marca se pueden estudiar como servicios adicionales.</p><p>Antes de empezar dejamos por escrito qué se realizará. Cualquier ampliación se valora y se confirma contigo antes de incorporarla.</p></div>
            <div><h3>Servicios contratados directamente por ti</h3><ul class="service-plain-list"><li>Dominio y alojamiento web.</li><li>Suscripciones, licencias o herramientas de pago.</li><li>Presupuesto de anuncios en Google o redes sociales.</li><li>Comisiones de plataformas de pago o reserva.</li></ul><p>Estas cuentas quedan a tu nombre y mantienes una relación directa con cada proveedor.</p></div>
        </div>
    </section>

    <aside id="hosting" class="hosting-recommendation" aria-labelledby="hosting-recommendation-title">
        <div class="container">
            <div class="hosting-banner">
                <div class="hosting-banner-copy">
                    <p class="hosting-label">Tu alojamiento, bajo tu control</p>
                    <h2 id="hosting-recommendation-title">Recomendamos Hostinger plan Unlimited 3.79$/mes</h2>
                    <h3 style="color:yellow;">codePTY no recibe comisión alguna por recomendar Hostinger. Hemos elegido Hostinger, por precio, soporte y facilidad de uso, pero puedes contratar cualquier proveedor con PHP y MySQL.</h3>
                    <p>&nbsp;</p>
                    <p>Conocemos bien el entorno de Hostinger y podemos recomendarlo como punto de partida. El plan se elige según las necesidades reales del proyecto y las condiciones vigentes cuando vayas a contratar.</p>
                    <ul aria-label="Responsabilidades del alojamiento web">
                        <li>El contrato y la facturación quedan a tu nombre</li>
                        <li>Tú conservas el acceso y el control de la cuenta</li>
                        <li>El proveedor atiende el soporte y la infraestructura del servidor</li>
                        <li>CodePTY se ocupa del desarrollo de tu página web</li>
                    </ul>
                </div>
                <div class="hosting-banner-action">
                    <span class="hosting-recommended-badge">Nuestra recomendación</span>
                    <a class="button hosting-button" href="https://www.hostinger.com/pricing" target="_blank" rel="noopener noreferrer">Consultar opciones en Hostinger <span aria-hidden="true">→</span></a>
                    <small>Revisa directamente con el proveedor los precios, recursos, renovaciones y soporte disponibles en el momento de contratar.</small>
                </div>


            </div>
        </div>
    </aside>

    <section class="service-section anchor-section" id="proceso">
        <div class="container service-reading">
            <p class="eyebrow">De la conversación a Internet - Cómo desarrollamos tu página</p><h2>El proceso, paso a paso</h2>
            <ol class="package-timeline">
                <li><span>1</span><div><h3>Conocemos el negocio</h3><p>Hablamos sobre servicios, clientes, diferencias, objetivos y formas de contacto. Confirmamos si el paquete encaja.</p></div></li>
                <li><span>2</span><div><h3>Confirmamos alcance y materiales</h3><p>Dejamos por escrito qué se realizará, qué debes facilitarnos, el precio y desde cuándo empieza a contar el plazo.</p></div></li>
                <li><span>3</span><div><h3>Preparamos estructura y contenido</h3><p>Ordenamos la información, redactamos una propuesta y adaptamos el aspecto visual a la identidad del negocio.</p></div></li>
                <li><span>4</span><div><h3>Presentamos la primera versión</h3><p>Recibes un enlace privado o de revisión para comprobar textos, imágenes, datos y funcionamiento.</p></div></li>
                <li><span>5</span><div><h3>Corregimos, comprobamos y aprobamos</h3><p>Aplicamos las correcciones acordadas, revisamos móvil, enlaces, formularios y datos de contacto, y recogemos tu aprobación final.</p></div></li>
                <li><span>6</span><div><h3>Preparamos la entrega definitiva</h3><p>Recibes el proyecto o tema definitivo en un archivo ZIP, junto con una explicación clara de lo entregado y de los accesos que te corresponden.</p></div></li>
            </ol>
        </div>
    </section>

    <section class="service-section service-section--dark anchor-section" id="necesitamos">
        <div class="container service-split">
            <div><p class="eyebrow">Un proyecto colaborativo</p><h2>Qué debes aportar tú</h2><p>Nombre comercial, descripción de servicios, teléfono, WhatsApp, correo, dirección o zona de atención, horarios, logotipo si existe, colores, fotografías disponibles y enlaces a perfiles actuales.</p><p>Para configurar las cuentas incluidas necesitaremos una invitación de gestión o el acceso acordado. Las credenciales se comparten mediante el canal seguro que definamos contigo.</p></div>
            <div><h3>Para avanzar con fluidez</h3><ul class="service-checklist"><li>Designa a una persona que apruebe el contenido.</li><li>Entrega los materiales juntos y con nombres comprensibles.</li><li>Confirma que tienes derecho a usar textos, marcas y fotografías.</li><li>Revisa teléfonos, precios, horarios y afirmaciones antes de aprobar.</li><li>Responde a las consultas de revisión en el plazo acordado.</li></ul></div>
        </div>
    </section>

    <section class="service-section anchor-section" id="tiempos">
        <div class="container service-reading">
            <p class="eyebrow">Planificación realista</p><h2>Cuánto tarda</h2>
            <p>El plazo se confirma para cada proyecto y comienza cuando están aprobados el alcance, el pago acordado y los materiales y accesos necesarios. Como orientación, una página informativa sencilla suele requerir entre <strong>7 y 15 días laborables</strong> desde ese momento.</p>
            <div class="package-time-grid"><div><strong>Etapa 1</strong><span>recopilación y organización</span></div><div><strong>Etapa 2</strong><span>diseño y primera versión</span></div><div><strong>Etapa 3</strong><span>revisión, correcciones y entrega</span></div></div>
            <p class="package-note">Estos tiempos sirven como orientación. El calendario se adapta al volumen de contenido, las funciones adicionales, la recepción de materiales, las aprobaciones y cualquier incidencia de proveedores externos. Si falta información necesaria, acordamos contigo una nueva fecha de continuación.</p>
        </div>
    </section>

    <section class="service-section service-section--soft anchor-section" id="revisiones">
        <div class="container service-split">
            <div><p class="eyebrow">Antes de la entrega</p><h2>Revisión y correcciones</h2><p>Revisas la propuesta como un conjunto y agrupas las correcciones en una lista clara. Así mantenemos una única versión de referencia y avanzamos con orden.</p><p>La confirmación del proyecto indicará el número de rondas y su alcance. Los nuevos objetivos, secciones o funciones que amplíen el trabajo inicial se pueden valorar como una ampliación.</p></div>
            <div><h3>Qué debes comprobar</h3><ul class="service-checklist"><li>Nombre, servicios, precios y condiciones.</li><li>Teléfonos, correos, dirección y horarios.</li><li>Fotografías y permisos para utilizarlas.</li><li>Enlaces de WhatsApp y redes sociales.</li><li>Que los mensajes describan el negocio con exactitud.</li></ul><p>Tu aprobación final confirma los datos y permite preparar el archivo definitivo para la entrega.</p></div>
        </div>
    </section>

    <section class="service-section anchor-section" id="entrega">
        <div class="container service-reading"><p class="eyebrow">Una entrega limpia y comprensible</p><h2>Qué recibes al terminar</h2><p>Cuando apruebas el proyecto, preparamos la versión definitiva y te entregamos el proyecto o tema en un archivo ZIP. También recibes los accesos que correspondan y un resumen de lo realizado. Antes de entregar comprobamos navegación, visualización móvil, enlaces de contacto y funcionamiento del formulario.</p><blockquote>Tu dominio, hosting y cuentas permanecen a tu nombre. Tú mantienes el control directo y CodePTY utiliza solamente el acceso necesario durante el trabajo.</blockquote><p>La instalación o cualquier ayuda concreta dentro de tu hosting se define en la confirmación del proyecto. El proveedor de alojamiento mantiene la responsabilidad sobre el servidor, su infraestructura y su soporte.</p></div>
    </section>

    <section class="service-section service-section--dark anchor-section" id="despues">
        <div class="container service-split"><div><p class="eyebrow">Autonomía después de la entrega</p><h2>Cómo se cuida la página</h2><p>El dominio y el alojamiento se mantienen activos desde tus cuentas. El proveedor atiende el servidor y sus incidencias; el contenido del negocio, las actualizaciones y las comprobaciones periódicas se gestionan según la modalidad que elijas.</p></div><div><h3>Cuidados habituales</h3><ul class="service-checklist"><li>Renovar dominio, alojamiento y licencias.</li><li>Custodiar accesos y activar verificación en dos pasos.</li><li>Actualizar la información cuando cambie el negocio.</li><li>Responder los contactos recibidos.</li><li>Utilizar extensiones y código de fuentes confiables.</li></ul><p>Si deseas que CodePTY realice mantenimiento, cambios de contenido o nuevas funciones, podemos acordar un servicio posterior con alcance, plazo y precio propios.</p></div></div>
    </section>

    <section class="service-section anchor-section" id="preguntas">
        <div class="container faq-grid service-faq">
            <header class="faq-heading"><p class="eyebrow">Antes de decidir</p><h2>Preguntas frecuentes</h2><p class="subtitle">Si tu caso es diferente, utiliza el formulario de esta página y lo revisamos contigo antes de empezar.</p></header>
            <div class="faq-list">
                <details><summary>¿Cómo se contratan el dominio y el hosting?</summary><p>Los contratas directamente con el proveedor y quedan a tu nombre. Así conservas el control de la cuenta, la facturación y el acceso al soporte del servidor. Si no tienes hosting  recomendamos este <a href="#hosting">hosting</a>.</p></details>
                <details><summary>¿Puedo usar un dominio que ya tengo?</summary><p>Sí. Comprobaremos dónde está registrado y qué acceso técnico hace falta para conectarlo conservando tu titularidad.</p></details>
                <details><summary>¿Qué preparación recibe la web para Google?</summary><p>Entregamos una estructura y un contenido comprensibles para buscadores. La posición final también depende de la competencia, antigüedad, contenido, reputación y trabajo continuado.</p></details>
                <details><summary>¿Puedo vender o cobrar desde la página?</summary><p>Podemos estudiar una tienda, pagos o reservas como ampliación y preparar una propuesta específica para esas funciones.</p></details>
                <details><summary>¿Qué pasa si todavía no tengo textos o fotos?</summary><p>Te ayudamos a ordenar los textos a partir de una conversación y te indicamos qué fotografías conviene preparar. La producción profesional, compra de imágenes o trabajos extensos se valoran según la necesidad.</p></details>
                <details><summary>¿La página será mía?</summary><p>Sí. Recibes el proyecto o tema definitivo en ZIP y mantienes bajo tu control el dominio, las cuentas y el contenido aportado, dentro de las condiciones de licencia de las herramientas utilizadas.</p></details>
                <details><summary>¿Puedo pedir cambios después de la entrega?</summary><p>Sí. Revisamos el cambio que necesitas y confirmamos su alcance, coste y plazo como un trabajo posterior. En cualquier caso realizar cambios de textos en una web es algo parecido a un editor de texto y lo podrás hacer tú mismo.</p></details>
                <details><summary>¿Cuándo empieza a contar el plazo?</summary><p>Cuando estén confirmados el alcance y el pago acordado, y hayamos recibido los materiales, decisiones y accesos necesarios para trabajar.</p></details>
            </div>
        </div>
    </section>

    <!-- section class="closing service-closing" id="contratar"><div class="container"><div class="closing-box"><div><p class="eyebrow">Tu página web por $200</p><h2>Cuéntanos qué necesita tu negocio</h2><p>Revisamos tu caso y confirmamos por escrito alcance, requisitos y calendario antes de empezar.</p></div><div class="closing-actions"><a class="button light" href="#consulta">Consultar el paquete</a><a class="service-home-link" href="<?php echo esc_url(home_url('/')); ?>">Volver al inicio</a></div></div></div></section -->
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
