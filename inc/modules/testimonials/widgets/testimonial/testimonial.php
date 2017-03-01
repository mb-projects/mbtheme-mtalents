<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_Testimonial_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'testimonial', 'Testimonial', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'testimonial';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {

		// get all testimonial options
		global $mbdl_post_types;

		$title = array();
		if ( isset( $mbdl_post_types[ 'testimonial' ] ) ) {
			$title = (array) $mbdl_post_types[ 'testimonial' ]->getTitles();
		}

		$fields = array(
			'testimonial' => array(
				'type'		 => 'select',
				'label'		 => 'Testimonial',
				'options'	 => $title,
			),
		);

		return $fields;
	}

}

siteorigin_widget_register( 'testimonial', __FILE__, 'MBTheme_Testimonial_Widget' );
