<?php

/**
 * functions and definitions
 */
// constants
require_once get_template_directory() . '/inc/constant.php';

if ( !function_exists( 'mbtheme_setup' ) ) {

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function mbtheme_setup() {
        // translation
        load_theme_textdomain( 'mbtheme', MBTHEME_DIR . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // add theme support for title tag
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'mbtheme_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }

}
add_action( 'after_setup_theme', 'mbtheme_setup' );

/**
 * sets max image width inserted into a post
 */
if ( !isset( $content_width ) ) {
    $content_width = apply_filters( 'mbtheme_content_width', 600 );
}

/**
 * Enqueues scripts and styles.
 */
function mbtheme_enqueue_scripts() {

    // Fires before enqueue main styles and scripts
    do_action( 'mbtheme_enqueue_scripts_before_main' );

    // Theme stylesheet
    wp_enqueue_style( 'mbtheme-theme-stylesheet', get_stylesheet_uri() );
    // main stylesheet
    wp_enqueue_style( 'mbtheme-style', MBTHEME_URI_ASSETS . '/css/style.css' );

    // bootstrap script
    wp_enqueue_script( 'mbtheme-bootstrap-script', MBTHEME_URI_ASSETS . '/js/bootstrap.js', array( 'jquery' ), false, true );
    // main script
    wp_enqueue_script( 'mbtheme-script', MBTHEME_URI_ASSETS . '/js/script.js', array( 'jquery' ), false, true );

    // Localize the script
    wp_localize_script( 'mbtheme-script', 'mbtheme', apply_filters( 'mbtheme_localize_script', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ) ) );

    // comment reply
    if ( is_singular() ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Fires after enqueue main styles and scripts
    do_action( 'mbtheme_enqueue_scripts_after_main' );
}

add_action( 'wp_enqueue_scripts', 'mbtheme_enqueue_scripts' );

/**
 * Enqueues scripts and styles on admin
 */
function mbtheme_admin_enqueue_scripts() {
    // Fires before enqueue main styles and scripts
    do_action( 'mbtheme_admin_enqueue_scripts_before_main' );

    // main admin stylesheet
    wp_enqueue_style( 'mbtheme-admin-style', MBTHEME_URI_ASSETS . '/css/admin.css' );
    // main admin script
    wp_enqueue_script( 'mbtheme-admin-script', MBTHEME_URI_ASSETS . '/js/admin.js', array( 'jquery' ), false, true );

    // Localize the script
    wp_localize_script( 'mbtheme-admin-script', 'mbtheme', apply_filters( 'mbtheme_localize_script_admin', array() ) );

    // Fires after enqueue main styles and scripts
    do_action( 'mbtheme_admin_enqueue_scripts_after_main' );
}

add_action( 'admin_enqueue_scripts', 'mbtheme_admin_enqueue_scripts' );

/**
 * get theme option.
 * 
 * @param string    $name       Required. Option key.
 * @param mixed     $default    default value if option doesn't exist.
 * 
 * @return mixed value of option
 */
function mbtheme_get_option( $name, $default = false ) {
    // using redux
    if ( function_exists( 'mbtheme_redux_get_option' ) ) {
        return mbtheme_redux_get_option( $name, $default );
    }
    // end redux
    return $default;
}

/**
 * Display the classes for site-content-area
 * 
 * @param string|array $class One or more classes to add to the class list.
 */
function mbtheme_content_area_class( $class = '' ) {

    // default class
    $classes = array( 'site-content-area' );

    if ( !empty( $class ) ) {
        if ( !is_array( $class ) ) {
            $class = preg_split( '#\s+#', $class );
        }
        $classes = array_merge( $classes, $class );
    }else{
        // Ensure that we always coerce class to being an array.
        $class = array();
    }

    $classes = array_map( 'esc_attr', array_unique( $classes ) );

    /**
     * Filters the list of CSS body classes for the current post or page.
     *
     * @param array $classes An array of body classes.
     * @param array $class   An array of additional classes added to the body.
     */
    $classes = apply_filters( 'mbtheme_layout_class', $classes );

    echo 'class="' . implode( ' ', $classes ) . '"';
}

/**
 * get template parts on module directory
 * 
 * @param string $module_dir    Directory of Module.
 * @param string $slug          The slug name for the generic template.
 * @param string $name          The name of the specialised template.
 * @param array  $var           Variables that will be passed to the included file
 * 
 */
function mbtheme_module_template( $module_dir, $slug, $name = '', $var = array() ) {
    $dir = 'inc/modules/' . $module_dir . '/templates/';
    $slug = $dir . $slug;

    // just get template part if no $var
    if ( empty( $var ) ) {
        get_template_part( $slug, $name );
        return;
    }

    // extract the array
    if ( is_array( $var ) ) {
        extract( $var, EXTR_SKIP );
    }

    $templates = array();
    $name = ( string ) $name;
    if ( '' !== $name ) {
        $templates[] = "{$slug}-{$name}.php";
    }

    $templates[] = "{$slug}.php";

    $template = locate_template( $templates );

    if ( $template ) {
        include( locate_template( $templates ) );
    }
}

/**
 * loader
 */
require_once MBTHEME_DIR_INC . '/loader.php';
