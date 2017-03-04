<?php

/*
 * register testimonials post type
 */
$testimonial_labels = array(
	'name'					 => _x( 'Testimonials', 'post type general name', 'mbtheme' ),
	'singular_name'			 => _x( 'Testimonial', 'post type singular name', 'mbtheme' ),
	'menu_name'				 => _x( 'Testimonials', 'admin menu', 'mbtheme' ),
	'add_new'				 => __( 'Add New', 'mbtheme' ),
	'add_new_item'			 => __( 'Add New Testimonial', 'mbtheme' ),
	'new_item'				 => __( 'New Testimonial', 'mbtheme' ),
	'edit_item'				 => __( 'Edit Testimonial', 'mbtheme' ),
	'view_item'				 => __( 'View Testimonial', 'mbtheme' ),
	'all_items'				 => __( 'All Testimonials', 'mbtheme' ),
	'search_items'			 => __( 'Search Testimonials', 'mbtheme' ),
	'parent_item_colon'		 => __( 'Parent Testimonials:', 'mbtheme' ),
	'not_found'				 => __( 'No testimonials found.', 'mbtheme' ),
	'not_found_in_trash'	 => __( 'No testimonials found in Trash.', 'mbtheme' ),
	'featured_image'		 => __( 'Photo', 'mbtheme' ),
	'set_featured_image'	 => __( 'Set Photo', 'mbtheme' ),
	'remove_featured_image'	 => __( 'Remove Photo', 'mbtheme' ),
	'use_featured_image'	 => __( 'Use Photo', 'mbtheme' ),
);

// set post args
$testimonial_args = array(
	'labels'	 => $testimonial_labels,
	'public'	 => false,
	'show_ui'	 => true,
	'menu_icon'	 => 'dashicons-admin-post',
	'supports'	 => array( 'title', 'thumbnail' ),
	'taxonomies' => array(),
);

$testimonial = new MBDL_Post_Type( 'testimonial', $testimonial_args );

/*
 * 	Register Meta Box for testimonials 
 */

$testimonial_mb_options = array(
	'title'	 => 'Detail',
	'screen' => 'testimonial'
);

$testimonial_mb_fields = array(
	array(
		'id'	 => 'company',
		'type'	 => 'text',
		'title'	 => 'Company',
	),
	array(
		'id'	 => 'description',
		'type'	 => 'textarea',
		'title'	 => 'Description',
	),
	array(
		'id'	 => 'testimonial-bg',
		'type'	 => 'color',
		'title'	 => 'Background Color',
	),
);

$testimonial_meta_box = new MBDL_Meta_Box( 'testimonial', $testimonial_mb_options, $testimonial_mb_fields );


$post_testimonial_meta_box = new MBDL_Meta_Box( 'post_testimonial', array(
	'title'	 => 'Testimonials',
	'screen' => 'post'
), array(
	array(
		'id'	 => 'testimonials_id',
		'type'	 => 'text',
		'title'	 => 'Testimonials ID',
	)
) );
