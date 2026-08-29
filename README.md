# Theme CodePTY

Theme WordPress propio de CodePTY.

## Versión

La versión pública se declara en la cabecera de `style.css`. Las versiones siguen el formato
`X.Y.Z` y se modifican manualmente.

## Actualizaciones desde GitHub

Desde la versión 0.2.0, el theme utiliza el mecanismo oficial de actualizaciones externas de
WordPress y consulta la última release pública estable de:

```text
https://github.com/dr7tbien/theme-codepty
```

WordPress compara la versión instalada con la etiqueta de la release mediante
`version_compare()`. Solo una versión superior genera un aviso en **Apariencia > Temas** y
**Escritorio > Actualizaciones**.

El actualizador exige:

- una etiqueta `vX.Y.Z` o `X.Y.Z`;
- una release que no sea draft ni prerelease;
- un asset llamado exactamente `codepty.zip`;
- una URL HTTPS perteneciente a las releases de `dr7tbien/theme-codepty` en GitHub.

Las respuestas válidas se guardan durante seis horas y los fallos durante treinta minutos.
Si GitHub falla, el theme continúa funcionando normalmente. La caché se limpia después de
actualizar y cuando WordPress fuerza una nueva comprobación.

La instalación existente en `codepty.com` todavía no contiene este actualizador. La versión
0.2.0 debe desplegarse manualmente una última vez desde hPanel. Las releases posteriores ya
podrán instalarse desde WordPress.

La versión 0.2.1 es la primera release destinada a comprobar el aviso y la instalación desde
el panel de WordPress sobre una instalación 0.2.0.

## Publicar una versión

1. Cambiar manualmente `Version:` en `style.css`.
2. Actualizar `README.md` y `CHANGELOG.md`.
3. Ejecutar las pruebas y comprobar la sintaxis.
4. Crear un commit y subirlo a `main`.
5. Crear el tag de la misma versión.
6. Generar `codepty.zip` desde el commit.
7. Crear una release pública estable y adjuntar el ZIP.
8. Comprobar la actualización desde WordPress.

Ejemplo para la versión 0.2.0:

```bash
cd "/home/torpedo/Local Sites/codepty/app/public/wp-content/themes/codepty"
php tests/run.php
find . -name '*.php' -not -path './.git/*' -print0 | xargs -0 -n1 php -l
git status --short
git add style.css functions.php inc/class-codepty-theme-updater.php README.md CHANGELOG.md .gitattributes tests/run.php scripts/build-release.sh
git commit -m "Preparar theme CodePTY 0.2.0"
git push origin main
git tag -a v0.2.0 -m "Theme CodePTY 0.2.0"
git push origin v0.2.0
./scripts/build-release.sh /tmp/codepty.zip
unzip -t /tmp/codepty.zip
gh release create v0.2.0 /tmp/codepty.zip --repo dr7tbien/theme-codepty --title "Theme CodePTY 0.2.0" --notes "Primera versión con actualizaciones desde WordPress."
gh release view v0.2.0 --repo dr7tbien/theme-codepty
```

El ZIP debe contener una sola carpeta raíz:

```text
codepty/
    style.css
    functions.php
    inc/
    assets/
    ...
```

El script construye el paquete desde `HEAD`: no publica, no modifica Git y no incorpora
cambios locales sin commit.

## Diagnóstico

Si no aparece una actualización:

- confirmar que la release es pública y estable;
- confirmar que su versión supera la de `style.css`;
- comprobar que contiene `codepty.zip`;
- pulsar **Escritorio > Actualizaciones > Comprobar de nuevo**;
- comprobar que el servidor accede por HTTPS a `api.github.com` y `github.com`.

