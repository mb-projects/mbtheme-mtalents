<?php

if ( !function_exists( 'mbtheme_header_nav' ) ) {

    /**
     * Resister Primary Menu
     */
    function mbtheme_header_nav() {
	register_nav_menus( array(
	    'primary' => esc_html__( 'Primary', 'mbtheme' ),
	) );
    }

}
add_action( 'after_setup_theme', 'mbtheme_header_nav' );

if ( !function_exists( 'mbtheme_navbar' ) ) {

    /**
     * display the navbar
     */
    function mbtheme_navbar() {
	mbtheme_module_template( 'navbar', 'navbar' );
    }

}
add_action( 'mbtheme_site_header_inner', 'mbtheme_navbar', 5 );

if ( !function_exists( 'mbtheme_navbar_fixed_top' ) ) {

    function mbtheme_navbar_fixed_top() {
	mbtheme_module_template( 'navbar', 'fixed-navbar' );
    }

}
add_action( 'mbtheme_before_site_wrapper', 'mbtheme_navbar_fixed_top' );

if ( !function_exists( 'mbtheme_navbar_nav_menu_item_title' ) ) {

    /**
     * add arrow for menu item that has children
     * only for mbtheme-navbar-nav menu class
     * 
     * @param string $title The menu item's title.
     * @param object $item  The current menu item.
     * @param array  $args  An array of wp_nav_menu() arguments.
     * @param int    $depth Depth of menu item. Used for padding.
     */
    function mbtheme_navbar_nav_menu_item_title( $title, $item, $args, $depth ) {
	// get menu class as array
	$menu_class = explode( ' ', $args->menu_class );
	// mb-nav-hor class only
	if ( !in_array( 'mbtheme-navbar-nav', $menu_class ) ) {
	    return $title;
	}

	// only has children
	$classes = $item->classes;
	if ( !in_array( 'menu-item-has-children', (array) $classes ) ) {
	    return $title;
	}

	// add arrow to title
	$arrow = '<span class="sub-menu-arrow"></span>';
	$title = $title . $arrow;

	return $title;
    }

}

add_filter( 'nav_menu_item_title', 'mbtheme_navbar_nav_menu_item_title', 10, 4 );
