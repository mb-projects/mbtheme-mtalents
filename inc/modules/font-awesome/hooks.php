<?php

if ( !function_exists( 'mbtheme_font_awesome_enqueue' ) ) {

    /**
     * enqueue font-awesome style and script before main style and script of theme
     */
    function mbtheme_font_awesome_enqueue() {
        $url = MBTHEME_URI_MODULES . '/font-awesome';

        // font-awesome style
        wp_enqueue_style( 'mbtheme-font-awesome-style', $url . '/css/font-awesome.min.css', array(), false );
    }

}

add_action( 'mbtheme_enqueue_scripts_before_main', 'mbtheme_font_awesome_enqueue' );