<?php

if ( !function_exists( 'mbtheme_social_links_footer_sc' ) ) {

    function mbtheme_social_links_footer_sc() {
        ob_start();
        mbtheme_module_template( 'social-links', 'footer' );
        return ob_get_clean();
    }

}
add_shortcode( 'mbtheme_social_links_footer', 'mbtheme_social_links_footer_sc' );

if ( !function_exists( 'mbtheme_social_links_sc' ) ) {
    function mbtheme_social_links_sc() {
        ob_start();
        mbtheme_module_template( 'social-links', 'default' );
        return ob_get_clean();	
    }
}
add_shortcode( 'mbtheme_social_links', 'mbtheme_social_links_sc' );