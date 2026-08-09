<?php
/**
 * Página pública: una web adaptada al negocio.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('codepty-service-detail'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido">
    <section class="service-hero">
        <div class="container service-hero-grid">
            <div>
                <nav class="breadcrumbs" aria-label="Migas de pan">
                    <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
                    <span aria-hidden="true">/</span>
                    <span aria-current="page">Diseño adaptado al negocio</span>
                </nav>
                <p class="eyebrow">Tu negocio, no una plantilla genérica</p>
                <h1>Una página web que se parezca a tu negocio</h1>
                <p class="subtitle">Adaptamos el diseño, las fotografías y los mensajes a lo que haces y a la forma en que atiendes a tus clientes. El resultado debe sentirse como una extensión natural de tu negocio.</p>
                <div class="service-actions">
                    <a class="button primary" href="<?php echo esc_url(home_url('/#inicio')); ?>">Ver todo lo incluido por $200</a>
                    <a class="service-secondary-link" href="<?php echo esc_url(home_url('/#contacto')); ?>">Cuéntanos sobre tu negocio</a>
                </div>
            </div>
            <aside class="service-summary" aria-label="En pocas palabras">
                <strong>En pocas palabras</strong>
                <p>No necesitas saber de diseño ni escribir un documento técnico. Conversamos contigo, ordenamos la información y preparamos una propuesta que podrás revisar antes de publicarla.</p>
            </aside>
        </div>
    </section>

    <section class="service-section">
        <div class="container service-reading">
            <p class="eyebrow">Una identidad reconocible</p>
            <h2>La página debe parecer parte del negocio</h2>
            <p>Una clínica dental no debe parecer una ferretería. Un restaurante familiar no necesita hablar como una gran corporación. Una tienda de ropa, un taller y un abogado tampoco necesitan el mismo tono ni las mismas imágenes.</p>
            <p>No tomamos una plantilla y nos limitamos a cambiarle el nombre. Primero entendemos qué vendes, a quién atiendes y qué impresión necesitas transmitir. Después coordinamos cada decisión para que un cliente que ya conoce tu local, tus vehículos o tus redes pueda reconocerte también en la web.</p>
            <blockquote>La meta no es decorar una página: es presentar tu negocio con claridad y ayudar al visitante a entender qué haces, por qué puede confiar en ti y cómo contactarte.</blockquote>
        </div>
    </section>

    <section class="service-section service-section--soft">
        <div class="container service-split">
            <div>
                <p class="eyebrow">Primero te escuchamos</p>
                <h2>Una conversación sencilla sobre tu negocio</h2>
                <p>La entrevista inicial se parece más a una conversación con un cliente que a una reunión técnica. Te preguntaremos:</p>
                <ul class="service-checklist">
                    <li>Qué vendes o qué servicios prestas.</li>
                    <li>Quiénes son tus clientes y qué suelen necesitar.</li>
                    <li>Qué distingue a tu negocio de otras opciones.</li>
                    <li>Cómo atiendes hoy y qué dudas recibes con frecuencia.</li>
                    <li>Qué quieres que haga el visitante: escribir, llamar, visitar o pedir información.</li>
                    <li>Qué imagen deseas transmitir: cercana, práctica, elegante, técnica o familiar.</li>
                </ul>
            </div>
            <div>
                <h3>Qué materiales puedes compartir</h3>
                <p>Todo ayuda, aunque no hace falta tenerlo completo:</p>
                <ul class="service-plain-list">
                    <li>Logotipo y colores que ya utilizas.</li>
                    <li>Fotos de fachada, local, productos, trabajos, equipo, vehículos, instalaciones o maquinaria.</li>
                    <li>Folletos, tarjetas y material comercial.</li>
                    <li>Enlaces de Facebook e Instagram.</li>
                    <li>Teléfono, WhatsApp, horario, ubicación y demás datos de contacto.</li>
                </ul>
                <p><strong>¿No tienes logotipo o buenas fotografías?</strong> No te deja fuera del proceso. Podemos partir del nombre del negocio, de sus colores actuales y del material disponible; también te indicamos qué fotos sencillas conviene tomar. Si hiciera falta un trabajo adicional no confirmado en el paquete, lo aclararíamos antes de incluirlo.</p>
            </div>
        </div>
    </section>

    <nav class="service-related" aria-label="Otros aspectos de tu página web">
        <div class="container service-reading">
            <h2>También cuidamos el resto de tu presencia digital</h2>
            <div>
                <a href="<?php echo esc_url(home_url('/pagina-preparada-para-google/')); ?>">Preparación para Google</a>
                <a href="<?php echo esc_url(home_url('/pagina-web-para-moviles/')); ?>">Uso cómodo desde el móvil</a>
                <a href="<?php echo esc_url(home_url('/pagina-web-con-whatsapp/')); ?>">Conexión directa con WhatsApp</a>
                <a href="<?php echo esc_url(home_url('/pagina-web-rapida-y-segura/')); ?>">Rapidez y seguridad</a>
                <a href="<?php echo esc_url(home_url('/imagen-coordinada-web-redes/')); ?>">Imagen coordinada en web y redes</a>
            </div>
        </div>
    </nav>

    <section class="service-section">
        <div class="container service-reading">
            <p class="eyebrow">Color con una función</p>
            <h2>De un color conocido a una paleta coherente</h2>
            <p>Podemos partir del logotipo, la fachada o un color que tus clientes ya asocian con el negocio. A partir de ahí elegimos colores que se apoyen entre sí, reservamos uno para las acciones importantes y comprobamos que el texto siempre sea fácil de leer.</p>
            <div class="palette-flow" role="img" aria-label="Proceso de creación de una paleta: color principal del negocio, color secundario compatible, color para llamadas a la acción, fondos neutros y comprobación de contraste y legibilidad">
                <div class="palette-step palette-step--main"><span aria-hidden="true"></span><strong>Color principal</strong><small>El que ya reconoce el cliente</small></div>
                <span class="palette-arrow" aria-hidden="true">→</span>
                <div class="palette-step palette-step--secondary"><span aria-hidden="true"></span><strong>Color secundario</strong><small>Acompaña sin competir</small></div>
                <span class="palette-arrow" aria-hidden="true">→</span>
                <div class="palette-step palette-step--action"><span aria-hidden="true"></span><strong>Color de acción</strong><small>Destaca botones y enlaces</small></div>
                <span class="palette-arrow" aria-hidden="true">→</span>
                <div class="palette-step palette-step--neutral"><span aria-hidden="true"></span><strong>Fondos neutros</strong><small>Dan orden y descanso</small></div>
                <span class="palette-arrow" aria-hidden="true">→</span>
                <div class="palette-step palette-step--contrast"><span aria-hidden="true">Aa</span><strong>Buen contraste</strong><small>Todo se puede leer</small></div>
            </div>
        </div>
    </section>

    <section class="service-section service-section--dark">
        <div class="container service-reading">
            <p class="eyebrow">Todo cuenta la misma historia</p>
            <h2>Colores, textos, fotos y enlaces trabajan juntos</h2>
            <p>No elegimos cada parte por separado. Los colores transmiten una personalidad; las fotografías muestran el negocio real; los títulos destacan lo que importa al cliente; y los botones llevan a una acción clara.</p>
            <div class="identity-map" aria-label="Elementos coordinados a partir de la identidad del negocio">
                <strong class="identity-map-center">Identidad<br>del negocio</strong>
                <span>Colores</span><span>Fotografías</span><span>Textos</span><span>Botones y enlaces</span><span>Web y redes sociales</span>
            </div>
            <p>WhatsApp, Facebook, Instagram y Linktree deben conservar nombres, imágenes, colores y mensajes reconocibles. Así el cliente sabe que sigue tratando con el mismo negocio al pasar de un canal a otro.</p>
        </div>
    </section>

    <section class="service-section">
        <div class="container service-split">
            <div>
                <p class="eyebrow">Textos claros</p>
                <h2>Convertimos lo que nos cuentas en mensajes útiles</h2>
                <p>Ordenamos la información para responder, sin rodeos, qué hace el negocio, a quién ayuda, qué ofrece, por qué elegirlo, cómo contactar y qué paso debe dar después el visitante.</p>
                <p>Escribimos de una forma natural para tus clientes. Preparar bien la estructura y el contenido ayuda a que Google entienda la página, pero no prometemos una posición concreta ni resultados comerciales garantizados.</p>
            </div>
            <div>
                <p class="eyebrow">Revisión antes de publicar</p>
                <h2>Primera propuesta y correcciones</h2>
                <p>Preparamos una primera versión para que revises el aspecto, el orden, los mensajes y las llamadas a la acción. Puedes señalar datos incorrectos, elementos que no representan al negocio o ajustes necesarios.</p>
                <p>Antes de publicar comprobamos contigo nombres, servicios, precios facilitados, teléfonos, enlaces y horarios. No indicamos aquí un número de revisiones porque ese punto debe quedar definido en el alcance comercial de cada proyecto.</p>
            </div>
        </div>
    </section>

    <section class="service-section service-section--soft">
        <div class="container service-example">
            <div>
                <p class="eyebrow">Ejemplo ficticio</p>
                <h2>De información desordenada a una presencia reconocible</h2>
                <p>Imaginemos “Taller El Puente”, un negocio ficticio que solo tiene fotos tomadas con el teléfono, una tarjeta azul y atiende principalmente por WhatsApp.</p>
            </div>
            <ol class="example-steps">
                <li><strong>Identidad:</strong> azul de la tarjeta como color principal, gris de taller como apoyo y rojo solo para acciones.</li>
                <li><strong>Mensaje principal:</strong> “Mantenimiento y reparación de autos con atención directa por WhatsApp”.</li>
                <li><strong>Fotografías:</strong> fachada, equipo trabajando y dos reparaciones representativas, con encuadres claros.</li>
                <li><strong>Acción:</strong> botón visible para consultar por WhatsApp y datos iguales en web, Facebook e Instagram.</li>
            </ol>
            <p class="example-note">Este ejemplo sirve únicamente para explicar el proceso. No representa a un cliente real ni promete resultados.</p>
        </div>
    </section>

    <section class="service-section">
        <div class="container faq-grid service-faq">
            <header class="faq-heading">
                <p class="eyebrow">Dudas habituales</p>
                <h2>Lo que quizá estás pensando</h2>
                <p class="subtitle">No necesitas llegar con todo resuelto. Parte de nuestro trabajo es ayudarte a ordenar la información.</p>
            </header>
            <div class="faq-list">
                <details><summary>No tengo logotipo</summary><p>Podemos comenzar con el nombre, los colores y la imagen que ya utiliza el negocio. Si necesitas un servicio adicional de identidad o logotipo, se definirá antes de hacerlo.</p></details>
                <details><summary>No tengo buenas fotografías</summary><p>Te indicamos qué conviene fotografiar y cómo obtener imágenes sencillas y útiles. Revisaremos el material disponible antes de decidir si hace falta otra solución.</p></details>
                <details><summary>No sé qué textos poner</summary><p>No tienes que redactarlos. A partir de la conversación inicial organizamos una propuesta clara, y tú compruebas que los datos y las afirmaciones sean correctos.</p></details>
                <details><summary>Mi negocio ya tiene Facebook</summary><p>Perfecto. Revisamos la información existente y coordinamos nombre, imagen, datos y enlaces con la nueva web.</p></details>
                <details><summary>No sé utilizar Instagram</summary><p>El paquete contempla preparar un perfil de empresa. Te explicaremos los datos básicos necesarios sin dar por hecho que ya conoces la plataforma.</p></details>
                <details><summary>Solo atiendo por WhatsApp</summary><p>Podemos convertir WhatsApp en la acción principal y situar el enlace en los puntos donde el visitante ya tiene suficiente información para escribirte.</p></details>
                <details><summary>Mis colores actuales no combinan</summary><p>Conservamos lo que hace reconocible al negocio y ajustamos proporciones, tonos y fondos para lograr una página coherente y legible.</p></details>
                <details><summary>¿Tengo que preparar toda la información yo?</summary><p>No. Te hacemos preguntas sencillas y ordenamos las respuestas. Sí necesitaremos que confirmes que los datos, servicios y condiciones son correctos.</p></details>
                <details><summary>¿La página será igual que la de otros negocios?</summary><p>No. Puede compartir buenas prácticas de navegación, pero los colores, fotografías, mensajes y prioridades se deciden a partir de tu negocio.</p></details>
                <details><summary>¿Podré revisarla antes de publicarla?</summary><p>Sí. Verás una primera propuesta y podrás señalar correcciones antes de la publicación.</p></details>
                <details><summary>¿Todo esto está incluido en los $200?</summary><p>La oferta confirmada incluye página web, página profesional de Facebook, perfil de empresa en Instagram, Linktree y configuración de WhatsApp Business por $200. Aspectos no definidos todavía —como revisiones, producción fotográfica o creación completa de logotipo— deben aclararse en el alcance antes de comenzar.</p></details>
            </div>
        </div>
    </section>

    <section class="closing service-closing">
        <div class="container">
            <div class="closing-box">
                <div>
                    <p class="eyebrow">Una presencia completa por $200</p>
                    <h2>Haz que tu negocio se reconozca también en Internet</h2>
                    <p>Página web, Facebook, Instagram, Linktree y WhatsApp Business con una imagen coordinada.</p>
                </div>
                <div class="closing-actions">
                    <a class="button light" href="<?php echo esc_url(home_url('/#contacto')); ?>">Quiero hablar de mi negocio</a>
                    <a class="service-home-link" href="<?php echo esc_url(home_url('/#inicio')); ?>">Volver a la oferta de $200</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
