<?php
/**
 * Configuración de las seis páginas comerciales de CodePTY.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * codepty_service_landings - Devuelve el contenido editable de las páginas comerciales.
 *
 * @return array<string,array<string,mixed>>
 */
function codepty_service_landings() {
    $common_faq = array(
        array('¿Qué incluye exactamente el precio de $200?', 'Incluye una página web profesional y la preparación inicial de Facebook para empresas, Instagram para negocios, Linktree y WhatsApp Business. Antes de empezar confirmamos por escrito el alcance, los materiales y cualquier necesidad adicional.'),
        array('¿Puedo revisar la propuesta antes de publicarla?', 'Sí. Revisas la primera propuesta y señalas errores de datos, textos, imágenes o presentación. Las correcciones y límites concretos quedan definidos en el alcance antes de comenzar.'),
    );

    return array(
        'adaptada' => array(
            'slug' => 'web-adaptada-a-tu-negocio', 'crumb' => 'Web adaptada a tu negocio', 'eyebrow' => 'Tu negocio, no una plantilla genérica',
            'title' => 'Una página web que se parezca a tu negocio', 'intro' => 'Primero conocemos tu actividad, tus clientes y tu forma de trabajar. Después coordinamos estructura, textos, colores e imágenes para presentar el negocio real con claridad.',
            'form_title' => 'Cuéntanos cómo es tu negocio', 'form_intro' => 'No necesitas preparar un documento técnico. Explícanos tu caso y te responderemos con los siguientes pasos.',
            'visual' => array('Nos cuentas cómo es tu negocio', 'Ordenamos la información', 'Coordinamos textos, colores e imágenes', 'Revisas la propuesta', 'Publicamos una presencia coherente'),
            'benefit_title' => 'Tu presencia digital debe resultar reconocible', 'benefit' => 'Una clínica, un taller y una tienda no hablan ni atienden de la misma forma. La página debe reflejar la personalidad, las prioridades y la realidad de cada negocio para que un cliente entienda rápidamente dónde está y qué puede hacer.',
            'problem_title' => 'Personalizar no es llenar una plantilla', 'problem' => 'Una plantilla puede aportar una base útil, pero no decide qué necesita saber tu cliente. Evitamos forzar el contenido dentro de bloques genéricos: primero ordenamos el mensaje y después elegimos la mejor forma de presentarlo.',
            'specifics' => array('Conversación inicial sobre servicios, clientes, dudas frecuentes y forma de atención.', 'Uso del logotipo, fachada, local, equipo, productos o trabajos cuando aportan contexto.', 'Orientación para tomar fotografías sencillas si todavía tienes poco material.', 'Paleta y mensajes coherentes con la imagen que ya reconoce tu clientela.', 'Redacción y jerarquía para que la información importante aparezca en el momento adecuado.'),
            'receives' => array('Una estructura basada en las preguntas reales de tus clientes.', 'Textos ordenados y adaptados al tono del negocio.', 'Colores, fotografías y llamadas a la acción coordinados.', 'Una propuesta revisable antes de la publicación.'),
            'needs' => array('Nombre, servicios, zona, horarios y datos de contacto.', 'Logotipo, colores o material comercial, si existen.', 'Fotografías disponibles de espacios, equipo, productos o trabajos.', 'Tu revisión para confirmar que cada afirmación es correcta.'),
            'faq' => array_merge(array(array('¿Y si no tengo logotipo o buenas fotografías?', 'Podemos partir del nombre, los colores y el material disponible. Te indicamos qué fotografías sencillas conviene tomar. La creación completa de una identidad o una producción fotográfica se cotizan aparte si fueran necesarias.'), array('¿La página será igual a la de otros negocios?', 'Compartirá buenas prácticas de navegación, pero sus mensajes, imágenes, prioridades y aspecto se decidirán a partir de tu negocio.')), $common_faq),
        ),
        'google' => array(
            'slug' => 'pagina-preparada-para-google', 'crumb' => 'Página preparada para Google', 'eyebrow' => 'Claridad para personas y buscadores',
            'title' => 'Una página preparada para que Google la entienda', 'intro' => 'Organizamos títulos, secciones y datos para explicar qué ofrece el negocio, dónde trabaja y cómo contactar, sin prometer posiciones que ningún proveedor puede garantizar.',
            'form_title' => 'Explícanos qué deberían encontrar', 'form_intro' => 'Cuéntanos tu actividad y zona de servicio. Revisaremos cómo presentar esa información con claridad.',
            'visual' => array('Tu negocio', 'Información ordenada', 'Títulos y secciones claras', 'Google interpreta la página', 'El cliente encuentra una respuesta útil'),
            'benefit_title' => 'Preparar una web no significa prometer el primer puesto', 'benefit' => 'El trabajo técnico y editorial facilita el rastreo y la comprensión. La posición final también depende del tiempo, la competencia, la autoridad del sitio, las búsquedas y las decisiones del propio buscador.',
            'problem_title' => 'Google necesita contexto, no palabras repetidas', 'problem' => 'Una página confusa tampoco ayuda al visitante. Relacionamos cada página con una intención concreta y respondemos de forma útil, natural y verificable.',
            'specifics' => array('HTML semántico, un H1 y jerarquía lógica de H2 y H3.', 'Nombre, actividad, ubicación y zonas de servicio claramente relacionados.', 'Titles, metadescripciones y URLs comprensibles cuando corresponde.', 'Enlaces internos útiles, rastreo e indexación revisables.', 'Datos estructurados solo cuando describen información real y apropiada.', 'Contenido, velocidad y experiencia móvil tratados como partes del mismo conjunto.'),
            'receives' => array('Una arquitectura fácil de recorrer.', 'Títulos y textos vinculados a búsquedas reales.', 'Metadatos básicos y enlaces internos coherentes.', 'Una base técnica rastreable, sin garantías artificiales.'),
            'needs' => array('Nombre comercial y descripción precisa de la actividad.', 'Dirección o zonas donde realmente prestas servicio.', 'Servicios prioritarios y preguntas habituales.', 'Confirmación de datos, condiciones y afirmaciones.'),
            'faq' => array_merge(array(array('¿Garantizáis aparecer primero en Google?', 'No. Preparamos una base clara y rastreable, pero nadie controla la competencia ni el algoritmo. No prometemos posiciones, tráfico ni plazos concretos.'), array('¿Qué significa indexar?', 'Significa que el buscador conoce una URL y puede incluirla en sus resultados. Indexar no equivale a ocupar una posición determinada.'), array('¿Siempre hacen falta datos estructurados?', 'No. Se añaden únicamente cuando existe un tipo apropiado y la información visible permite describirlo con exactitud.')), $common_faq),
        ),
        'movil' => array(
            'slug' => 'pagina-web-para-moviles', 'crumb' => 'Página web para móviles', 'eyebrow' => 'Cómoda en cada pantalla',
            'title' => 'Una página cómoda de usar desde el móvil', 'intro' => 'Diseñamos pensando en quien llega desde Google, redes, WhatsApp o un enlace compartido y necesita entender el negocio sin ampliar la pantalla ni buscar cómo contactar.',
            'form_title' => 'Hablemos de tus clientes móviles', 'form_intro' => 'Dinos cómo suelen encontrarte y qué acción quieres facilitar desde el teléfono.',
            'visual' => array('El cliente abre la web', 'Lee sin ampliar', 'Navega con facilidad', 'Encuentra el servicio', 'Pulsa WhatsApp, llama o escribe'),
            'benefit_title' => 'Adaptar no es encoger una página de escritorio', 'benefit' => 'En una pantalla pequeña importan el orden, el tamaño del texto, la separación entre controles y la rapidez. El contenido se reorganiza para que lo esencial siga siendo visible y cómodo.',
            'problem_title' => 'Cada obstáculo se nota más en el teléfono', 'problem' => 'Menús complicados, botones pequeños, imágenes desproporcionadas o formularios incómodos pueden interrumpir una visita que comenzó con interés.',
            'specifics' => array('Diseño responsive con prioridades mobile-first.', 'Texto legible, botones pulsables y navegación sencilla.', 'Imágenes proporcionadas y contenido estable mientras carga.', 'Formulario, teléfono y WhatsApp fáciles de utilizar.', 'Comportamiento adaptado a móvil, tableta y computadora.', 'Pruebas de anchura, teclado, foco y conexiones irregulares.'),
            'receives' => array('Diseño fluido sin desplazamiento horizontal.', 'Controles accesibles con una mano y foco visible.', 'Imágenes ajustadas al espacio disponible.', 'Pruebas básicas en tamaños de pantalla representativos.'),
            'needs' => array('Prioridad de contacto: WhatsApp, llamada o formulario.', 'Contenido y fotografías disponibles.', 'Dispositivos o situaciones frecuentes de tus clientes.', 'Revisión de teléfonos, enlaces y mensajes.'),
            'faq' => array_merge(array(array('¿La web también funcionará en computadora?', 'Sí. El diseño se adapta a teléfono, tableta y computadora; mobile-first indica el orden de las decisiones, no limita los demás dispositivos.'), array('¿Se prueba en todos los teléfonos existentes?', 'No es posible probar cada modelo. Se utilizan estándares web y tamaños representativos, y se corrigen incidencias reproducibles dentro del alcance.'), array('¿Qué ocurre con una conexión lenta?', 'Reducimos peso y dependencias, reservamos espacio para el contenido y evitamos que una imagen pesada bloquee innecesariamente la lectura.')), $common_faq),
        ),
        'whatsapp' => array(
            'slug' => 'pagina-web-con-whatsapp', 'crumb' => 'Página web con WhatsApp', 'eyebrow' => 'Un contacto visible y contextual',
            'title' => 'Del interés a la conversación por WhatsApp', 'intro' => 'Situamos WhatsApp, teléfono y formulario donde resultan útiles, después de dar al visitante la información necesaria para decidir si quiere conversar.',
            'form_title' => 'Diseñemos una ruta de contacto clara', 'form_intro' => 'Cuéntanos cómo atiendes ahora y qué consultas deseas recibir desde la web.',
            'visual' => array('Descubre el negocio', 'Comprueba lo que ofrece', 'Resuelve sus dudas', 'Pulsa WhatsApp', 'Comienza la conversación'),
            'benefit_title' => 'Mostrar un número no basta', 'benefit' => 'Una buena ruta de contacto explica primero el servicio, anticipa dudas y presenta la acción en un punto lógico. Así la persona sabe por qué escribe y qué información conviene enviar.',
            'problem_title' => 'Contacto visible sin invadir la pantalla', 'problem' => 'Los botones flotantes que cubren contenido o aparecen antes de ofrecer contexto pueden molestar. Priorizamos accesos reconocibles y alternativas para distintas preferencias.',
            'specifics' => array('Botones de WhatsApp junto a información relevante.', 'Mensaje inicial preparado cuando aporta contexto y el cliente lo aprueba.', 'Perfil de WhatsApp Business con datos comerciales coherentes.', 'Teléfono y formulario como alternativas de contacto.', 'Funcionamiento desde móvil y computadora.', 'Información previa para orientar la consulta y la respuesta.', 'Privacidad: el clic abre el canal, pero el usuario decide si envía el mensaje.'),
            'receives' => array('Enlaces de WhatsApp probados y fáciles de reconocer.', 'Llamadas a la acción situadas por contexto.', 'Alternativas mediante teléfono y formulario.', 'Coordinación inicial con WhatsApp Business.'),
            'needs' => array('Número comercial confirmado.', 'Horario y forma habitual de atención.', 'Tipo de consulta y datos que te ayudan a responder.', 'Autorización del texto inicial, si se utiliza.'),
            'faq' => array_merge(array(array('¿Cada visita se convertirá en cliente?', 'No. Facilitamos el paso hacia la conversación, pero el resultado depende de la necesidad, la oferta, la respuesta y la decisión de cada persona.'), array('¿El botón envía el mensaje automáticamente?', 'No. Abre WhatsApp con el número y, cuando se configura, un texto inicial. La persona revisa y decide si lo envía.'), array('¿Puedo ofrecer llamada y formulario también?', 'Sí. Mantener alternativas ayuda a quien no utiliza WhatsApp o prefiere explicar su consulta de otra forma.')), $common_faq),
        ),
        'rapida' => array(
            'slug' => 'pagina-web-rapida-y-segura', 'crumb' => 'Página web rápida y segura', 'eyebrow' => 'Rendimiento y cuidado técnico',
            'title' => 'Una página rápida, estable y protegida', 'intro' => 'Combinamos alojamiento adecuado, código ligero, imágenes optimizadas, caché, HTTPS y buenas prácticas para buscar una respuesta ágil sin prometer puntuaciones irreales.',
            'form_title' => 'Revisemos la base técnica', 'form_intro' => 'Cuéntanos si ya tienes dominio y alojamiento o si necesitas orientación para elegirlos.',
            'visual' => array('Buen alojamiento', 'Código e imágenes ligeros', 'Caché y CDN cuando conviene', 'HTTPS y buenas prácticas', 'Una página que responde mejor'),
            'benefit_title' => 'La velocidad mantiene la atención', 'benefit' => 'Una página lenta hace pesado incluso un buen contenido. LCP observa cuándo aparece la parte principal; INP, cómo responde al interactuar; y CLS, si los elementos saltan mientras cargan. Son señales útiles, no una nota comercial garantizada.',
            'problem_title' => 'El rendimiento depende de todo el sistema', 'problem' => 'Servidor, código, imágenes, caché, CDN y servicios externos se influyen entre sí. PageSpeed Insights ayuda a medir y detectar mejoras, pero el entorno, el dispositivo y los cambios posteriores afectan el resultado.',
            'specifics' => array('Código ligero e imágenes dimensionadas y optimizadas.', 'Caché y CDN cuando el alojamiento y el proyecto lo permiten.', 'Diseño prudente para conexiones móviles.', 'Certificado SSL/HTTPS y reducción de riesgos evitables.', 'Actualizaciones y copias como responsabilidades de mantenimiento.', 'Control de recursos externos que pueden ralentizar o fallar.', 'Medición razonable sin prometer 100/100.'),
            'receives' => array('Una página construida con una base ligera.', 'Revisión de carga, estabilidad e interacción.', 'Enlaces HTTPS y prácticas de seguridad básicas.', 'Orientación sobre alojamiento y mantenimiento.'),
            'needs' => array('Acceso acordado al alojamiento y dominio.', 'Información sobre servicios externos imprescindibles.', 'Material gráfico original para poder optimizarlo.', 'Una decisión sobre quién mantendrá copias y actualizaciones.'),
            'note_title' => 'Alojamiento a nombre del cliente', 'note' => 'CodePTY utiliza o recomienda el servicio Unlimited de Hostinger como una base adecuada para buscar buena capacidad de respuesta, pero Hostinger no determina por sí solo la velocidad. Puedes elegir cualquier proveedor; dominio y alojamiento permanecen a tu nombre. Si eliges otro, comprobamos los recursos disponibles. Sus características comerciales pueden cambiar y se verifican al contratar.',
            'faq' => array_merge(array(array('¿Garantizáis 100/100 en PageSpeed?', 'No. La herramienta varía según condiciones de prueba y servicios integrados. La utilizamos para detectar problemas y mejorar, no como una promesa absoluta.'), array('¿Tengo que contratar Hostinger?', 'No. Puedes elegir el proveedor que prefieras. Revisaremos si ofrece los recursos necesarios y tanto el dominio como el alojamiento deben quedar a tu nombre.'), array('¿Una web puede ser completamente segura?', 'Ningún sistema conectado puede prometer riesgo cero. Aplicamos una base cuidada y explicamos la importancia de actualizaciones, copias, accesos seguros y mantenimiento responsable.')), $common_faq),
        ),
        'coordinada' => array(
            'slug' => 'imagen-coordinada-web-redes', 'crumb' => 'Imagen coordinada entre web y redes', 'eyebrow' => 'Un negocio reconocible en cada canal',
            'title' => 'Una imagen reconocible en tu web y tus redes', 'intro' => 'Coordinamos nombre, datos, colores, fotografías y mensajes para que web, Facebook, Instagram, WhatsApp Business y otros canales parezcan parte del mismo negocio.',
            'form_title' => 'Cuéntanos qué canales utilizas', 'form_intro' => 'Comparte tus perfiles actuales y veremos cómo crear una presencia más coherente y reconocible.',
            'visual' => array('Tu negocio real', 'Colores, imágenes y mensajes', 'Web como referencia', 'Redes con funciones propias', 'WhatsApp y accesos conectados'),
            'benefit_title' => 'Coherentes no significa idénticos', 'benefit' => 'La web explica y organiza; Facebook muestra actividad y cercanía; Instagram construye confianza visual; WhatsApp facilita el contacto; y Linktree puede reunir accesos. Cada canal conserva su función y todos deben ser reconocibles.',
            'problem_title' => 'Los datos contradictorios generan dudas', 'problem' => 'Nombres distintos, teléfonos antiguos, horarios incompatibles o estilos sin relación hacen que el visitante se pregunte si ha llegado al negocio correcto.',
            'specifics' => array('Uso consistente del nombre comercial, logotipo y colores.', 'Fotografías y estilo visual compatibles entre canales.', 'Descripciones y mensajes adaptados a cada plataforma.', 'Teléfono, dirección y horarios coincidentes.', 'Web como referencia principal y perfiles conectados mediante enlaces.', 'Propuesta revisable antes de aplicar cambios.'),
            'receives' => array('Una base visual compartida sin forzar copias idénticas.', 'Datos comerciales revisados para cada canal incluido.', 'Mensajes adaptados a web, Facebook, Instagram y WhatsApp.', 'Enlaces claros entre web, perfiles y Linktree cuando corresponde.'),
            'needs' => array('Enlaces y accesos acordados a los perfiles actuales.', 'Logotipo, colores y fotografías disponibles.', 'Nombre, descripción, horarios y contactos correctos.', 'Aprobación de la propuesta antes de publicar.'),
            'faq' => array_merge(array(array('¿Todas las plataformas deben verse iguales?', 'No. Deben ser coherentes y reconocibles, pero cada una tiene tamaños, formatos y usos diferentes. Adaptamos la identidad sin borrar esas diferencias.'), array('¿Qué pasa si todavía no tengo identidad definida?', 'Partimos de señales reales: nombre, local, materiales, colores preferidos y tipo de cliente. Un desarrollo de marca o logotipo más amplio se define aparte si resulta necesario.'), array('¿La web sustituye a las redes?', 'No. La web funciona como referencia estable y las redes aportan actividad, cercanía y formatos propios. Se complementan.')), $common_faq),
        ),
    );
}

/**
 * codepty_current_service_landing - Localiza la configuración comercial de la URL actual.
 *
 * @return array<string,mixed>|null
 */
function codepty_current_service_landing() {
    foreach (codepty_service_landings() as $service) {
        if (is_page($service['slug'])) {
            return $service;
        }
    }

    return null;
}
