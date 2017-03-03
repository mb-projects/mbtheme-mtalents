<?php
$image_id	 = $instance[ 'image' ];
$image		 = wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'mtalents-media-img' ) );
$pos		 = $instance[ 'image_pos' ];
?>
<div class="mtalents-media <?php echo ($pos === 'right') ? 'mtalents-media-right' : ''; ?>">
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
	<?php if ( $pos === 'right' ) { ?>
		<div class="mtalents-media-image mtalents-media-image-right">
			<div class="img-border img-border-br">
				<?php echo $image; ?>
			</div>
		</div>
	<?php } ?>
</div>
