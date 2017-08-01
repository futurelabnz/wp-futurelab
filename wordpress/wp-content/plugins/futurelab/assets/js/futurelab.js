/**
 * Javascript for front-end
 *
 * @package FutureLab
 */

(function($) {
	$( document ).ready(function() {
		futurelab_scripts.init();
	});

	var futurelab_scripts = {
		init: function() {
			$( document.body ).on( 'click', '.fl-accordion .toggle', this.accordion_toggle );
			this.owl_carousel();
		},
		accordion_toggle: function( evt ) {
			evt.preventDefault();

			var $this = $( this );

			if ($this.next().hasClass( 'active' )) {
				$this.next().removeClass( 'active' );
				$this.next().slideUp( 350 );
			} else {
				$this.next().toggleClass( 'active' );
				$this.next().slideToggle( 350 );
			}
		},
		owl_carousel: function() {
			if ( $( '.owl-carousel' ).length ) {
				$( '.owl-carousel.futurelab-slides' ).owlCarousel({
					loop: true,
					items: 1,
					nav: true
				});
			}
		}
	}
})(jQuery);
