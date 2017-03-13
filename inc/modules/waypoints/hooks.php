<?php

if ( !function_exists( 'mbtheme_waypoints_enqueue' ) ) {

    function mbtheme_waypoints_enqueue() {
        $url = MBTHEME_URI_MODULES . '/waypoints';

        wp_enqueue_script( 'mbtheme-waypoints-script', $url . '/js/jquery.waypoints.min.js', array( 'jquery' ), false, true );
    }

}

add_action( 'mbtheme_enqueue_scripts_before_main', 'mbtheme_waypoints_enqueue' );

