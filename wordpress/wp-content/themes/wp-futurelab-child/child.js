( function( $ ) {
	$( document ).ready( function() {
		$('.photo-gallery').slick({
		  autoplay: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  centerMode: true,
		  arrows: false,
		  variableWidth: true
		});
	} );
} )( jQuery );