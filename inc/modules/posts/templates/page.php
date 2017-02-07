<?php

/**
 * Template part for displaying page
 */
// Start the loop.
while ( have_posts() ) : the_post();

    mbtheme_module_template( 'posts', 'contents/content-page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }

// End of the loop.
endwhile;

