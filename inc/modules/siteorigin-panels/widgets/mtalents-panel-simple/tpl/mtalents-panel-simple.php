<?php
$image_id	 = $instance[ 'icon' ];
$icon		 = wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'mtalents-simple-panel-icon' ) );
$color		 = ($instance[ 'color' ]) ? 'border-bottom-color: ' . $instance[ 'color' ] : '';
?>
<div class="mtalents-simple-panel" style="<?php echo esc_attr( $color ); ?>">
	<div class="text-center">
		<?php
		echo $icon;
		echo ($instance[ 'title' ]) ? '<h4 class="mtalents-simple-panel-title">' . $instance[ 'title' ] . '</h4>' : '';
		?>
	</div>
	<div class="mtalents-simple-panel-content"><?php echo $instance[ 'desc' ]; ?></div>
</div>
