<?php

/**
 * Template part for displaying single post
 */
// Start the loop.
while ( have_posts() ) : the_post();

    // Include the single post content template.
    mbtheme_module_template( 'posts', 'contents/content-single', get_post_format() );

    // displays post navigation
    mbtheme_post_navigation();

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }

// End of the loop.
endwhile;
