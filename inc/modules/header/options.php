<?php

if ( !function_exists( 'mbtheme_header_options' ) ) {

    /**
     * add redux sections
     */
    function mbtheme_header_options( $opt_name ) {
        Redux::setSection( $opt_name, array(
            'title' => 'Header',
            'id' => 'header',
            'desc' => '',
            'icon' => 'el el-home',
            'fields' => array(
                array(
                    'id' => 'header-bg-default',
                    'type' => 'media',
                    'title' => 'Default Background',
                ),
                array(
                    'id' => 'header-bg-blog',
                    'type' => 'media',
                    'title' => 'Blog Header Background',
                ),
                array(
                    'id' => 'header-front-slide-content',
                    'type' => 'textarea',
                    'title' => 'Front Header Slide Content',
                    'description' => 'Separated by new line',
                    'validate' => 'html',
                ),
                array(
                    'id' => 'header-front-content',
                    'type' => 'textarea',
                    'title' => 'Front Header Content',
                    'validate' => 'html',
                ),
                array(
                    'id' => 'header-front-slide-interval',
                    'type' => 'text',
                    'title' => 'Slide Interval',
                    'description' => 'millisecond',
                    'default' => '7000',
                ),
                array(
                    'id' => 'header-front-slide-pause',
                    'type' => 'switch',
                    'title' => 'Pause on hover',
                    'default' => '0',
                ),
            )
        ) );
    }

}

add_action( 'mbtheme_redux_options', 'mbtheme_header_options' );
