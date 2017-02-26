<?php

if ( !function_exists( 'mbtheme_footer_default' ) ) {

	/**
	 * display footer
	 */
	function mbtheme_footer_default() {
		mbtheme_module_template( 'footer', 'default' );
	}

}
add_action( 'mbtheme_site_footer', 'mbtheme_footer_default' );

if ( !function_exists( 'mbtheme_footer_widgets_init' ) ) {

	function mbtheme_footer_widgets_init() {
		register_sidebars( 3, array(
			'name'			 => 'Footer Top %d',
			'id'			 => 'footer-top',
			'before_widget'	 => '<div id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'	 => '</div>',
			'before_title'	 => '<h3 class="widgettitle footer-widget-title">',
			'after_title'	 => '</h3>',
		) );

		register_sidebar( array(
			'name'			 => 'Footer Bottom',
			'id'			 => 'footer-bottom',
			'before_widget'	 => '<div id="%1$s" class="widget footer-bottom-widget %2$s">',
			'after_widget'	 => '</div>',
			'before_title'	 => '<h4 class="widgettitle footer-bottom-widget-title">',
			'after_title'	 => '</h4>',			
		) );
	}

}
add_action( 'widgets_init', 'mbtheme_footer_widgets_init' );
