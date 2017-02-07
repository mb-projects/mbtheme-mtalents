<?php
/**
 * The template for displaying pages
 */
get_header();
?>
<div <?php mbtheme_content_area_class( array( 'container' ) ); ?>> 

    <?php do_action( 'mbtheme_before_site_main', 'page' ); ?>

    <!-- BEGIN SITE MAIN -->
    <main class="site-main" role="main">

        <?php do_action( 'mbtheme_site_main', 'page' ); ?>

    </main><!-- .site-main -->
    <!-- END SITE MAIN -->

    <?php do_action( 'mbtheme_after_site_main', 'page' ); ?>

</div><!-- .site-content-area -->
<?php
get_footer();
