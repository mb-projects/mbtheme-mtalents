<?php

if ( !function_exists( 'mbtheme_services_display' ) ) {

	function mbtheme_services_display() {
		ob_start();
		mbtheme_module_template( 'services', 'services' );
		return ob_get_clean();
	}

}
add_shortcode( 'mbtheme_services', 'mbtheme_services_display' );
