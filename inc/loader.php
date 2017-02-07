<?php

/**
 * loader
 */
/**
 * load all functions files of modules
 */
foreach ( glob( MBTHEME_DIR_MODULES . '/*/' ) as $module_load ) {
    if ( file_exists( $module_load . 'functions.php' ) ) {
        include_once $module_load . 'functions.php';
    }
}

/**
 * load all main files of modules
 */
foreach ( glob( MBTHEME_DIR_MODULES . '/*/' ) as $module_load ) {
    if ( file_exists( $module_load . 'load.php' ) ) {
        include_once $module_load . 'load.php';
    }
    if ( file_exists( $module_load . 'hooks.php' ) ) {
        include_once $module_load . 'hooks.php';
    }
    if ( file_exists( $module_load . 'options.php' ) ) {
        include_once $module_load . 'options.php';
    }
    if ( file_exists( $module_load . 'shortcodes.php' ) ) {
        include_once $module_load . 'shortcodes.php';
    }
}