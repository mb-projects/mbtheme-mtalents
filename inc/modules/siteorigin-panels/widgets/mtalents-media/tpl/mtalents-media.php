<?php
$image_id	 = $instance[ 'image' ];
$image		 = wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'mtalents-media-img' ) );
?>
<div class="mtalents-media">
	<div class="mtalents-media-image">
		<div class="img-border img-border-bl">
			<?php echo $image; ?>
		</div>
	</div>
	<div class="mtalents-media-content">
		<div class="mtalents-media-content-inner">
			<?php echo $instance[ 'content' ]; ?>
		</div>
	</div>
</div>
