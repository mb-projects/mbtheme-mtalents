<?php

if ( !class_exists( 'Redux' ) ) {
    return;
}

$opt_name = "mbtheme_opt";
$theme = wp_get_theme();

$args = array(
    'display_name'     => $theme->get( 'Name' ),
    'display_version'  => $theme->get( 'Version' ),
    'menu_type'        => 'submenu',
    'page_parent'      => 'themes.php',
    'menu_title'       => __( 'Theme Options', 'mbtheme' ),
    'page_title'       => __( 'Theme Options', 'mbtheme' ),
    'admin_bar'        => true,
    'customizer'       => false,
//    'customizer_only' => true,
    'dev_mode'         => false,
    'async_typography' => true,
);

Redux::setArgs( $opt_name, $args );

// fires all option sections
do_action( 'mbtheme_redux_options', $opt_name );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Custom Code', 'mbtheme' ),
    'id'         => 'editor-ace',
    //'icon'  => 'el el-home'
    'fields'     => array(
        array(
            'id'       => 'mbtheme-editor-css',
            'type'     => 'ace_editor',
            'title'    => __( 'CSS Code', 'mbtheme' ),
            'subtitle' => __( 'Paste your CSS code here.', 'mbtheme' ),
            'mode'     => 'css',
            'theme'    => 'chrome',
            'full_width' => true
        )
    )
) );
