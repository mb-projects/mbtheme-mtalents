<?php
/**
 * Template part for displaying post archive
 */
// show posts
if ( have_posts() ) :
    ?>
    <header class="page-header archive-header">
        <?php
        the_archive_title( '<h1 class="page-title archive-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

        // Include the Post-Format-specific template for the content.
        mbtheme_module_template( 'posts', 'contents/content-archive', get_post_format() );

    endwhile;

    // displays post navigation
    mbtheme_posts_navigation();

else :

    // no post
    mbtheme_module_template( 'posts', 'contents/content', 'none' );

endif;
