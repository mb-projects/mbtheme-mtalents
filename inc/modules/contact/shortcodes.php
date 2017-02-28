<?php

if ( !function_exists( 'mbtheme_contact_panel_sc' ) ) {

	function mbtheme_contact_panel_sc( $atts, $content ) {
		$a = shortcode_atts( array(
			'icon' => 'phone'
		), $atts );

		ob_start();

		mbtheme_module_template( 'contact', 'panel', '', array(
			'icon'		 => $a[ 'icon' ],
			'content'	 => $content,
		) );

		return ob_get_clean();
	}

}
add_shortcode( 'mbtheme_contact_panel', 'mbtheme_contact_panel_sc' );