<!-- TREE:START -->
├── assets
│   └── js
│       └── front-page.js
│           + closeMenu()
├── front-page.php
├── functions.php
│   + codepty_theme_setup()
│   │   # Activa las funciones estándar de documento del tema.
│   + codepty_enqueue_assets()
│   │   # Carga los assets principales del theme.
│   + codepty_add_favicons()
│   │   # Añade los iconos del sitio cuando WordPress todavía no tiene uno configurado.
│   + codepty_facebook_domain_verification()
│   │   # Imprime la verificación de dominio de Facebook.
│   + codepty_create_guides_page()
│   │   # Crea una sola vez la página inicial de guías del sitio.
│   + codepty_create_workflow_pages()
│   │   # Crea una sola vez la página privada de procedimiento y las guías públicas
│   + codepty_create_presence_web_gpt_page()
│   │   # Crea la nueva guía interna "Procedimiento Presencia Web GPT".
│   + codepty_user_is_team_member()
│   │   # Comprueba si el usuario actual pertenece al equipo interno de CodePTY
│   + codepty_guard_private_pages()
│   │   # Restringe el acceso a las páginas privadas de uso interno: si no hay
│   + codepty_guard_internal_page_rest_response()
│   │   # Impide que el contenido interno se entregue mediante la API REST.
│   + codepty_hide_internal_pages_from_search()
│   │   # Excluye las páginas internas de búsquedas públicas del sitio.
│   + codepty_hide_internal_pages_from_sitemap()
│   │   # Excluye las páginas internas del sitemap nativo de WordPress.
│   + codepty_create_service_pages()
│   │   # Crea las páginas de detalle enlazadas desde la portada.
│   + codepty_service_document_title()
│   │   # Define el título SEO de la página desarrollada.
│   + codepty_service_meta_tags()
│   │   # Imprime descripción y Open Graph básicos.
│   + codepty_mark_service_landings_ready()
│   │   # Retira el noindex heredado de las cinco páginas terminadas.
│   + codepty_service_robots()
│   │   # Evita indexar páginas de detalle todavía incompletas.
│   + codepty_hide_pending_pages_from_sitemap()
│   │   # Excluye del sitemap las páginas sin desarrollar.
│   + codepty_create_web_package_page()
│   │   # Crea la página principal con toda la información del paquete de página web.
│   + codepty_web_package_document_title()
│   │   # SEO básico de la página principal del paquete web.
│   + codepty_web_package_meta_tags()
│   │   # Descripción y Open Graph de la página del paquete web.
│   + codepty_web_package_language_attributes()
│   │   # Declara el idioma real de la página larga para lectores de pantalla y buscadores.
│   + codepty_more_trust_document_title()
│   │   # Define el título SEO de Más confianza.
│   + codepty_more_trust_meta_tags()
│   │   # Imprime la descripción y Open Graph de Más confianza.
│   + codepty_create_more_contacts_page()
│   │   # Crea la página Más contactos una sola vez.
│   + codepty_more_contacts_document_title()
│   │   # Define el título SEO de Más contactos.
│   + codepty_more_contacts_meta_tags()
│   │   # Imprime la descripción y Open Graph de Más contactos.
│   + codepty_create_more_speed_page()
│   │   # Crea la página Más velocidad una sola vez.
│   + codepty_create_access_guides()
│   │   # Crea las guías de servicios Google y acceso a WordPress.
│   + codepty_more_speed_document_title()
│   │   # Define el título SEO de Más velocidad.
│   + codepty_more_speed_meta_tags()
│   │   # Imprime la descripción y Open Graph de Más velocidad.
├── inc
│   ├── class-codepty-theme-updater.php
│   │   + CodePTY_Theme_Updater()
│   │   │   # Integra las releases públicas del theme con WordPress.
│   │   + register()
│   │   │   # Conecta la comprobación y limpieza de caché con WordPress.
│   │   + filter_update()
│   │   │   # Informa de una release estable superior para el theme CodePTY.
│   │   + clear_cache_after_upgrade()
│   │   │   # Invalida la release guardada tras actualizar CodePTY.
│   │   + clear_release_cache()
│   │   │   # Elimina la respuesta de GitHub almacenada temporalmente.
│   │   + get_release()
│   │   │   # Obtiene y almacena la última release pública válida.
│   │   + normalize_release()
│   │   │   # Valida una respuesta remota y conserva solo datos confiables.
│   │   + is_allowed_package_url()
│   │   │   # Limita el ZIP a una release de este repositorio.
│   │   + is_repository_url()
│   │   │   # Comprueba que la página informativa pertenece al repositorio.
│   │   + cache_failure()
│   │   │   # Recuerda temporalmente un fallo remoto sin afectar al theme.
│   └── service-landings.php
│       + codepty_service_landings()
│       │   # Devuelve el contenido editable de las páginas comerciales.
│       + codepty_current_service_landing()
│       │   # Localiza la configuración comercial de la URL actual.
├── index.php
├── page-acceso-wordpress-codepty.php
├── page-facebook.php
├── page-google-business.php
├── page-guias.php
├── page-imagen-coordinada-web-redes.php
├── page-instagram.php
├── page-mas-confianza.php
├── page-mas-contactos.php
├── page-mas-velocidad.php
├── page-pagina-preparada-para-google.php
├── page-pagina-web-con-whatsapp.php
├── page-pagina-web-para-moviles.php
├── page-pagina-web-para-tu-negocio-en-panama.php
├── page-pagina-web-rapida-y-segura.php
├── page-procedimiento-presencia-web-gpt.php
├── page-procedimiento-presencia-web.php
├── page-servicios-google.php
├── page-web-adaptada-a-tu-negocio.php
├── page-whatsapp-business.php
├── template-parts
│   ├── more-contacts-content.php
│   ├── more-speed-content.php
│   ├── more-trust-content.php
│   ├── service-coming-soon.php
│   ├── service-landing.php
│   ├── site-footer.php
│   └── site-header.php
└── tests
    └── run.php
        + WP_Error()
        + add_filter()
        + add_action()
        + get_site_transient()
        + set_site_transient()
        + delete_site_transient()
        + wp_remote_get()
        + is_wp_error()
        + wp_remote_retrieve_response_code()
        + wp_remote_retrieve_body()
        + esc_url_raw()
        + wp_parse_url()
        + expect_true()
        + release_data()
        + response_for()
        + reset_state()
<!-- TREE:END -->
