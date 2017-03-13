<?php
// get all links
$fb = mbtheme_get_option( 'sl-fb', '#' );
$tw = mbtheme_get_option( 'sl-tw', '#' );
$in = mbtheme_get_option( 'sl-in', '#' );
?>
<ul class="social-links">
    <li><a href="<?php echo esc_url( $fb ) ?>"><i class="fa fa-facebook-f"></i></a></li>
    <li><a href="<?php echo esc_url( $tw ) ?>"><i class="fa fa-twitter"></i></a></li>
    <li><a href="<?php echo esc_url( $in ) ?>"><i class="fa fa-linkedin"></i></a></li>    
</ul>