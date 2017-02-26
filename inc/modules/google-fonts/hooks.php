<?php

/**
 * google fonts module
 */
if ( !function_exists( 'mbtheme_google_fonts_load' ) ) {

    /**
     * load google font css
     */
    function mbtheme_google_fonts_load() {
        $url_base = 'https://fonts.googleapis.com/css';
        $family .= 'Open+Sans:300,300i,400,400i,600,600i,700,700i';
        $url = add_query_arg( 'family', $family, $url_base );
        
        // enqueue style
        wp_enqueue_style( 'mbtheme-google-font', $url );
        
    }

}

add_action( 'mbtheme_enqueue_scripts_before_main', 'mbtheme_google_fonts_load' );