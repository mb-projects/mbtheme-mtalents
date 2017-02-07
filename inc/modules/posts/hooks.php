<?php
/**
 * actions and filters
 */
if ( !function_exists( 'mbtheme_get_posts' ) ) {

    /**
     * get post template
     */
    function mbtheme_get_posts( $template ) {
        // filter the module to get the template
        $module = apply_filters( 'mbtheme_get_posts_module', 'posts' );
        mbtheme_module_template( $module, $template );
    }

}

add_action( 'mbtheme_site_main', 'mbtheme_get_posts' );
