<?php

/* 
 * Author: MBDigiLab
 */

// enable captcha
add_filter( 'wpcf7_use_really_simple_captcha', '__return_true' );

if ( !function_exists( 'mbtheme_wpcf7_tgm_plugins' ) ) {

    function mbtheme_wpcf7_tgm_plugins( $plugins ) {
        $plugins[] = array(
            'name'     => 'Contact Form 7',
            'slug'     => 'contact-form-7',
            'required' => true
        );
        $plugins[] = array(
            'name'     => 'Really Simple CAPTCHA',
            'slug'     => 'really-simple-captcha',
            'required' => true
        );
        return $plugins;
    }

}

add_filter( 'mbtheme_tgm_plugins', 'mbtheme_wpcf7_tgm_plugins' );

//if ( !function_exists( 'mbtheme_wpcf7_recaptcha_scripts' ) ) {
//
//    /**
//     * change recaptcha language
//     */
//    function mbtheme_wpcf7_recaptcha_scripts() {
//        wp_deregister_script( 'google-recaptcha' );
//
//        $url = 'https://www.google.com/recaptcha/api.js';
//        $url = add_query_arg( array(
//            'onload' => 'recaptchaCallback',
//            'render' => 'explicit',
//            'hl'     => 'id' ), $url );
//
//        wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
//    }
//
//}
//
//add_action( 'wpcf7_enqueue_scripts', 'mbtheme_wpcf7_recaptcha_scripts', 11 );