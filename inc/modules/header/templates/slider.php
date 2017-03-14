<?php
$interval = (int) mbtheme_get_option( 'header-front-slide-interval', '7000' );
$interval = ($interval < 3000) ? 3000 : $interval;

$pause = (mbtheme_get_option( 'header-front-slide-pause', '0' )) ? 'hover' : 'null';
?>
<div id="header_banner_slider" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr( $interval ); ?>" data-pause="<?php echo esc_attr( $pause ); ?>">
    <div class="carousel-inner" role="listbox">
        <?php
        $contents = mbtheme_get_option( 'header-front-content', '' );
        $contents_ = explode( "\n", $contents );
        $i = 1;
        foreach ( $contents_ as $content ) {
            ?>
            <div class="item <?php echo ($i++ === 1) ? 'active' : ''; ?>">
                <div class="header-front-content">
                    <?php echo $content; ?>
                </div>
            </div>	
            <?php
        }
        ?>
    </div>
</div>