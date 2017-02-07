<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header();
?>
<div <?php mbtheme_content_area_class( array( 'container' ) ); ?>> 

    <?php do_action( 'mbtheme_before_site_main', '404' ); ?> 

    <!-- BEGIN SITE MAIN -->
    <main class="site-main" role="main">

        <?php do_action( 'mbtheme_site_main', '404' ); ?>

    </main><!-- .site-main -->
    <!-- END SITE MAIN -->

    <?php do_action( 'mbtheme_after_site_main', '404' ); ?> 

</div><!-- .site-content-area -->
<?php
get_footer();
