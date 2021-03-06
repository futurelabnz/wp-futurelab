(function($) {
    $(document).ready(function() {
        futurelab.init();

        if( $('.full-screen-height').length ) {
            $(window).resize(function() {
                $('.full-screen-height').height($(window).height() - $('.full-screen-height').offset().top);
            });
            $(window).resize();
        }
    });
})(jQuery);

//Constructor
var futurelab = {
    //Run first time

    _mask: jQuery('#mask'),
    _menuText: jQuery('.menu-text'),
    _menuButton: jQuery('.navbar-toggle'),
    _body: jQuery('html,body'),

    init: function() {
        //this.popupMenu();
        //this.slideinMenu();
        this.scroll_ID();
    },

    //menu section 
    popupMenu: function() {
        var mask = this._mask;
        var menuText = this._menuText;
        var menuButton = this._menuButton;

        jQuery(document).on('click', '.menu-mask, .menu-text, .navbar-toggle.menu-button', function(e) {
            mask.fadeToggle();
            if (menuText.html() == 'Close') {
                menuText.html('Menu');
                menuButton.removeClass('popped_up');
            } else {
                menuText.html('Close');
                menuButton.addClass('popped_up');
            }
        });
    }, 

    //menu section 
    slideinMenu: function() {
        var mask = this._mask;
        var menuText = this._menuText;
        var menuButton = this._menuButton;

        jQuery(document).on('click', '.menu-text, .navbar-toggle', function(e) {
            if ( ! jQuery( ".navbar-toggle" ).hasClass( 'collapsed' ) ) {
                jQuery( ".menu-mask" ).addClass( 'collapsed' );
                jQuery( "body" ).css( "right", "0" );
                jQuery( ".navbar-toggle" ).addClass( 'collapsed' );
            } else {
                jQuery( ".menu-mask" ).removeClass( 'collapsed' );
                jQuery( "body" ).css( "right", "320px" );
                jQuery( ".navbar-toggle" ).removeClass( 'collapsed' );
            }
        });
    },

    scroll_ID: function() {
        jQuery('a[href^="#"]').on('click', function(event) {

            var target = jQuery(this.getAttribute('href'));
            var wpadminbar = jQuery('#wpadminbar');

            if (target.length) {
                event.preventDefault();
                if (wpadminbar.length) {
                    var scroll = target.offset().top - 32;
                } else {
                    var scroll = target.offset().top;
                }
                jQuery('html, body').stop().animate({
                    scrollTop: scroll
                }, 1000);
            }

        });
    },

};
