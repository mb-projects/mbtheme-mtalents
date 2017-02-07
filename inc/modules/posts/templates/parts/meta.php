<?php
/**
 *  Template part for displaying blog meta
 * 
 *  only for post
 */
if ( 'post' === get_post_type() ) :
    ?>
    <div class="entry-meta">
        <?php
        // date
        $time_string = sprintf( '<span class="entry-date">%1$s</span>', esc_html( get_the_date() ) );
        echo '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';

        // author
        echo ' - ';
        echo '<span class="entry-author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

        // categories
        echo ' - ';
        $categories_list = get_the_category_list( ', ' );
        if ( $categories_list ) {
            echo '<span class="entry-categories">' . $categories_list . '</span>';
        }

        // comment link
        if ( !post_password_required() && ( comments_open() || get_comments_number() ) ) {
            echo ' - ';
            $comment_number = get_comments_number();
            echo '<span class="comments-link">';
            echo '<a href="' . get_comments_link() . '" >' . __( 'Comments', 'mbtheme' ) . ' ' . $comment_number . '</a>';
            echo '</span>';
        }
        ?>
    </div>
    <?php

endif;
