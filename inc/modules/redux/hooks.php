<?php

if ( !function_exists( 'mbtheme_redux_init' ) ) {

    function mbtheme_redux_init() {
        $dir = dirname( __FILE__ );
        require_once $dir . '/options-init.php';
    }

}

add_action( 'after_setup_theme', 'mbtheme_redux_init' );

if ( !function_exists( 'mbtheme_redux_css_editor' ) ) {

    function mbtheme_redux_css_editor() {
        $css = mbtheme_get_option( 'mbtheme-editor-css', '' );
        echo '<style>' . $css . '</style>';
    }

}

add_action( 'wp_head', 'mbtheme_redux_css_editor' );

if ( !function_exists( 'mbtheme_redux_tgm_plugins' ) ) {

    function mbtheme_redux_tgm_plugins( $plugins ) {
        $plugins[] = array(
            'name'     => 'Redux Framework',
            'slug'     => 'redux-framework',
            'required' => true,
        );
        return $plugins;
    }

}

add_filter( 'mbtheme_tgm_plugins', 'mbtheme_redux_tgm_plugins' );
