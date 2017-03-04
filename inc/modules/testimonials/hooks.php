<?php
if ( !function_exists( 'mbtheme_testimonial_post_display' ) ) {

	/**
	 * display testimonial panel below post content
	 */
	function mbtheme_testimonial_post_display() {
		// post only
		if ( !is_singular( 'post' ) ) {
			return;
		}
		$post_id = get_queried_object_id();

		// get testimonials id
		global $mbdl_meta_box;
		if ( !isset( $mbdl_meta_box[ 'post_testimonial' ] ) ) {
			return;
		}
		$post_testimonials_mb_	 = $mbdl_meta_box[ 'post_testimonial' ];
		$post_testimonials_mb	 = (array) $post_testimonials_mb_->getValues( $post_id );
		$testimonials_id		 = $post_testimonials_mb[ 'testimonials_id' ];

		// itearate all testimonials
		$testimonials_id_arr = explode( ',', $testimonials_id );
		echo '<div class="post-testimonials">';
		if ( $testimonials_id_arr ) {
			?>
			<div class="post-testimonials-header">
				<h2>Des clients contents</h2>
				<p>Ils nous ont fait confiance et ont accepté de témoigner... Nous vous en remercions!</p>
			</div>
			<?php
			foreach ( $testimonials_id_arr as $id ) {
				mbtheme_module_template( 'testimonials', 'panel', '', array( 'testimonial_id' => $id ) );
			}
		}
		echo '</div>';
	}

}
add_action( 'mbtheme_after_site_main', 'mbtheme_testimonial_post_display', 11 );
