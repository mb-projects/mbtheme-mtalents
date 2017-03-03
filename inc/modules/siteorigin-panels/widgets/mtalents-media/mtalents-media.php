<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_MTalents_Media_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'mtalents_media', 'MTalents Media', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'mtalents-media';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'image'		 => array(
				'type'	 => 'media',
				'label'	 => 'Image',
			),
			'image_pos'	 => array(
				'type'		 => 'select',
				'label'		 => 'Image Position',
				'options'	 => array(
					'left'	 => 'Left',
					'right'	 => 'Right',
				),
			),
			'content'	 => array(
				'type'	 => 'tinymce',
				'label'	 => 'Content',
			),
		);
		return $fields;
	}

}

siteorigin_widget_register( 'mtalents_media', __FILE__, 'MBTheme_MTalents_Media_Widget' );
