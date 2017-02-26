<?php

if ( !function_exists( 'mbtheme_footer_options' ) ) {

    /**
     * add redux sections
     */
    function mbtheme_footer_options( $opt_name ) {
        Redux::setSection( $opt_name, array(
            'title'  => 'Footer',
            'id'     => 'footer',
            'desc'   => '',
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'    => 'footer-bg',
                    'type'  => 'media',
                    'title' => 'Footer Background'
                )
            )
        ) );
    }

}

add_action( 'mbtheme_redux_options', 'mbtheme_footer_options' );