<?php
/**
 * The template for displaying the footer
 */
do_action( 'mbtheme_before_site_content_close' );
?>

</div> <!-- #site_content -->
<!-- END SITE CONTENT -->

<?php do_action( 'mbtheme_before_site_footer' ); ?>

<!-- BEGIN FOOTER -->
<footer id="site_footer">

    <?php do_action( 'mbtheme_site_footer' ); ?>

</footer><!-- footer.site-footer -->
<!-- END FOOTER -->

<?php do_action( 'mbtheme_after_site_footer' ); ?>

</div> <!-- #site_wrapper -->
<!-- END SITE WRAPPER -->

<?php do_action( 'mbtheme_after_site_wrapper' ); ?>

<?php wp_footer(); ?>

</body>
<!-- END BODY -->
</html>