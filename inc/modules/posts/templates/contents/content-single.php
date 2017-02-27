<?php
/**
 * Template part for displaying post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry-post entry-single entry-singular' ) ); ?>>
    <?php
    // get thumbnail image url as background
    $thumb_url   = get_the_post_thumbnail_url( get_the_ID(), 'full' );
    $thumb_style = ( $thumb_url ) ? 'background-image: url("' . esc_url( $thumb_url ) . '");' : '';
    ?>
    <div class="entry-thumbnail" style="<?php echo esc_attr( $thumb_style ); ?>"></div>

    <div class="entry-inner">

        <header class="entry-header">
            <?php
            // entry meta 
            mbtheme_module_template( 'posts', 'parts/meta' );

            // title
            mbtheme_module_template( 'posts', 'parts/title' );
            ?>

        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            // content
            mbtheme_module_template( 'posts', 'parts/entry-content' );

            // link pages
            mbtheme_link_pages();
            ?>
        </div> <!-- .entry-content -->

        <?php
        // footer
        // mbtheme_module_template( 'posts', 'parts/footer' );
        edit_post_link( '<i class="fa fa-pencil"></i>' );
        ?>

    </div>

</article><!-- #post-## -->