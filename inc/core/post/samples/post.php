<?php

/**
 * Sample Custom Post
 */
$sample_labels = array(
	'name'				 => _x( 'Samples', 'post type general name', 'mbtheme' ),
	'singular_name'		 => _x( 'Sample', 'post type singular name', 'mbtheme' ),
	'menu_name'			 => _x( 'Samples', 'admin menu', 'mbtheme' ),
	'add_new'			 => __( 'Add New', 'mbtheme' ),
	'add_new_item'		 => __( 'Add New Sample', 'mbtheme' ),
	'new_item'			 => __( 'New Sample', 'mbtheme' ),
	'edit_item'			 => __( 'Edit Sample', 'mbtheme' ),
	'view_item'			 => __( 'View Sample', 'mbtheme' ),
	'all_items'			 => __( 'All Samples', 'mbtheme' ),
	'search_items'		 => __( 'Search Samples', 'mbtheme' ),
	'parent_item_colon'	 => __( 'Parent Samples:', 'mbtheme' ),
	'not_found'			 => __( 'No samples found.', 'mbtheme' ),
	'not_found_in_trash' => __( 'No samples found in Trash.', 'mbtheme' ),
);

// set post args
$sample_args = array(
	'labels'	 => $sample_labels,
	'public'	 => false,
	'show_ui'	 => true,
	'menu_icon'	 => 'dashicons-admin-post',
	'supports'	 => array( 'title', 'editor', 'thumbnail' ),
	'taxonomies' => array(),
);

$sample = new MBDL_Post_Type( 'mb_sample', $sample_args );
