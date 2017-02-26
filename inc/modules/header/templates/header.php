<div class="container">
    <div class="site-header-content">
        <?php
        /*
         * conditions
         * 
         * - default homepage   => empty
         * - front page         => show front page header content
         * - blog page          => "Blog"
         * - single post        => "Blog Detail"
         * - page               => Post meta for header title or Page Title
         * 
         */

        $content = '';
        if ( is_front_page() && is_home() ) {
            // Default homepage
        } elseif ( is_front_page() ) {
            // static homepage
            $content = '<div class="header-front-content">';
            $content .= mbtheme_get_option( 'header-front-content', '' );
            $content .= '</div>';
        } elseif ( is_home() ) {
            // blog page
            $content = '<h3 class="site-header-title">' . __( 'Blog', 'mbtheme' ) . '</h3>';
        } elseif ( is_singular( 'post' ) ) {
            // single post / blog
            $content = '<h3 class="site-header-title">' . __( 'Blog Detail', 'mbtheme' ) . '</h3>';
        } elseif ( is_page() ) {
            // single page
            $page_id      = get_queried_object_id();
            // get post meta for header title
            $header_title = get_post_meta( $page_id, 'header_title', true );
            $header_title = ($header_title) ? $header_title : get_the_title( $page_id );
            $content      = '<h1 class="site-header-title">' . $header_title . '</h1>';
        }

        /**
         * Filters the content inside header
         */
        echo apply_filters( 'mbtheme_header_content', $content );
        ?>
    </div>
</div>