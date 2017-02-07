<?php
/**
 * Template part for displaying blog thumbnail
 */
if ( post_password_required() || is_attachment() || !has_post_thumbnail() ) {
    //return;
}
?>
<div class="entry-thumbnail">
    
    <?php
    if ( is_singular() ) :

        the_post_thumbnail();

    else :
        ?>

        <a href="<?php the_permalink(); ?>" aria-hidden="true">
            <?php the_post_thumbnail( 'medium' ); ?>
        </a>


<?php endif; // End is_singular() ?>
    
</div><!-- .entry-thumbnail -->