<?php
global $mbdl_post_types, $mbdl_meta_box;

// get post
if ( !isset( $mbdl_post_types[ 'testimonial' ] ) || !isset( $instance[ 'testimonial' ] ) || $instance[ 'testimonial' ] === '' ) {
	return;
}
$testimonial_post	 = $mbdl_post_types[ 'testimonial' ];
$testimonial		 = $testimonial_post->getPost( $instance[ 'testimonial' ] );
if ( !$testimonial ) {
	return;
}
$testimonial_id = $testimonial->ID;

// get meta values
if ( !isset( $mbdl_meta_box[ 'testimonial' ] ) ) {
	return;
}
$testimonial_mb_ = $mbdl_meta_box[ 'testimonial' ];
$testimonial_mb	 = (array) $testimonial_mb_->getValues( $testimonial_id );

$color	 = ($testimonial_mb[ 'testimonial-bg' ]) ? 'background-color: ' . $testimonial_mb[ 'testimonial-bg' ] . ';' : '';
$style	 = $color;
?>

<div <?php post_class( 'testimonial-panel', $testimonial_id ) ?> id="<?php echo "testimonial-$testimonial_id" ?>" style="<?php echo esc_attr( $style ); ?>">
	<?php
	echo get_the_post_thumbnail( $testimonial_id, 'thumbnail', array( 'class' => 'testimonial-photo' ) );
	?>
	<div class="testimonial-title">
		<?php
		echo $testimonial->post_title;
		echo ($testimonial_mb[ 'company' ]) ? ', ' . $testimonial_mb[ 'company' ] : '';
		?>
	</div>
	<div class="testimonial-content">
		<?php echo $testimonial_mb[ 'description' ]; ?>
	</div>
</div>