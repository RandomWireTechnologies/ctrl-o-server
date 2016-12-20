!function (document, window, $) {
	"use strict";

	jQuery('#toggle').on('click',function () {
        screenfull.toggle(jQuery('.site-navbar-small')[0]);
    });

    jQuery('.icon-setting').on('click',function () {
        jQuery('.color-change-setting').toggleClass('show-color');
        jQuery('.icon-setting').toggleClass('show-setting-icon');
    });

    jQuery('body').mouseup(function () {
        jQuery('.color-change-setting').removeClass('show-color');
        jQuery('.icon-setting').removeClass('show-setting-icon');
    });

    jQuery('.color-change-setting').mouseup(function () {
        return false;
    });

    jQuery('body').mouseup(function () {
        jQuery('.icon-setting').removeClass('show-setting-icon');
    });

    jQuery('.icon-setting').mouseup(function () {
        if (jQuery(".utmenucontainer").hasClass("wsoffcanvasopener")) {
            jQuery('.utmenucontainer').removeClass('wsoffcanvasopener');
        }
    });

    jQuery('#wsnavtoggle').mouseup(function () {
        if (jQuery(".icon-setting").hasClass("show-setting-icon")) {
            jQuery('.icon-setting').removeClass('show-setting-icon');
            jQuery('.color-change-setting').removeClass('show-color');
        }
    });

    jQuery('.icon-setting').mouseup(function () {
        return false;
    });

    if (jQuery(this).find("peity-info")) {
        jQuery('.peity-info path').attr({fill: "#36a9e1"});
        jQuery('.peity-info path:nth-child(2)').attr({fill: "#3600ff"});
        jQuery('.peity-info path:nth-child(3)').attr({fill: "#3666ff"});
        jQuery('.peity-info path:last-child').attr({fill: "#9dcee6"});
        jQuery('.peity-info rect').attr({fill: "#36a9e1"});
    }

    // Fonts
    // $template_fonts.children('div').on('click',function (e) {
    //     e.preventDefault();
    //     var $this = jQuery(this),
    //             this_font = $this.attr('data-site-font');

    //     $template_fonts.children('div').removeClass('active_font');
    //     jQuery(this).addClass('active_font');
    //     $html
    //             .removeClass('fonts1 fonts2 fonts3 fonts4 fonts5')
    //             .addClass(this_font);

    //     if (this_font === '') {
    //         localStorage.removeItem('porish_fonts');
    //     } else {
    //         localStorage.setItem("porish_fonts", this_font);
    //     }

    // });

    // // get template from local storage
    // if (localStorage.getItem("porish_fonts") !== null) {
    //     $template_fonts.children('div[data-site-font=' + localStorage.getItem("porish_fonts") + ']').click();
    // }

    // var fonts = localStorage.getItem("porish_fonts");
    
}(document, window, jQuery);