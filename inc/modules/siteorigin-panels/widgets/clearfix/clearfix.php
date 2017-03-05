<?php

/*
  Widget Name: Clearfix
 */
if ( !class_exists( 'SiteOrigin_Widget' ) ) return;
class MBTheme_Clearfix_Widget extends SiteOrigin_Widget {

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
        //Call the parent constructor with the required arguments.
        parent::__construct( 'clearfix', 'Clearfix', array( 'description' => '' ), array(), array(
            'clearfix_class' => array(
                'type'  => 'text',
                'label' => 'Hidden and Visible classes'
            ),
                ), plugin_dir_path( __FILE__ )
        );
    }

    function get_template_name( $instance ) {
        return 'clearfix';
    }

    function get_style_name( $instance ) {
        return 'tpl';
    }

}

siteorigin_widget_register( 'clearfix', __FILE__, 'MBTheme_Clearfix_Widget' );
