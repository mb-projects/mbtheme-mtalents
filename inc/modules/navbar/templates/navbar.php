<?php
/**
 * Main navbar template
 */
?>
<nav class="navbar navbar-inverse" id="site_navbar_top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#site_navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php mbtheme_header_brand( 'navbar-brand' ); ?>
        </div>

        <div class="collapse navbar-collapse" id="site_navbar">
            <?php
            mbtheme_module_template( 'navbar', 'nav' );
            ?>
        </div><!-- .navbar-collapse -->
    </div><!-- .container -->
</nav>
