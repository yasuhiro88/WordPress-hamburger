jQuery( function( $ ) {
	$( ".is-hamburger" ).click( function() {
		$( this ).toggleClass( "is-open" );
		$( ".p-gmenu" ).toggleClass( "is-open" );
		$(".c-zdo_drawer_bg").fadeToggle();
	} );
	$(".c-zdo_drawer_bg").click(function () {
		$(this).fadeOut();
		$(".c-zdo_drawer_bg").removeClass("is-open");
		$(".p-gmenu").removeClass("is-open");
		$(".is-hamburger").removeClass("is-open");
	});
} );