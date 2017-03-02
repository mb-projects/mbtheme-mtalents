<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_MTalents_Editor_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'mtalents-editor', 'MTalents Editor', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'mtalents-editor';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'title'		 => array(
				'type'	 => 'text',
				'label'	 => 'Title',
			),
			'content'	 => array(
				'type'	 => 'tinymce',
				'label'	 => 'Content',
			),
		);

		return $fields;
	}

}

siteorigin_widget_register( 'mtalents-editor', __FILE__, 'MBTheme_MTalents_Editor_Widget' );
