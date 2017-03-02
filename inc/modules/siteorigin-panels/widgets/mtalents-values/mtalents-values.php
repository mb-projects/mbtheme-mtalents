<?php

if ( !class_exists( 'SiteOrigin_Widget' ) )
	return;

class MBTheme_MTalents_Values_Widget extends SiteOrigin_Widget {

	function __construct() {
		parent::__construct( 'mtalents_values', 'MTalents Values', array( 'description' => '' ), array(), array(), plugin_dir_path( __FILE__ ) );
	}

	function get_template_name( $instance ) {
		return 'mtalents-values';
	}

	function get_style_name( $instance ) {
		return 'tpl';
	}

	function get_widget_form() {
		$fields = array(
			'values' => array(
				'type'		 => 'repeater',
				'label'		 => 'MTalents Values',
				'item_name'	 => 'Single value',
				'fields'	 => array(
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
					'desc'	 => array(
						'type'	 => 'textarea',
						'label'	 => 'Description',
					),
				)
			)
		);



		return $fields;
	}

}

siteorigin_widget_register( 'mtalents_values', __FILE__, 'MBTheme_MTalents_Values_Widget' );
