<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_Sample_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'sample', 'Sample', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'sample';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'title' => array(
				'type'	 => 'text',
				'label'	 => 'Title'
			),
		);

		return $fields;
	}

}

siteorigin_widget_register( 'sample', __FILE__, 'MBTheme_Sample_Widget' );
