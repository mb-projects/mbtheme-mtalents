<?php
/**
 * Template part for displaying results in search pages.
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry-post entry-search' ) ); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    </header><!-- .entry-header -->

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <footer class="entry-footer">

    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
