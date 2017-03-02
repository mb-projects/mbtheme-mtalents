<?php

/*
 * Author: MBDigiLab
 */

if ( !function_exists( 'mbtheme_wow_enqueue' ) ) {

	function mbtheme_wow_enqueue() {
		$url = MBTHEME_URI_MODULES . '/wow';

		wp_enqueue_style( 'mbtheme-wow-animate-style', $url . '/css/animate.css', array(), false );
		wp_enqueue_script( 'mbtheme-wow-script', $url . '/js/wow.min.js', array( 'jquery' ), false, true );
	}

}

add_action( 'mbtheme_enqueue_scripts_before_main', 'mbtheme_wow_enqueue' );

if ( !function_exists( 'mbtheme_wow_init' ) ) {

	function mbtheme_wow_init() {
		?>
		<script>
		    ( function ( $ ) {
		        $( function ( ) {
		            $( window ).load( function () {
		                new WOW().init( {
		                    //offset: -100
		                } );
		            } );
		        } );
		    }( jQuery ) );
		</script>
		<?php

	}

}
add_action( 'wp_footer', 'mbtheme_wow_init', 100 );

if ( !function_exists( 'mbtheme_wow_siteorigin_panels_widget_style_fields' ) ) {

	function mbtheme_wow_siteorigin_panels_widget_style_fields( $fields ) {
		$fields[ 'wow-animation' ] = array(
			'name'		 => 'Animation',
			'type'		 => 'select',
			'group'		 => 'attributes',
			'priority'	 => 5,
			'options'	 => mbtheme_wow_get_animation_list()
		);
		return $fields;
	}

}
add_filter( 'siteorigin_panels_widget_style_fields', 'mbtheme_wow_siteorigin_panels_widget_style_fields' );

if ( !function_exists( 'mbtheme_wow_siteorigin_panels_widget_classes' ) ) {

	function mbtheme_wow_siteorigin_panels_widget_classes( $classes, $widget, $instance, $widget_info ) {
		if ( isset( $widget_info[ 'style' ][ 'wow-animation' ] ) && $widget_info[ 'style' ][ 'wow-animation' ] !== '' ) {
			$classes[]	 = 'wow';
			$classes[]	 = $widget_info[ 'style' ][ 'wow-animation' ];
		}
		return $classes;
	}

}
add_filter( 'siteorigin_panels_widget_classes', 'mbtheme_wow_siteorigin_panels_widget_classes', 10, 4 );

