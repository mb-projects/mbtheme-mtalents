( function ( $ ) {

    $( function ( ) {

	// toggle sub menu
	$( '.mbtheme-navbar-nav' ).on( 'click', '.menu-item-has-children', function ( ev ) {
	    var target = $( ev.target );
	    if ( !target.hasClass( 'sub-menu-arrow' ) ) {
		return;
	    }

	    target.closest( '.menu-item-has-children' ).children( '.sub-menu' ).slideToggle( 200 );

	    return false;
	} );
	
	// auto fixed navbar
	var navbar = $( '#navbar_fixed_top' );
	$( 'body #site_content' ).waypoint( {
	    handler: function ( direction ) {
		if ( direction === 'up' ) {
		    navbar.removeClass( 'show' );
		} else if ( direction === 'down' ) {
		    navbar.addClass( 'show' );
		}
	    },
	    offset: 70
	} );

    } );

}( jQuery ) );

