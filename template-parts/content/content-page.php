<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( ! is_front_page() ) : ?>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php if ( function_exists('yoast_breadcrumb') ) { ?>
        <?php  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); ?>
        <?php } ?>
    </header>
    <?php endif; ?>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer class="entry-footer"></footer>
</article>