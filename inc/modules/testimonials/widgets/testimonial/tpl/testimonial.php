<?php

// get post
if ( !isset( $instance[ 'testimonial' ] ) || $instance[ 'testimonial' ] === '' ) {
	return;
}

mbtheme_module_template( 'testimonials', 'panel', '', array( 'testimonial_id' => $instance[ 'testimonial' ] ) );