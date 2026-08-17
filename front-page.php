<?php
/**
 * Front page template.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('codepty-front-page'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/site-header'); ?>

<main id="inicio">

    <section class="hero">
        <div class="container grid two-cols">

            <article class="card offer">
                <p class="eyebrow">Todo para poner tu negocio en Internet</p>

                <h1>Página web para tu negocio en Panamá</h1>

                <p class="subtitle">
                    Creamos tu página web y preparamos tus principales canales digitales para
                    que tu negocio se vea profesional y tus clientes puedan encontrarte y contactarte fácilmente.
                </p>

                <div class="price">
                    <span>Paquete completo</span>
                    <strong>$200</strong>
                    <span>Pago único</span>
                </div>

                <ul class="checklist">
                    <li>Página web para tu negocio</li>
                    <li>Página profesional de Facebook</li>
                    <li>Perfil de empresa en Instagram</li>
                    <li>Linktree con todos tus enlaces</li>
                    <li>Configuración de WhatsApp Business</li>
                </ul>

                <div class="actions">
                    <a class="button primary" href="<?php echo esc_url(home_url('/pagina-web-para-tu-negocio-en-panama/')); ?>">Más información</a>
                </div>
            </article>

            <aside class="card contact" id="contacto" aria-label="Formulario de contacto">
                <?php echo do_shortcode('[codepty_formulario_contacto]'); ?>
            </aside>

            
            <!-- aside class="card contact" id="contacto" aria-label="Formulario de contacto">
                <a class="whatsapp" href="https://wa.me/50766726470">
                    <span class="whatsapp-icon" aria-hidden="true">        
                        <svg class="whatsapp-svg" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                            <path 
                                fill="#25D366"
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93a7.898 7.898 0 0 0-2.327-5.607zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c.003-3.626 2.957-6.579 6.591-6.579a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.957 6.587-6.592 6.587zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.331.065-.133.034-.247-.015-.346-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.397 2.132 3.383 2.992.473.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.17-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                    </span>

                    <span>
                        <strong class="w-number">+507 6672 6470</strong>
                    </span>
                </a>

                <form action="#" method="post">
                    <h2>Cuéntanos qué necesitas</h2>

                    <label>
                        <input
                            type="text"
                            name="nombre"
                            autocomplete="name"
                            placeholder="Nombre"
                            aria-label="Nombre"
                        >
                    </label>

                    <label>
                        <input
                            type="tel"
                            name="telefono"
                            autocomplete="tel"
                            placeholder="Teléfono"
                            aria-label="Teléfono"
                        >
                    </label>

                    <label>
                        <input
                            type="email"
                            name="email"
                            autocomplete="email"
                            placeholder="Email"
                            aria-label="Email"
                        >
                    </label>

                    <label>
                        <textarea
                            class="message"
                            name="mensaje"
                            placeholder="Mensaje"
                            aria-label="Mensaje"
                        ></textarea>
                    </label>

                    <button class="button primary full" type="submit">
                        Enviar consulta
                    </button>
                </form>
            </aside -->
            
        </div>
    </section>

    <section class="value" id="servicios">
        <div class="container">

            <header>
                <p class="eyebrow">Presencia digital seria</p>

                <h2>
                    Una presencia digital seria<br>
                    para aumentar los clientes
                </h2>

                <p class="subtitle center">
                    Convertimos tu presencia online en una herramienta clara para generar confianza,
                    recibir contactos y atender mejor desde el móvil.
                </p>
            </header>

<div class="grid three-cols">

    <article class="card feature">
        <div class="icon" aria-hidden="true">✓</div>

        <h3>Más confianza</h3>

        <p>
            Una web profesional da credibilidad y te diferencia de negocios que solo usan redes sociales.
        </p>

        <a class="button small primary" href="/mas-confianza">Más info</a>
    </article>

    <article class="card feature">
        <div class="icon red" aria-hidden="true">+</div>

        <h3>Más contactos</h3>

        <p>
            Conectamos tu web con WhatsApp, formulario, Facebook, Instagram y Google.
        </p>

        <a class="button small primary" href="/mas-contactos">Ver más</a>
    </article>

    <article class="card feature">
        <div class="icon" aria-hidden="true">⚡</div>

        <h3>Más velocidad</h3>

        <p>
            Páginas ligeras, móviles y rápidas para que el cliente no se vaya esperando.
        </p>

        <a class="button small primary" href="/mas-velocidad">Averigua más</a>
    </article>

</div>

        </div>
    </section>

    <section class="included">
        <div class="container">
            <header class="section-heading">
                <p class="eyebrow">Todo lo necesario para empezar</p>
                <h2>Una web lista para trabajar por tu negocio</h2>
                <p class="subtitle center">
                    Nos ocupamos de la parte técnica y te entregamos una presencia digital clara,
                    profesional y fácil de utilizar.
                </p>
            </header>

            <div class="included-grid">
                <a class="included-item" href="<?php echo esc_url(home_url('/web-adaptada-a-tu-negocio/')); ?>">
                    <span class="item-number" aria-hidden="true">01</span>
                    <div>
                        <h3>Una web que se parece a tu negocio</h3>
                        <p>Adaptamos colores, textos e imágenes para reflejar la personalidad real de tu negocio.</p>
                        <span class="included-link">Descubre cómo diseñamos tu página web <span aria-hidden="true">→</span></span>
                    </div>
                </a>

                <a class="included-item" href="<?php echo esc_url(home_url('/pagina-preparada-para-google/')); ?>">
                    <span class="item-number red" aria-hidden="true">02</span>
                    <div>
                        <h3>Preparada para que Google la entienda</h3>
                        <p>Organizamos la estructura, los títulos y la información para que Google pueda interpretar tu página.</p>
                        <span class="included-link">Conoce cómo preparamos tu web para Google <span aria-hidden="true">→</span></span>
                    </div>
                </a>

                <a class="included-item" href="<?php echo esc_url(home_url('/pagina-web-para-moviles/')); ?>">
                    <span class="item-number" aria-hidden="true">03</span>
                    <div>
                        <h3>Cómoda de usar desde el móvil</h3>
                        <p>Tu página se adapta a teléfonos, tabletas y computadoras sin perder claridad.</p>
                        <span class="included-link">Mira cómo adaptamos tu web al móvil <span aria-hidden="true">→</span></span>
                    </div>
                </a>

                <a class="included-item" href="<?php echo esc_url(home_url('/pagina-web-con-whatsapp/')); ?>">
                    <span class="item-number red" aria-hidden="true">04</span>
                    <div>
                        <h3>Contacto directo por WhatsApp</h3>
                        <p>Situamos WhatsApp, teléfono y formulario donde tus clientes los necesitan.</p>
                        <span class="included-link">Descubre cómo conectamos tu web con WhatsApp <span aria-hidden="true">→</span></span>
                    </div>
                </a>

                <a class="included-item" href="<?php echo esc_url(home_url('/pagina-web-rapida-y-segura/')); ?>">
                    <span class="item-number" aria-hidden="true">05</span>
                    <div>
                        <h3>Rápida y protegida</h3>
                        <p>Usamos código ligero, certificado SSL y buenas prácticas para reducir esperas y riesgos.</p>
                        <span class="included-link">Conoce cómo cuidamos la rapidez y seguridad <span aria-hidden="true">→</span></span>
                    </div>
                </a>

                <a class="included-item" href="<?php echo esc_url(home_url('/imagen-coordinada-web-redes/')); ?>">
                    <span class="item-number red" aria-hidden="true">06</span>
                    <div>
                        <h3>Imagen coordinada en web y redes</h3>
                        <p>Tu web, Facebook e Instagram comparten una imagen reconocible y mensajes coherentes.</p>
                        <span class="included-link">Explora cómo coordinamos tu presencia digital <span aria-hidden="true">→</span></span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <header class="section-heading">
                <p class="eyebrow">Un proceso sencillo</p>
                <h2>De la idea a una web publicada</h2>
                <p class="subtitle center">
                    Avanzamos contigo en cuatro pasos claros, sin lenguaje complicado ni sorpresas.
                </p>
            </header>

            <ol class="process-list">
                <li class="card process-step">
                    <span>1</span>
                    <h3>Nos cuentas tu negocio</h3>
                    <p>Hablamos de tus clientes, objetivos, servicios y materiales disponibles.</p>
                </li>

                <li class="card process-step">
                    <span>2</span>
                    <h3>Preparamos la propuesta</h3>
                    <p>Organizamos el contenido y diseñamos una primera versión para revisar juntos.</p>
                </li>

                <li class="card process-step">
                    <span>3</span>
                    <h3>Ajustamos los detalles</h3>
                    <p>Incorporamos tus comentarios y comprobamos la página en móvil y computadora.</p>
                </li>

                <li class="card process-step">
                    <span>4</span>
                    <h3>Publicamos</h3>
                    <p>Conectamos el dominio, activamos la seguridad y dejamos la web preparada.</p>
                </li>
            </ol>
        </div>
    </section>

    <section class="promise">
        <div class="container promise-grid">
            <div class="promise-copy">
                <p class="eyebrow">Claro desde el primer día</p>
                <h2>Tu web, tus accesos y tu información</h2>
                <p class="subtitle">
                    Trabajamos para que entiendas qué estás contratando. Te damos acceso a tus archivos
                    y publicamos guías para que puedas conocer y gestionar lo que entregamos.
                </p>
                <a class="text-link" href="<?php echo esc_url(home_url('/guias/')); ?>">
                    Consultar nuestras guías <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="card promise-panel">
                <ul class="promise-list">
                    <li>
                        <strong>Propiedad clara</strong>
                        <span>Tu dominio, tu contenido y tus archivos.</span>
                    </li>
                    <li>
                        <strong>Accesos entregados</strong>
                        <span>Sin depender de nosotros para todo.</span>
                    </li>
                    <li>
                        <strong>Explicaciones sencillas</strong>
                        <span>Documentación abierta y sin ocultar la parte técnica.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container faq-grid">
            <header class="faq-heading">
                <p class="eyebrow">Preguntas frecuentes</p>
                <h2>Antes de empezar</h2>
                <p class="subtitle">
                    Estas son algunas de las dudas habituales. Si la tuya no está aquí, escríbenos.
                </p>
            </header>

            <div class="faq-list">
                <details>
                    <summary>¿Qué necesito entregar para comenzar?</summary>
                    <p>Una explicación de tu negocio, tus datos de contacto, logotipo si lo tienes y las imágenes o textos disponibles.</p>
                </details>

                <details>
                    <summary>¿La página funcionará bien en teléfonos?</summary>
                    <p>Sí. Diseñamos primero pensando en una navegación cómoda desde el móvil y después comprobamos otros tamaños.</p>
                </details>

                <details>
                    <summary>¿Podré usar mi propio dominio?</summary>
                    <p>Sí. Podemos trabajar con un dominio que ya tengas o ayudarte a conectar uno nuevo a la página.</p>
                </details>

                <details>
                    <summary>¿La web será realmente mía?</summary>
                    <p>Sí. Te entregamos los accesos y los archivos correspondientes para que mantengas el control de tu proyecto.</p>
                </details>
            </div>
        </div>
    </section>

    <section class="closing">
        <div class="container">
            <div class="closing-box">
                <div>
                    <p class="eyebrow">Hablemos de tu proyecto</p>
                    <h2>Tu negocio merece una web seria</h2>
                    <p>Cuéntanos qué necesitas y te responderemos con una propuesta clara.</p>
                </div>
                <div class="closing-actions">
                    <!-- a class="button primary" href="#contacto">Pedir cotización</a -->
                    <a class="button light" href="#contacto">Contactar</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_template_part('template-parts/site-footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
