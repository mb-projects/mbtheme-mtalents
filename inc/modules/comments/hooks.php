<?php

/**
 * Functions for sidebar module
 */
if ( !function_exists( 'mbtheme_comments_template' ) ) {

    /**
     * get comments template
     */
    function mbtheme_comments_template() {
        mbtheme_module_template( 'comments', 'comments' );
    }

}

//add_action( 'mbtheme_site_comments', 'mbtheme_comments_template' );
