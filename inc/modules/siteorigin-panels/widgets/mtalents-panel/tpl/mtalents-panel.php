<?php
$image_id	 = $instance[ 'image' ];
$image		 = wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'mtalents-panel-img' ) );
$bg_color	 = (isset( $instance[ 'color' ] )) ? 'background-color: ' . $instance[ 'color' ] . ';' : '';

if ( $instance[ 'flip' ] ):
	echo '<div class="mtalents-panel-flip">';
endif;
?>
<div class="mtalents-panel">
	<div class="mtalents-panel-inner" style="<?php echo esc_attr( $bg_color ); ?>">
		<?php echo $image; ?>
		<h4 class="mtalents-panel-title"><?php echo $instance[ 'title' ]; ?></h4>
	</div>
	<div class="mtalents-panel-content">
		<?php echo $instance[ 'content' ]; ?>
	</div>
</div>
<?php
if ( $instance[ 'flip' ] ):
	echo '</div>';
endif;