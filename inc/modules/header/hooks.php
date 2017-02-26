<?php

if ( !function_exists( 'mbtheme_get_header' ) ) {

    /**
     * display the site header
     */
    function mbtheme_get_header() {
        mbtheme_module_template( 'header', 'default' );
    }

}
add_action( 'mbtheme_site_header', 'mbtheme_get_header', 10 );

if ( !function_exists( 'mbtheme_get_header_inner' ) ) {

    /**
     * display the site header inner
     */
    function mbtheme_get_header_inner() {
        mbtheme_module_template( 'header', 'header' );
    }

}
add_action( 'mbtheme_site_header_inner', 'mbtheme_get_header_inner', 10 );

if ( !function_exists( 'mbtheme_custom_logo_setup' ) ) {

    /**
     * theme support for custom logo
     */
    function mbtheme_custom_logo_setup() {
        /**
         * filter custom logo args
         */
        $args = apply_filters( 'mbtheme_custom_logo_args', array(
            'height'      => 100,
            'width'       => 155,
            'flex-height' => true,
            'flex-width'  => true
                ) );
        add_theme_support( 'custom-logo', $args );
    }

}
add_action( 'after_setup_theme', 'mbtheme_custom_logo_setup' );
