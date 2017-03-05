<?php

/*
 * Author: MBDigiLab
 */
if ( !function_exists( 'mbtheme_siteorigin_tgm_plugins' ) ) {

	/**
	 * Register siteorigin to TGM
	 */
	function mbtheme_siteorigin_tgm_plugins( $plugins ) {
		$plugins[]	 = array(
			'name'		 => 'Page Builder by SiteOrigin',
			'slug'		 => 'siteorigin-panels',
			'required'	 => true,
		);
		$plugins[]	 = array(
			'name'		 => 'SiteOrigin Widgets Bundle',
			'slug'		 => 'so-widgets-bundle',
			'required'	 => false,
		);
		return $plugins;
	}

}

add_filter( 'mbtheme_tgm_plugins', 'mbtheme_siteorigin_tgm_plugins' );

if ( !function_exists( 'mbtheme_siteorigin_panels_widget_style_fields' ) ) {

	function mbtheme_siteorigin_panels_widget_style_fields( $fields ) {
		$fields[ 'bootstrap-grid' ] = array(
			'name'		 => 'Bootstrap Grid',
			'type'		 => 'text',
			'group'		 => 'attributes',
			'priority'	 => 4
		);
		return $fields;
	}

}
add_filter( 'siteorigin_panels_widget_style_fields', 'mbtheme_siteorigin_panels_widget_style_fields' );

if ( !function_exists( 'mbtheme_siteorigin_panels_widget_classes' ) ) {

	function mbtheme_siteorigin_panels_widget_classes( $classes, $widget, $instance, $widget_info ) {
		if ( isset( $widget_info[ 'style' ][ 'bootstrap-grid' ] ) ) {
			$classes[] = $widget_info[ 'style' ][ 'bootstrap-grid' ];
		}
		return $classes;
	}

}

add_filter( 'siteorigin_panels_widget_classes', 'mbtheme_siteorigin_panels_widget_classes', 10, 4 );

if ( !function_exists( 'mbtheme_clearfix_so_panels_widget_classes' ) ) {

    function mbtheme_clearfix_so_panels_widget_classes( $classes, $widget, $instance, $widget_info ) {
        if ( $widget !== 'MBTheme_Clearfix_Widget' ) {
            return $classes;
        }
        $classes = array( 'clearfix' );
        $classes[] = $instance[ 'clearfix_class' ];
        return $classes;
    }

}

add_filter( 'siteorigin_panels_widget_classes', 'mbtheme_clearfix_so_panels_widget_classes', 10, 4 );
