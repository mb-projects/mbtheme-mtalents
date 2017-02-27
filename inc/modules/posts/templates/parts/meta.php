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
        echo __( 'Date', 'mbtheme' ) . ' : <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
        ?>
    </div>
    <?php

endif;
