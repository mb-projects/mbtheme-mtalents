<?php

if ( !function_exists( 'mbtheme_social_links_options' ) ) {

    /**
     * add redux sections
     */
    function mbtheme_social_links_options( $opt_name ) {
        Redux::setSection( $opt_name, array(
            'title'  => 'Social Links',
            'id'     => 'social-links',
            'desc'   => '',
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'    => 'sl-fb',
                    'type'  => 'text',
                    'title' => 'Facebook',
                    'validate' => 'url'
                ),
                array(
                    'id'    => 'sl-tw',
                    'type'  => 'text',
                    'title' => 'Twitter',
                    'validate' => 'url'
                ),
                array(
                    'id'    => 'sl-in',
                    'type'  => 'text',
                    'title' => 'LinkedIn',
                    'validate' => 'url'
                ),
            )
        ) );
    }

}

add_action( 'mbtheme_redux_options', 'mbtheme_social_links_options' );