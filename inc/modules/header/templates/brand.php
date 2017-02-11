<?php
/**
 * Template part for displaying site brand
 */

// has description
$description = get_bloginfo( 'description', 'display' );
$has_description = ( $description || is_customize_preview() );

// has custom logo
$has_custom_logo = (function_exists( 'has_custom_logo' ) && has_custom_logo());
if ( $has_custom_logo ) {
    $site_brand_class .= esc_attr( ' has-custom-logo' );
}else{
    // has description
    $description = get_bloginfo( 'description', 'display' );
    $has_description = ( $description || is_customize_preview() );
    if ( $has_description ) {
        $site_brand_class .= esc_attr( ' has-description' );
    }
}
?>
<div class="<?php echo esc_attr( $site_brand_class ); ?>">

    <?php
    // hide site title and description if has logo
    $hide_title_style = "";
    if ( $has_custom_logo ) {
        the_custom_logo();
        $hide_title_style = 'style="display: none;"';
    }
    ?>

    <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title" <?php echo $hide_title_style; ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    <?php else : ?>
        <p class="site-title" <?php echo $hide_title_style; ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    <?php
    endif;

    // display the site description
    if ( $description || is_customize_preview() ) :
        ?>
        <p class="site-description" <?php echo $hide_title_style; ?>><?php echo $description; ?></p>
    <?php endif;
    ?>
</div><!-- .site-brand -->