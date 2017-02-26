<?php
// get page thumbnail image if it is a page
$bg_url = '';
if ( is_home() ) {
    $bg     = mbtheme_get_option( 'header-bg-blog', array() );
    $bg_url = $bg[ 'url' ];
} elseif ( is_page() ) {
    $page_id = get_queried_object_id();
    $bg_url  = get_the_post_thumbnail_url( $page_id, 'full' );
}

// get default backgound image
if ( !$bg_url ) {
    $bg     = mbtheme_get_option( 'header-bg-default', array() );
    $bg_url = $bg[ 'url' ];
}

// set bg style
$bg_style = ($bg_url) ? 'background-image: url("' . esc_url( $bg_url ) . '")' : '';
?>
<div class="site-header" style="<?php echo esc_attr( $bg_style ); ?>">
    <div class="site-header-inner">
        <?php do_action( 'mbtheme_site_header_inner' ); ?>
    </div>
</div>