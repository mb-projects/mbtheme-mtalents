<?php

$GLOBALS[ 'mbdl_post_types' ] = array();
$GLOBALS[ 'mbdl_meta_box' ] = array();

$dir = dirname( __FILE__ );
include_once $dir . '/post-type.php';
include_once $dir . '/meta-box.php';

// include_once $dir . '/samples/post.php';

/* Flush rewrite rules for custom post types. */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );