<?php
/**
 * Template part for displaying post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry-post entry-page entry-singular' ) ); ?>>
    <header class="entry-header">
        <?php
        // title
        mbtheme_module_template( 'posts', 'parts/title' );
        ?>

        <div class="entry-meta">
            <?php
            // entry meta 
            mbtheme_module_template( 'posts', 'parts/meta' );
            ?>
        </div><!-- .entry-meta -->

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
    mbtheme_module_template( 'posts', 'parts/footer' );
    ?>

</article><!-- #post-## -->