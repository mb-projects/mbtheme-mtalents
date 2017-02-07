<?php

if ( !function_exists( 'mbtheme_is_blog_archive' ) ) {

    /**
     * if current page is blog archive page
     * 
     * @return bool
     */
    function mbtheme_is_blog_archive() {
        global $post;
        $posttype = get_post_type( $post );
        return ( ( is_archive() || is_home() ) && $posttype == 'post' );
    }

}

if ( !function_exists( 'mbtheme_get_bg_attachment' ) ) {

    /**
     * get css for background-image from attachment
     * 
     * @param int       $id     attachment id
     * @param string    $size   Default: full
     * @param bool      $none   Default: false, set none if url not found
     */
    function mbtheme_get_bg_attachment( $id, $size = 'full', $none = false ) {

        $url = wp_get_attachment_image_url( $id, $size );
        if ( $url ) {
            $style = 'background-image: url(\'' . esc_url( $url ) . '\');';
        }else{
            if ( $none ) {
                $style = 'background-image: none;';
            }
        }

        return $style;
    }

}