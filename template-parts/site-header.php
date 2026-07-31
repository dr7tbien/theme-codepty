<?php
/**
 * Shared site header navigation.
 */
?>
<header class="site-header">
    <div class="container header-inner">
        <a
            class="site-logo"
            href="<?php echo esc_url(home_url('/')); ?>"
            aria-label="CodePTY — Ir a la página de inicio"
        >
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-codepty.png'); ?>"
                width="785"
                height="222"
                alt="CodePTY"
            >
        </a>

        <nav class="site-navigation" aria-label="Navegación principal">
            <a href="<?php echo esc_url(home_url('/guias/')); ?>">Guías</a>
        </nav>
    </div>
</header>
