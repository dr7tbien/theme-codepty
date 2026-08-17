<?php
/**
 * Shared site footer.
 */
?>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="CodePTY — Ir a la página de inicio">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-codepty.png'); ?>"
                    width="785"
                    height="222"
                    alt="CodePTY"
                >
            </a>
            <p>Páginas web claras, rápidas y profesionales para negocios en Panamá.</p>
        </div>

        <div class="footer-column">
            <h2>Explorar</h2>
            <a href="<?php echo esc_url(home_url('/#servicios')); ?>">Qué hacemos</a>
            <a href="<?php echo esc_url(home_url('/guias/')); ?>">Guías</a>
            <a href="<?php echo esc_url(home_url('/#contacto')); ?>">Contacto</a>
        </div>

        <div class="footer-column">
            <h2>Contacto</h2>
            <a href="tel:+50766726470">+507 6672 6470</a>
            <a href="https://wa.me/50766726470">WhatsApp</a>
        </div>
    </div>

    <div class="container footer-bottom">
        <p>&copy; <?php echo esc_html(wp_date('Y')); ?> CodePTY. Todos los derechos reservados.</p>
        <p>Hecho en Panamá.</p>
    </div>
</footer>
