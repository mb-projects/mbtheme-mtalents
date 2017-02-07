<?php

/**
 * Template part for displaying post archive
 */
// show posts
if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) : the_post();

        // Include the Post-Format-specific template for the content.
        if ( is_singular() ) {
            mbtheme_module_template( 'posts', 'contents/content-single', get_post_format() );
        }else{
            mbtheme_module_template( 'posts', 'contents/content-archive', get_post_format() );
        }

    endwhile;

    // displays post navigation
    mbtheme_posts_navigation();

else :

    // no post
    mbtheme_module_template( 'posts', 'contents/content', 'none' );

endif;
