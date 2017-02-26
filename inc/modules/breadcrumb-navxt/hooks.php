<?php
if ( !function_exists( 'mbtheme_breadcrumb_tgm_plugins' ) ) {

    function mbtheme_breadcrumb_tgm_plugins( $plugins ) {
        $plugins[] = array(
            'name'     => 'Breadcrumb NavXT',
            'slug'     => 'breadcrumb-navxt',
            'required' => true,
        );
        return $plugins;
    }

}

add_filter( 'mbtheme_tgm_plugins', 'mbtheme_breadcrumb_tgm_plugins' );

if ( !function_exists( 'mbtheme_breadcrumb_navxt_display' ) ) {

    /**
     * display breadcrumb navxt before title header
     */
    function mbtheme_breadcrumb_navxt_display( $content ) {
        if ( !is_front_page() && function_exists( 'bcn_display' ) ) {
            ob_start();
            ?>
            <div class="breadcrumbs">
                <?php bcn_display(); ?>
            </div>
            <?php
            $content = ob_get_clean() . $content;
        }
        return $content;
    }

}

add_action( 'mbtheme_header_content', 'mbtheme_breadcrumb_navxt_display' );
