<?php
/** Reusable global navigation trail. Rendered only by the shared header. */
if (!defined('ABSPATH')) { exit; }
$items = codepty_breadcrumb_items();
?>
<nav class="codepty-breadcrumbs" aria-label="Ruta de navegación">
    <ol class="container codepty-breadcrumbs-list">
        <?php foreach ($items as $index => $item) : ?>
        <li>
            <?php if ($index > 0) : ?><span class="codepty-breadcrumbs-separator" aria-hidden="true">→</span><?php endif; ?>
            <?php if ($index === count($items) - 1) : ?>
                <span aria-current="page"><?php echo esc_html($item['label']); ?></span>
            <?php else : ?>
                <a data-panels-pty-ignore href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
    </ol>
</nav>
