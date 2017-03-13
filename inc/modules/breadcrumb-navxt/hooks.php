<?php
if ( !function_exists( 'mbtheme_breadcrumb_tgm_plugins' ) ) {

    function mbtheme_breadcrumb_tgm_plugins( $plugins ) {
	$plugins[] = array(
	    'name' => 'Breadcrumb NavXT',
	    'slug' => 'breadcrumb-navxt',
	    'required' => true,
	);
	return $plugins;
    }

}

add_filter( 'mbtheme_tgm_plugins', 'mbtheme_breadcrumb_tgm_plugins' );

if ( !function_exists( 'mbtheme_breadcrumb_navxt_display' ) ) {

    /**
     * display breadcrumb navxt before title header
     */
    function mbtheme_breadcrumb_navxt_display( $content ) {
	if ( !is_front_page() && function_exists( 'bcn_display' ) ) {
	    ob_start();
	    ?>
	    <div class="breadcrumbs">
		<?php bcn_display(); ?>
	    </div>
	    <?php
	    $content = ob_get_clean() . $content;
	}
	return $content;
    }

}

add_action( 'mbtheme_header_content', 'mbtheme_breadcrumb_navxt_display' );

if ( !function_exists( 'mbtheme_bcnext_remove_current_item' ) ) {

    function mbtheme_bcnext_remove_current_item( $trail ) {
	// single post only
	if ( !is_singular( 'post' ) ) {
	    return $trail;
	}
	//Make sure we have a type
	if ( isset( $trail->breadcrumbs[ 0 ]->type ) && is_array( $trail->breadcrumbs[ 0 ]->type ) && isset( $trail->breadcrumbs[ 0 ]->type[ 1 ] ) ) {
	    //Check if we have a current item
	    if ( in_array( 'current-item', $trail->breadcrumbs[ 0 ]->type ) ) {
		//Shift the current item off the front
		array_shift( $trail->breadcrumbs );
	    }
	}
    }

}
add_action( 'bcn_after_fill', 'mbtheme_bcnext_remove_current_item' );
