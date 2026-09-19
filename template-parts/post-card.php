<?php
/** One archive card, including an accessible draft preview for administrators. */
$url = get_post_status() === 'draft' ? get_preview_post_link() : get_permalink();
?>
<article <?php post_class('post-card'); ?> data-post-id="<?php the_ID(); ?>">
    <?php if (has_post_thumbnail()) : ?>
    <a class="post-card-image" href="<?php echo esc_url($url); ?>" tabindex="-1" aria-hidden="true">
        <?php the_post_thumbnail('large', array('loading' => 'lazy')); ?>
    </a>
    <?php endif; ?>
    <div class="post-card-copy">
        <p class="post-category"><?php echo esc_html(implode(' · ', wp_get_post_categories(get_the_ID(), array('fields' => 'names')))); ?></p>
        <?php if (get_post_status() === 'draft') : ?><span class="post-draft">Borrador · Solo administradores</span><?php endif; ?>
        <h2><a href="<?php echo esc_url($url); ?>"><?php the_title(); ?></a></h2>
        <p><?php echo esc_html(get_the_excerpt()); ?></p>
        <a class="post-read-more" href="<?php echo esc_url($url); ?>">Leer artículo <span aria-hidden="true">→</span><span class="screen-reader-text">: <?php the_title(); ?></span></a>
    </div>
</article>
