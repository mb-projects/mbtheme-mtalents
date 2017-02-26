<?php
// get backgound image
$bg		 = mbtheme_get_option( 'footer-bg', array() );
$bg_style	 = ($bg[ 'url' ]) ? 'background-image: url("' . esc_url( $bg[ 'url' ] ) . '")' : '';
?>

<div class="site-footer" style="<?php echo esc_attr( $bg_style ); ?>">
	<div class="site-footer-top">
		<div class="container">

			<div class="row">
				<div class="col-md-4 col-sm-6 site-footer-col">
					<?php
					if ( is_active_sidebar( 'footer-top' ) ) {
						dynamic_sidebar( 'footer-top' );
					}
					?>
				</div>
				<div class="col-md-4 col-sm-6 site-footer-col">
					<?php
					if ( is_active_sidebar( 'footer-top-2' ) ) {
						dynamic_sidebar( 'footer-top-2' );
					}
					?>
				</div>
				<div class="clearfix visible-sm"></div>
				<div class="col-md-4 col-sm-6 site-footer-col">
					<?php
					if ( is_active_sidebar( 'footer-top-3' ) ) {
						dynamic_sidebar( 'footer-top-3' );
					}
					?>
				</div>
			</div>

		</div>
	</div>
	<div class="site-footer-bottom">
		<?php
		if ( is_active_sidebar( 'footer-bottom' ) ) {
			dynamic_sidebar( 'footer-bottom' );
		}
		?>

	</div>
</div>