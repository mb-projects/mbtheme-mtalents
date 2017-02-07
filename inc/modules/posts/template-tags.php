<?php

/**
 * Template Functions
 * 
 */
if ( !function_exists( 'mbtheme_posts_navigation' ) ) {

    /** 
     * Prints HTML with posts navigation (post pagination) 
     */
    function mbtheme_posts_navigation() {
        the_posts_navigation();
    }

}

if ( !function_exists( 'mbtheme_posts_navigation_numbers' ) ) {

    /** 
     * Prints HTML with posts navigation (post pagination) 
     */
    function mbtheme_posts_navigation_numbers() {
        echo '<div class="number-pagination">';
        // displays number navigation
        the_posts_pagination( array(
            'mid_size'  => 4,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
        ) );
        echo '</div>';
    }

}

if ( !function_exists( 'mbtheme_link_pages' ) ) {

    /** 
     * Prints HTML with link pages 
     */
    function mbtheme_link_pages() {
        wp_link_pages( array(
            'before' => '<p class="link-pages">' . __( 'Pages:', 'mbtheme' ),
            'after'  => '</p>', )
        );
    }

}

if ( !function_exists( 'mbtheme_post_navigation' ) ) {

    /** 
     * Prints HTML with post navigation (for single post) 
     */
    function mbtheme_post_navigation() {
        if ( is_singular( 'attachment' ) ) {
            echo 'Published in :';
            the_post_navigation();
        }elseif ( is_singular( 'post' ) ) {
            the_post_navigation();
        }
    }

}


