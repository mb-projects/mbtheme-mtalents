<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_MTalents_Panel_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'mtalents_panel', 'MTalents Panel', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'mtalents-panel';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'title'		 => array(
				'type'	 => 'text',
				'label'	 => 'Title'
			),
			'image'		 => array(
				'type'		 => 'media',
				'library'	 => 'image',
			),
			'color'		 => array(
				'type'	 => 'color',
				'label'	 => 'Background Color',
			),
			'flip'		 => array(
				'type'		 => 'checkbox',
				'label'		 => 'Flip',
				'default'	 => 'false',
			),
			'content'	 => array(
				'type'	 => 'tinymce',
				'label'	 => 'Content',
			),
		);

		return $fields;
	}

}

siteorigin_widget_register( 'mtalents_panel', __FILE__, 'MBTheme_MTalents_Panel_Widget' );
