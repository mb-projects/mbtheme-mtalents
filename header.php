<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php wp_head(); ?>
    </head>

    <!-- BEGIN BODY -->
    <body <?php body_class(); ?>>
        
        <a class="skip-link screen-reader-text" href="#site_content"><?php esc_html_e( 'Skip to content', 'mbtheme' ); ?></a>

        <?php do_action( 'mbtheme_before_site_wrapper' ); ?>

        <!-- BEGIN SITE WRAPPER -->
        <div id="site_wrapper">

            <?php do_action( 'mbtheme_before_site_header' ); ?>

            <header id="site_header">
                <?php do_action( 'mbtheme_site_header' ); ?>
            </header><!-- #site_header -->

            <?php do_action( 'mbtheme_after_site_header' ); ?>

            <!-- BEGIN SITE CONTENT -->
            <div id="site_content">

                <?php
                do_action( 'mbtheme_after_site_content_open' );
                