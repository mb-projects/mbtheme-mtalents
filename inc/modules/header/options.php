<?php

if ( !function_exists( 'mbtheme_header_options' ) ) {

    /**
     * add redux sections
     */
    function mbtheme_header_options( $opt_name ) {
        Redux::setSection( $opt_name, array(
            'title'  => 'Header',
            'id'     => 'header',
            'desc'   => '',
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'    => 'header-bg-default',
                    'type'  => 'media',
                    'title' => 'Default Background',
                ),
                array(
                    'id'    => 'header-bg-blog',
                    'type'  => 'media',
                    'title' => 'Blog Header Background',
                ),
                array(
                    'id'    => 'header-front-content',
                    'type'  => 'editor',
                    'title' => 'Front Header Content',
                    'args'  => array(
                        'teeny' => false,
                    )
                ),
            )
        ) );
    }

}

add_action( 'mbtheme_redux_options', 'mbtheme_header_options' );
