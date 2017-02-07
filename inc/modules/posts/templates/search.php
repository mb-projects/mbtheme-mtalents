<?php
/**
 * Template part for displaying search results
 */
// show posts
if ( have_posts() ) :
    ?>
    <header class="page-header search-header">
        <h1 class="page-title search-title"><?php printf( esc_html__( 'Search Results for: %s', 'mbtheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header><!-- .page-header -->

    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post();

        // Include the Post-Format-specific template for the content.
        mbtheme_module_template( 'posts', 'contents/content-search', get_post_format() );

    endwhile;

    // displays post navigation
    mbtheme_posts_navigation();

else :

    // no post
    mbtheme_module_template( 'posts', 'contents/content', 'none' );

endif;
