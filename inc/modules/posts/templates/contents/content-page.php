<?php
/**
 * Template part for displaying post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry-post entry-page entry-singular' ) ); ?>>
    
    <div class="entry-content">
        <?php
        // content
        mbtheme_module_template( 'posts', 'parts/entry-content' );

        // link pages
        mbtheme_link_pages();
        ?>
    </div> <!-- .entry-content -->

</article><!-- #post-## -->