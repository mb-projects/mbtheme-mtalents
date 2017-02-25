<?php

wp_nav_menu( array(
    'theme_location' => 'primary',
    'container'      => false,
    'menu_id'        => 'site_primary_menu',
    'menu_class'     => 'site-primary-menu nav navbar-nav navbar-right mbtheme-navbar-nav',
    'depth'          => 3,
    'walker'         => new MBTheme_Walker_Nav(),
    'fallback_cb'    => false // do not using default menu
        )
);
