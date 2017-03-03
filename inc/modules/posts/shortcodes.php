<?php

if ( !function_exists( 'mbtheme_posts_latest_sc' ) ) {

	function mbtheme_posts_latest_sc() {
		ob_start();
		$latest_posts = get_posts( array(
			'numberposts' => 3
		) );
		if ( $latest_posts ) {
			global $post;
			echo '<div class="row">';
			foreach ( $latest_posts as $post ) {
				mbtheme_module_template( 'posts', 'latest-posts' );
			}
			wp_reset_postdata();
			echo '</div>';
		}
		return ob_get_clean();
	}

}
add_shortcode( 'mbtheme_posts_latest', 'mbtheme_posts_latest_sc' );
