<?php
if ( !isset( $instance[ 'values' ] ) || !is_array( $instance[ 'values' ] ) ) {
	return;
}
?>

<div class="mtalents-values-wrapper">
	<?php
	$content = '';
	foreach ( $instance[ 'values' ] as $key => $value ) {
		$image_id	 = $value[ 'icon' ];
		$icon		 = wp_get_attachment_image( $image_id, 'full', false, array( 'class' => 'mtalents-value-icon' ) );

		$content .= '<div class="mtalents-value-item mtalents-value-item-' . ++$key . '">';
		$content .= '<div class="mtalents-value-header">' . $icon . '<h4>' . $value[ 'title' ] . '</h4></div>';
		$content .= '<div class="mtalents-value-desc">'. $value[ 'desc' ] .'</div>';
		$content .= '</div>';
	}
	
	echo $content;
	?>
</div>

