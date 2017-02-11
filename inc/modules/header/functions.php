<?php

/**
 * functions for header
 */
if ( !function_exists( 'mbtheme_the_custom_logo' ) ) {

    /**
     * get custom logo
     */
    function mbtheme_the_custom_logo() {
        if ( function_exists( 'the_custom_logo' ) ) {
            echo '<div class="site-logo">';
            the_custom_logo();
            echo '</div>';
        }
    }

}

if ( !function_exists( 'mbtheme_header_brand' ) ) {

    /**
     * displays site brand
     */
    function mbtheme_header_brand( $class = 'site-brand' ) {
        mbtheme_module_template( 'header', 'brand', '', array( 'site_brand_class' => $class ) );
    }

}