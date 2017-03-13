<div class="mtalents-services">
    <div class="row">
	<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
    	<div class="service-col col-sm-6 col-md-12 col-lg-6">
		<?php
		$icon = mbtheme_get_option( 'service-icon-' . $i, array() );
		$icon_bg = ($icon[ 'url' ]) ? 'background-image: url(\'' . esc_url( $icon[ 'url' ] ) . '\');' : '';
		$title = mbtheme_get_option( 'service-title-' . $i, '' );
		$desc = mbtheme_get_option( 'service-desc-' . $i, '' );
		$color = mbtheme_get_option( 'service-color-' . $i, '#fff' );
		$page = mbtheme_get_option( 'service-page-' . $i, '' );
		$url = get_permalink( $page );
		?>
    	    <div class="service-item" style="background-color: <?php echo esc_attr( $color ); ?>;">
    		<div class="service-icon" style="<?php echo esc_attr( $icon_bg ); ?>"></div>
    		<h4 class="service-title"><?php echo $title; ?></h4>
    		<div class="service-desc"><?php echo $desc; ?></div>
		    <?php if ( $page ) : ?>
			<a href="<?php echo esc_url( $url ); ?>" class="service-link">En savoir plus &nbsp;<i class="fa fa-long-arrow-right"></i></a>
			<?php endif; ?>
    	    </div>
    	</div>
	    <?php
	    echo ($i % 2 === 0) ? '<div class="clearfix visible-sm visible-lg"></div>' : '';
	endfor;
	?>
    </div>
</div>