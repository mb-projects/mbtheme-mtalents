<?php

if ( !function_exists( 'mbtheme_update_transient_update_themes' ) ) {

    /**
     * Filter the value of site transient to update this theme.
     * 
     * @see set_site_transient()
     * 
     * @param string $transient  Transient name
     */
    function mbtheme_update_transient_update_themes( $transient ) {
        // json url to update the theme
        $url = '';

        $my_theme = wp_get_theme();
        $theme_name = $my_theme->get( 'Name' );
        $theme_version = $my_theme->get( 'Version' );

        if ( !$url ) {
            return $transient;
        }

        if ( empty( $transient->checked[ $theme_name ] ) ) {
            return $transient;
        }

        $request = wp_remote_request( $url );
        if ( is_wp_error( $request ) || wp_remote_retrieve_response_code( $request ) !== 200 ) {
            return $transient;
        }
        $args = json_decode( $request[ 'body' ], true );

        if ( empty( $args ) ) {
            return $transient;
        }
        if ( version_compare( $theme_version, $args[ 'new_version' ], '<' ) ) {
            $args[ 'theme' ] = $theme_name;
            $transient->response[ $theme_name ] = $args;
        }

        return $transient;
    }

}

add_filter( 'pre_set_site_transient_update_themes', 'mbtheme_update_transient_update_themes' );
