<?php

if ( !function_exists( 'mbtheme_redux_get_option' ) ) {

    /**
     * get option from redux
     */
    function mbtheme_redux_get_option( $name, $default = false, $empty = '' ) {
        global $mbtheme_opt;
        $options = $mbtheme_opt;
        if ( isset( $options[ $name ] ) ) {
            if ( $options[ $name ] == "" ) {
                return $empty;
            }
            return $options[ $name ];
        }
        return $default;
    }

}