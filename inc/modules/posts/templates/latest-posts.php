<?php
$image	 = get_the_post_thumbnail_url( get_the_ID(), 'full' );
$bg		 = ($image) ? "background-image: url('" . esc_url( $image ) . "');" : '';
?>
<div class="col-sm-4">
	<div class="mbtheme-latest-post">
		<div class="mbtheme-latest-post-image" style="<?php echo esc_attr( $bg ); ?>"></div>
		<div class="mbtheme-latest-post-content">
			<?php
			echo '<div class="mbtheme-latest-post-date">' . get_the_date() . '</div>';
			echo '<h4><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
			?>
		</div>
	</div>
</div>