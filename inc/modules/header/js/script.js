( function ( $ ) {
    $( function ( ) {

	var max = 0;
	$( '#header_banner_slider .carousel-inner .item' ).each( function () {
	    if ( max < $( this ).height() ) {
		max = $( this ).height();
	    }
	} );
	$( '#header_banner_slider .carousel-inner' ).css( 'min-height', max );

    } );
}( jQuery ) );