<?php
/**
 * Template part for displaying post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'entry-post entry-single entry-singular' ) ); ?>>
    <header class="entry-header">
        <?php
        // title
        mbtheme_module_template( 'posts', 'parts/title' );

        // entry meta 
        mbtheme_module_template( 'posts', 'parts/meta' );
        ?>

    </header><!-- .entry-header -->

    <?php
    // thumbnail
    mbtheme_module_template( 'posts', 'parts/thumbnail' );
    ?>
    
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