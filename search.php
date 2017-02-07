<?php
/**
 * The template for displaying search results pages
 */
get_header();
?>
<div <?php MBTheme::content_area_class( array( 'container' ) ); ?>> 

    <?php do_action( 'mbtheme_before_site_main', 'search' ); ?> 

    <!-- BEGIN SITE MAIN -->
    <main class="site-main" role="main">

        <?php do_action( 'mbtheme_site_main', 'search' ); ?>

    </main><!-- .site-main -->
    <!-- END SITE MAIN -->

    <?php do_action( 'mbtheme_after_site_main', 'search' ); ?> 

</div><!-- .site-content-area -->
<?php
get_footer();
