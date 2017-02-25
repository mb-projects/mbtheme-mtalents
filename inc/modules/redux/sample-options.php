<?php

if ( !function_exists( 'mbtheme_redux_sample_options' ) ) {

    /**
     * add redux sections
     */
    function mbtheme_redux_sample_options( $opt_name ) {
        Redux::setSection( $opt_name, array(
            'title'  => 'Section Title',
            'id'     => 'section_id',
            'desc'   => '',
            'icon'   => 'el el-home',
            'fields' => array(
                array(
                    'id'    => 'field_id',
                    'type'  => 'text',
                    'title' => 'Field Title',
                    'validate' => 'no_html'
                )
            )
        ) );
    }

}

//add_action( 'mbtheme_redux_options', 'mbtheme_redux_sample_options' );