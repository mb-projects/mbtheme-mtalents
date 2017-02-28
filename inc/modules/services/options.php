<?php

if ( !function_exists( 'mbtheme_services_options' ) ) {

	/**
	 * add redux sections
	 */
	function mbtheme_services_options( $opt_name ) {
		Redux::setSection( $opt_name, array(
			'title'	 => 'Services',
			'id'	 => 'services',
			'desc'	 => '',
			'icon'	 => 'el el-bulb',
		) );
		
		for ( $i = 1; $i <= 4; $i++ ) {

			Redux::setSection( $opt_name, array(
				'title'		 => "Services {$i}",
				'id'		 => 'services-' . $i,
				'subsection' => true,
				'fields'	 => array(
					array(
						'id'		 => 'service-title-' . $i,
						'type'		 => 'text',
						'title'		 => 'Title',
						'validate'	 => 'no_html'
					),
					array(
						'id'		 => 'service-desc-' . $i,
						'type'		 => 'textarea',
						'title'		 => 'Description',
						'validate'	 => 'no_html',
					),
					array(
						'id'		 => 'service-url-' . $i,
						'type'		 => 'text',
						'title'		 => 'URL',
						'validate'	 => 'url',
					),
					array(
						'id'	 => 'service-icon-' . $i,
						'type'	 => 'media',
						'title'	 => 'Icon',
					),
					array(
						'id'		 => 'service-color-' . $i,
						'type'		 => 'color',
						'title'		 => 'Color',
						'default'	 => '#ffffff',
					),
				)
			) );
		}
	}

}

add_action( 'mbtheme_redux_options', 'mbtheme_services_options' );
