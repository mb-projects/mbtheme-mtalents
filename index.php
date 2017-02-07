<?php
/**
 * The main template file
 */
get_header();
?>
<div <?php mbtheme_content_area_class( array( 'container' ) ); ?>> 

    <?php do_action( 'mbtheme_before_site_main', 'index' ); ?>

    <!-- BEGIN SITE MAIN -->
    <main class="site-main" role="main">

        <?php do_action( 'mbtheme_site_main', 'index' ); ?>
        
    </main><!-- .site-main -->
    <!-- END SITE MAIN -->

    <?php do_action( 'mbtheme_after_site_main', 'index' ); ?>

</div><!-- .site-content-area -->
<?php
get_footer();
