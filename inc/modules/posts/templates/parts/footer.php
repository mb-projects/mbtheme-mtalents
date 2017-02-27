<?php
/**
 * Template part for displaying blog meta
 */
?>
<div class="entry-footer">

    <?php
    // tags
    if ( 'post' === get_post_type() ) {
        $tags_list = get_the_tag_list( '', ', ' );
        if ( $tags_list ) {
            echo '<div class="entry-tags">' . $tags_list . '</div>';
        }
    }

    // edit link
    // edit_post_link();
    ?>
    
</div>