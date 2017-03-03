<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_MTalents_Panel_Simple_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'mtalents_panel_simple', 'MTalents Simple Panel', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'mtalents-panel-simple';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'title'	 => array(
				'type'	 => 'text',
				'label'	 => 'Title'
			),
			'icon'	 => array(
				'type'		 => 'media',
				'library'	 => 'image',
				'choose'	 => 'Choose icon',
				'update'	 => 'Set icon',
			),
			'color'	 => array(
				'type'	 => 'color',
				'label'	 => 'Color',
			),
			'desc'	 => array(
				'type'	 => 'textarea',
				'label'	 => 'Description',
			),
		);

		return $fields;
	}

}

siteorigin_widget_register( 'mtalents_panel_simple', __FILE__, 'MBTheme_MTalents_Panel_Simple_Widget' );
