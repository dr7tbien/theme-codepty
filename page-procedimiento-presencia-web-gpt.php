<?php
/**
 * Página interna: procedimiento completo del paquete Presencia Web GPT.
 * El acceso se limita en functions.php a Administrador y EquipoCodePTY.
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive, nosnippet">
    <?php wp_head(); ?>
</head>

<body <?php body_class('codepty-procedure-page'); ?>>
<?php wp_body_open(); ?>
<?php get_template_part('template-parts/site-header'); ?>

<main id="contenido-principal">
    <section class="procedure-hero">
        <div class="container">
            <span class="private-notice">🔒 Documento interno · Equipo CodePTY</span>
            <p class="eyebrow">Manual comercial y de producción</p>
            <h1>Procedimiento Presencia Web GPT</h1>
            <p class="subtitle">
                Guía para diagnosticar, vender, producir y entregar el paquete completo de
                presencia digital de un cliente, desde el primer contacto hasta el seguimiento.
            </p>
            <div class="procedure-alert">
                <strong>Regla principal:</strong> no se inicia la producción hasta completar la
                ficha del cliente, acordar el alcance y recibir los accesos y materiales imprescindibles.
            </div>
        </div>
    </section>

    <section class="procedure-index" aria-labelledby="indice">
        <div class="container">
            <p class="eyebrow">Navegación</p>
            <h2 id="indice">Índice del procedimiento</h2>
            <nav class="procedure-nav" aria-label="Índice del procedimiento">
                <a href="#principios">Principios</a>
                <a href="#ficha-cliente">Los 11 puntos</a>
                <a href="#diagnostico">Diagnóstico</a>
                <a href="#propuesta">Propuesta y cierre</a>
                <a href="#produccion">Producción</a>
                <a href="#landing">Landing y SEO</a>
                <a href="#canales">Canales digitales</a>
                <a href="#revision">Revisión y entrega</a>
                <a href="#objeciones">Objeciones</a>
                <a href="#checklist-final">Checklist final</a>
            </nav>
        </div>
    </section>

    <section id="principios" class="procedure-section">
        <div class="container">
            <p class="eyebrow">Antes de empezar</p>
            <h2>Principios que debe seguir el vendedor</h2>
            <div class="procedure-grid procedure-grid--3">
                <article class="card procedure-card">
                    <span class="procedure-number">01</span>
                    <h3>Diagnosticar antes de ofrecer</h3>
                    <p>No presentar una solución cerrada sin entender el negocio, el cliente ideal, el objetivo y los recursos disponibles.</p>
                </article>
                <article class="card procedure-card">
                    <span class="procedure-number">02</span>
                    <h3>Prometer solo lo controlable</h3>
                    <p>No garantizar primeras posiciones en Google, ventas concretas, seguidores ni fechas que el equipo no haya confirmado.</p>
                </article>
                <article class="card procedure-card">
                    <span class="procedure-number">03</span>
                    <h3>Registrar todas las decisiones</h3>
                    <p>Alcance, textos, revisiones, responsables, accesos y aprobaciones deben quedar por escrito en el expediente del cliente.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="ficha-cliente" class="procedure-section procedure-section--soft">
        <div class="container">
            <p class="eyebrow">Paso obligatorio</p>
            <h2>Los 11 puntos que debemos pedir al cliente</h2>
            <p class="subtitle procedure-intro">
                El vendedor debe completar esta ficha. En cada punto se indica qué preguntar,
                por qué lo necesitamos y qué producirá CodePTY con la respuesta.
            </p>

            <div class="procedure-stack">
                <article class="card intake-card">
                    <header><span>1</span><h3>Información del negocio</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Nombre comercial y razón social.</li><li>Actividad, historia y años de experiencia.</li><li>País, ciudades, dirección y zona de servicio.</li><li>Horario, teléfono, WhatsApp y correo.</li><li>Si atiende de forma local, nacional o internacional.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Presentación de marca, datos de contacto, textos institucionales, SEO geográfico y perfiles empresariales.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>2</span><h3>Servicios o productos</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Qué vende y cuál es su oferta prioritaria.</li><li>Problema que resuelve y beneficios concretos.</li><li>Qué incluye, duración y forma de entrega.</li><li>Precio o rango, aunque no vaya a publicarse.</li><li>Servicio más rentable y servicio más solicitado.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Jerarquía de la landing, secciones de servicios, llamadas a la acción, contenidos y oferta comercial.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>3</span><h3>Cliente ideal</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Si vende a empresas, autónomos o consumidores.</li><li>Sector, tamaño, cargo, edad o situación relevante.</li><li>País, ciudad e idioma.</li><li>Problema urgente, dudas y objeciones habituales.</li><li>Qué valora: confianza, precio, rapidez o especialización.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Definir tono, argumentos, diseño, segmentación, palabras clave y contenido de redes sociales.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>4</span><h3>Objetivo de la presencia web</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Qué debe hacer el visitante: escribir, llamar, reservar, comprar o solicitar presupuesto.</li><li>Cuál será la conversión principal y cuál la secundaria.</li><li>Quién atenderá los contactos y en cuánto tiempo.</li><li>Qué resultado comercial espera obtener.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Diseñar el recorrido del usuario, los formularios, botones, automatizaciones y métricas de éxito.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>5</span><h3>Diferenciación y propuesta de valor</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Por qué lo eligen sus mejores clientes.</li><li>Qué hace diferente, mejor o más fácil.</li><li>Metodología, especialización, garantías y soporte.</li><li>Qué afirmaciones puede demostrar.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Crear el titular principal, la propuesta de valor, los argumentos de venta y la comparación frente a alternativas.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>6</span><h3>Confianza y pruebas</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Testimonios y reseñas con autorización.</li><li>Casos de éxito y resultados verificables.</li><li>Fotografías de trabajos realizados.</li><li>Certificaciones, premios, asociaciones y cifras.</li><li>Garantías o medidas que reduzcan el riesgo.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Secciones de confianza, casos de éxito, publicaciones sociales y elementos que respalden la decisión de compra.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>7</span><h3>Marca y material visual</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Logotipo en formato de calidad y variantes.</li><li>Colores, tipografías y manual de marca.</li><li>Fotografías y vídeos propios.</li><li>Catálogos, presentaciones y documentos existentes.</li><li>Referencias visuales que le gustan y las que no.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Diseño web, foto de perfil, portadas, plantillas sociales y coherencia entre todos los canales.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>8</span><h3>SEO y mercados objetivo</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Servicios y productos prioritarios.</li><li>Países, ciudades e idiomas que quiere trabajar.</li><li>Cómo cree que lo buscan sus clientes.</li><li>Dominio y posicionamiento actual.</li><li>Consultas o páginas que ya generan contactos.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Investigación de intención de búsqueda, estructura, metadatos, contenido local o internacional y plan editorial.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>9</span><h3>Competencia y alternativas</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Tres a cinco competidores directos.</li><li>Qué hacen bien y qué hacen mal.</li><li>En qué gana o pierde el cliente frente a ellos.</li><li>Qué hace su comprador si decide no contratar.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Detectar oportunidades de posicionamiento, diferenciación, contenidos necesarios y estándares del mercado.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>10</span><h3>Información comercial y legal</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Precios, moneda, impuestos y formas de pago.</li><li>Condiciones, cancelaciones y devoluciones.</li><li>Datos del responsable del negocio.</li><li>Políticas de privacidad y cookies existentes.</li><li>Permiso para usar imágenes, marcas y testimonios.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Mostrar condiciones correctas, preparar formularios y páginas legales y evitar publicaciones sin autorización.</p></div>
                    </div>
                </article>

                <article class="card intake-card">
                    <header><span>11</span><h3>Cuentas y accesos técnicos</h3></header>
                    <div class="intake-columns">
                        <div><h4>Preguntar</h4><ul><li>Dominio, DNS, hosting y WordPress.</li><li>Correo corporativo y cuenta Google.</li><li>Meta Business, Facebook e Instagram.</li><li>WhatsApp Business y Google Business Profile.</li><li>CRM, reservas, pagos y analítica, si existen.</li></ul></div>
                        <div><h4>Lo utilizaremos para</h4><p>Configurar, conectar, medir y entregar los activos digitales sin perder la propiedad del cliente.</p></div>
                    </div>
                    <p class="security-note"><strong>Seguridad:</strong> pedir invitaciones de usuario siempre que sea posible. Nunca solicitar contraseñas por WhatsApp, correo sin cifrar o formularios públicos.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="diagnostico" class="procedure-section">
        <div class="container">
            <p class="eyebrow">Fase comercial 1</p>
            <h2>Diagnóstico y calificación</h2>
            <div class="procedure-grid procedure-grid--2">
                <article class="card procedure-card">
                    <h3>Primera conversación</h3>
                    <ol class="procedure-list"><li>Confirmar qué vende y a quién.</li><li>Identificar el problema que desea resolver.</li><li>Preguntar qué canales tiene actualmente.</li><li>Conocer urgencia, presupuesto orientativo y quién decide.</li><li>Acordar el siguiente paso con fecha.</li></ol>
                </article>
                <article class="card procedure-card">
                    <h3>¿Es un cliente adecuado?</h3>
                    <ul class="status-list"><li><strong>Avanzar:</strong> negocio real, oferta clara, responsable disponible y expectativas razonables.</li><li><strong>Madurar:</strong> todavía no tiene materiales, presupuesto o decisión; registrar seguimiento.</li><li><strong>No aceptar:</strong> actividad ilegal, engañosa, discriminatoria o expectativas basadas en garantías falsas.</li></ul>
                </article>
            </div>
            <div class="card procedure-script">
                <h3>Pregunta de apertura recomendada</h3>
                <blockquote>Para recomendarte una presencia digital adecuada, primero necesito entender tu negocio: ¿qué vendes, a qué tipo de cliente quieres llegar y qué te gustaría que esa persona hiciera al encontrarte?</blockquote>
            </div>
        </div>
    </section>

    <section id="propuesta" class="procedure-section procedure-section--soft">
        <div class="container">
            <p class="eyebrow">Fase comercial 2</p>
            <h2>Propuesta, alcance y cierre</h2>
            <div class="procedure-grid procedure-grid--3">
                <article class="card procedure-card"><h3>1. Resumir</h3><p>Repetir el problema, objetivo, público y prioridad del cliente para confirmar que se entendió correctamente.</p></article>
                <article class="card procedure-card"><h3>2. Recomendar</h3><p>Explicar qué activos necesita y por qué. No incluir canales que el negocio no podrá atender o mantener.</p></article>
                <article class="card procedure-card"><h3>3. Documentar</h3><p>Entregar alcance, exclusiones, precio, pagos, plazo estimado, revisiones incluidas y responsabilidades.</p></article>
            </div>
            <div class="card scope-card">
                <h3>Antes de cobrar o comenzar debe quedar definido</h3>
                <ul class="checklist procedure-checklist"><li>Entregables exactos.</li><li>Número de páginas o secciones.</li><li>Canales que se crearán o configurarán.</li><li>Quién aporta textos, fotos, logo y datos legales.</li><li>Número de rondas de revisión.</li><li>Fecha condicionada a la entrega de materiales.</li><li>Mantenimiento incluido o contratado aparte.</li><li>Propiedad, accesos y forma de entrega.</li></ul>
            </div>
        </div>
    </section>

    <section id="produccion" class="procedure-section">
        <div class="container">
            <p class="eyebrow">Fase de producción</p>
            <h2>Orden obligatorio de trabajo</h2>
            <ol class="workflow-list">
                <li class="card"><span>1</span><div><h3>Abrir expediente</h3><p>Guardar contacto, alcance, pagos, responsables, respuestas de los 11 puntos y enlaces a materiales.</p></div></li>
                <li class="card"><span>2</span><div><h3>Auditar lo existente</h3><p>Revisar dominio, web, perfiles, reputación, coherencia de datos, competencia y medición actual.</p></div></li>
                <li class="card"><span>3</span><div><h3>Definir estrategia</h3><p>Propuesta de valor, audiencia, conversión, arquitectura, palabras clave, canales y métricas.</p></div></li>
                <li class="card"><span>4</span><div><h3>Producir identidad y contenidos</h3><p>Preparar mensajes, textos, imágenes, biografías, llamadas a la acción y datos normalizados.</p></div></li>
                <li class="card"><span>5</span><div><h3>Construir y configurar</h3><p>Desarrollar la landing y configurar únicamente los canales incluidos en el alcance.</p></div></li>
                <li class="card"><span>6</span><div><h3>Revisar y aprobar</h3><p>Ejecutar control técnico, enviar vista previa y registrar las correcciones dentro del alcance.</p></div></li>
                <li class="card"><span>7</span><div><h3>Publicar y medir</h3><p>Activar dominio, indexación pública, analítica, conversiones y comprobaciones posteriores.</p></div></li>
                <li class="card"><span>8</span><div><h3>Entregar y acompañar</h3><p>Transferir accesos, formar al cliente y acordar mantenimiento y seguimiento.</p></div></li>
            </ol>
        </div>
    </section>

    <section id="landing" class="procedure-section procedure-section--soft">
        <div class="container">
            <p class="eyebrow">Activo principal</p>
            <h2>Landing page, contenido y SEO</h2>
            <div class="procedure-grid procedure-grid--2">
                <article class="card procedure-card">
                    <h3>Estructura mínima recomendada</h3>
                    <ol class="procedure-list"><li>Titular con resultado, público y diferenciación.</li><li>Problema y consecuencias.</li><li>Solución y beneficios.</li><li>Servicios o componentes de la oferta.</li><li>Proceso de trabajo.</li><li>Pruebas y elementos de confianza.</li><li>Preguntas frecuentes y objeciones.</li><li>Llamada a la acción clara y repetida.</li><li>Contacto y datos legales.</li></ol>
                </article>
                <article class="card procedure-card">
                    <h3>SEO esencial</h3>
                    <ul class="procedure-list"><li>Una intención de búsqueda principal por página.</li><li>Título SEO y descripción propios.</li><li>Un solo H1 y encabezados con jerarquía lógica.</li><li>Texto útil escrito para personas, sin repetir palabras artificialmente.</li><li>URLs breves, imágenes optimizadas y textos alternativos.</li><li>Enlaces internos y datos de negocio consistentes.</li><li>Schema apropiado cuando sea verificable.</li><li>Sitemap, robots, Search Console y analítica.</li></ul>
                </article>
            </div>
            <div class="procedure-alert procedure-alert--warning"><strong>No prometer:</strong> “primera posición en Google”. Se puede prometer una implementación técnica correcta, contenido relevante, medición y mejora continua.</div>
        </div>
    </section>

    <section id="canales" class="procedure-section">
        <div class="container">
            <p class="eyebrow">Ecosistema digital</p>
            <h2>Otros elementos de presencia web</h2>
            <p class="subtitle procedure-intro">No todos los negocios necesitan todos los canales. Elegirlos según dónde busca, compara y contacta su cliente ideal.</p>
            <div class="procedure-grid procedure-grid--2 channel-grid">
                <article class="card channel-card"><h3>Facebook</h3><p>Crear o corregir la página empresarial, categoría, descripción, usuario, portada, botón de acción, datos, permisos y vinculación con Meta Business.</p><a href="<?php echo esc_url(home_url('/guias/facebook/')); ?>">Abrir guía de Facebook</a></article>
                <article class="card channel-card"><h3>Instagram</h3><p>Configurar cuenta profesional, biografía, enlace, categoría, contacto, seguridad, conexión con Facebook y primeras piezas de contenido.</p><a href="<?php echo esc_url(home_url('/guias/instagram/')); ?>">Abrir guía de Instagram</a></article>
                <article class="card channel-card"><h3>WhatsApp Business</h3><p>Completar perfil, horario, catálogo si aplica, mensaje de bienvenida, ausencia, respuestas rápidas, etiquetas y enlace de contacto medible.</p><a href="<?php echo esc_url(home_url('/guias/whatsapp-business/')); ?>">Abrir guía de WhatsApp</a></article>
                <article class="card channel-card"><h3>Google Business Profile</h3><p>Usarlo cuando el negocio sea elegible: categoría, zona, horario, descripción, servicios, fotos, acceso del propietario y plan de reseñas.</p><a href="<?php echo esc_url(home_url('/guias/google-business/')); ?>">Abrir guía de Google Business</a></article>
                <article class="card channel-card"><h3>Linktree o página de enlaces</h3><p>Incluir solo enlaces prioritarios, mantener la identidad visual y medir clics. Siempre que sea posible, valorar una página de enlaces dentro del dominio propio.</p></article>
                <article class="card channel-card"><h3>Correo corporativo</h3><p>Configurar direcciones con el dominio, firma uniforme, recuperación, autenticación y responsables. Evitar que el negocio dependa de correos personales.</p></article>
                <article class="card channel-card"><h3>LinkedIn</h3><p>Recomendarlo para servicios B2B, consultoría y captación profesional. Alinear página de empresa, perfiles clave, propuesta de valor y web.</p></article>
                <article class="card channel-card"><h3>Analítica y reputación</h3><p>Medir formularios, llamadas y WhatsApp; configurar Search Console y establecer un proceso ético para solicitar y responder reseñas.</p></article>
            </div>
            <div class="card social-data-card">
                <h3>Datos que deben ser coherentes en todos los canales</h3>
                <ul class="checklist procedure-checklist"><li>Nombre comercial y usuario.</li><li>Descripción y propuesta de valor.</li><li>Logo y estilo visual.</li><li>Teléfono, correo, dirección y horario.</li><li>Enlace principal y llamada a la acción.</li><li>Servicios, zona e idioma de atención.</li><li>Personas con acceso y recuperación segura.</li></ul>
            </div>
        </div>
    </section>

    <section id="revision" class="procedure-section procedure-section--soft">
        <div class="container">
            <p class="eyebrow">Control de calidad</p>
            <h2>Revisión, aprobación y entrega</h2>
            <div class="procedure-grid procedure-grid--3">
                <article class="card procedure-card"><h3>Contenido</h3><ul class="procedure-list"><li>Nombres, precios y contactos correctos.</li><li>Ortografía y tono revisados.</li><li>Promesas respaldadas.</li><li>Permisos de imágenes y testimonios.</li></ul></article>
                <article class="card procedure-card"><h3>Técnica</h3><ul class="procedure-list"><li>Móvil, escritorio y navegadores.</li><li>Enlaces, formularios y botones.</li><li>Velocidad, HTTPS y copias.</li><li>SEO, accesibilidad y analítica.</li></ul></article>
                <article class="card procedure-card"><h3>Entrega</h3><ul class="procedure-list"><li>Aprobación escrita.</li><li>Inventario de activos y propietarios.</li><li>Accesos transferidos de forma segura.</li><li>Formación y soporte acordado.</li></ul></article>
            </div>
            <div class="procedure-alert"><strong>Propiedad:</strong> las cuentas principales deben quedar a nombre del cliente. CodePTY recibe permisos de trabajo, no crea una dependencia innecesaria sobre activos esenciales.</div>
        </div>
    </section>

    <section id="objeciones" class="procedure-section">
        <div class="container">
            <p class="eyebrow">Apoyo al vendedor</p>
            <h2>Objeciones frecuentes</h2>
            <div class="objection-list">
                <details class="card objection-card"><summary>“Es demasiado caro”</summary><div><p><strong>Preguntar:</strong> “¿Lo comparas con otra propuesta o con el presupuesto que tenías previsto?”</p><p><strong>Responder:</strong> relacionar cada entregable con el problema y priorizar fases si fuera necesario. No ofrecer descuentos improvisados.</p></div></details>
                <details class="card objection-card"><summary>“Solo necesito Instagram”</summary><div><p><strong>Preguntar:</strong> “¿Cómo te encuentran quienes no te conocen y quién es propietario de esa audiencia?”</p><p><strong>Responder:</strong> Instagram puede ser útil, pero una web propia aporta control, credibilidad, búsqueda y un destino estable para las campañas.</p></div></details>
                <details class="card objection-card"><summary>“Ya tengo una página web”</summary><div><p><strong>Preguntar:</strong> “¿Está generando contactos y puedes medirlos?”</p><p><strong>Responder:</strong> primero se audita. Si cumple el objetivo, se mejora; si no, se propone lo estrictamente necesario.</p></div></details>
                <details class="card objection-card"><summary>“No tengo tiempo para preparar contenido”</summary><div><p><strong>Responder:</strong> CodePTY puede estructurar y redactar a partir de una entrevista, pero el cliente debe validar datos, promesas, legalidad y exactitud.</p></div></details>
                <details class="card objection-card"><summary>“Mi negocio funciona por recomendaciones”</summary><div><p><strong>Responder:</strong> la presencia web ayuda a que una recomendación se convierta en confianza: el posible cliente puede verificar servicios, trabajos y contacto antes de decidir.</p></div></details>
                <details class="card objection-card"><summary>“Mi sobrino puede hacerla”</summary><div><p><strong>Responder:</strong> respetar la alternativa y comparar alcance: estrategia, contenido, conversión, SEO, seguridad, medición, propiedad y soporte.</p></div></details>
                <details class="card objection-card"><summary>“Quiero aparecer primero en Google”</summary><div><p><strong>Responder:</strong> ninguna empresa seria puede garantizar esa posición. Sí podemos construir una base correcta, trabajar búsquedas relevantes y medir la evolución.</p></div></details>
                <details class="card objection-card"><summary>“Quiero pensarlo”</summary><div><p><strong>Preguntar:</strong> “Claro. ¿Qué aspecto necesitas valorar: inversión, alcance, tiempo o confianza?” Aclarar esa cuestión y fijar una fecha concreta de seguimiento.</p></div></details>
                <details class="card objection-card"><summary>“¿Y si la web no me trae clientes?”</summary><div><p><strong>Responder:</strong> la web es parte del sistema comercial. El resultado también depende de la oferta, demanda, tráfico, reputación y atención. Se medirán las conversiones para poder mejorar.</p></div></details>
            </div>
            <div class="card procedure-card objection-rule"><h3>Fórmula para responder</h3><p><strong>Escuchar → confirmar → preguntar → responder con evidencia → acordar el siguiente paso.</strong> Nunca discutir, ridiculizar la alternativa ni inventar urgencia.</p></div>
        </div>
    </section>

    <section id="checklist-final" class="procedure-section procedure-section--dark">
        <div class="container">
            <p class="eyebrow">Cierre del expediente</p>
            <h2>Checklist final del paquete</h2>
            <div class="final-checklist">
                <label><input type="checkbox"> Ficha de los 11 puntos completada.</label>
                <label><input type="checkbox"> Alcance, precio, plazo y revisiones aceptados.</label>
                <label><input type="checkbox"> Identidad, fotografías y textos validados.</label>
                <label><input type="checkbox"> Landing revisada en móvil y escritorio.</label>
                <label><input type="checkbox"> Formularios, WhatsApp, correo y enlaces probados.</label>
                <label><input type="checkbox"> SEO técnico y contenido revisados.</label>
                <label><input type="checkbox"> Canales contratados completos y coherentes.</label>
                <label><input type="checkbox"> Analítica y conversiones comprobadas.</label>
                <label><input type="checkbox"> Páginas legales y consentimientos revisados.</label>
                <label><input type="checkbox"> Aprobación final guardada por escrito.</label>
                <label><input type="checkbox"> Accesos entregados mediante un canal seguro.</label>
                <label><input type="checkbox"> Seguimiento y mantenimiento acordados.</label>
            </div>
            <p class="checklist-footnote">Estas casillas sirven como control durante la sesión y no guardan información al cerrar la página.</p>
        </div>
    </section>
</main>

<?php get_template_part('template-parts/site-footer'); ?>
<?php wp_footer(); ?>
</body>
</html>
