!function (document, window, $) {
    "use strict";
    var dynamic_color = false;
    if (dynamic_color == false) {
        localStorage.setItem('porish-dark-template', '');
    }
    if ("undefined" != typeof Switchery) {
        var defaults = {color: "#36A9E1"};
        jQuery('[data-plugin="switchery"]').each(function () {
            var options = jQuery.extend({}, defaults, jQuery(this).data());
            new Switchery(this, options)
        })
    }

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

    var $switcher = jQuery('.right-side-setting'),
            $template_switcher = jQuery('.color-section'),
            $template_fonts = jQuery('.fonts-section'),
            $template_color = jQuery('.darkcolor-section'),
            $template_texture = jQuery('.image-section'),
            $template_checkbox = jQuery('.texture-section'),
            $body = jQuery('body'),
            $html = jQuery('html');

    var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    
	var pathArray = window.location.pathname.split("/").pop();
	
    var template_color ="default";

    $template_switcher.children('div').on('click',function (e) {
        e.preventDefault();
        var $this = jQuery(this),
                this_template = $this.attr('data-site-color');
        $template_switcher.children('div').removeClass('active_color');
        jQuery(this).addClass('active_color');
        if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
            jQuery('#site-color').attr({href: 'assets/css/colors/' + this_template + '.css'});
        } else {
            jQuery('#site-color').attr({href: '../assets/css/colors/' + this_template + '.css'});
        }

        var porishtemplate = localStorage.getItem("porish-dark-template");
        if (porishtemplate !== null && porishtemplate !== "") {
            if (jQuery("#site-dark-color").length == 0) {
                if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="assets/css/colors/dark/' + this_template + '-' + porishtemplate + '.css">');
                } else {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="../assets/css/colors/dark/' + this_template + '-' + porishtemplate + '.css">');
                }
            } else {
                if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
                    jQuery('#site-dark-color').attr('href', 'assets/css/colors/dark/' + this_template + '-' + porishtemplate + '.css');
                } else {
                    jQuery('#site-dark-color').attr('href', '../assets/css/colors/dark/' + this_template + '-' + porishtemplate + '.css');
                }
            }
        } else {
            jQuery('#site-dark-color').remove();
        }

        if (this_template == null || this_template == "") {
            localStorage.setItem("porish_template", this_template);
        } else {
            localStorage.setItem("porish_template", this_template);
        }
        if (this_template === 'deep-orange') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#e6732b"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#9a420b"});
                jQuery('.peity-info path:nth-child(4)').attr({fill: "#da5b0b"});
                jQuery('.peity-info path:last-child').attr({fill: "#f1a58e"});
                jQuery('.peity-info rect').attr({fill: "#bf360c"});
            }
            return false;
        } else if (this_template === 'cyan') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#006064"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#27e1e8"});
                jQuery('.peity-info path:nth-child(4)').attr({fill: "#22b5bb"});
                jQuery('.peity-info path:last-child').attr({fill: "#7dd4d8"});
                jQuery('.peity-info rect').attr({fill: "#006064"});
            }
            return false;
        } else if (this_template === 'orange') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#fb8c00"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#9c6117"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#ff6626"});
                jQuery('.peity-info path:last-child').attr({fill: "#f9d9ab"});
                jQuery('.peity-info rect').attr({fill: "#fb8c00"});
            }
            return false;
        } else if (this_template === 'dark-green') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#2c9079"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#9c6117"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#45c1a5"});
                jQuery('.peity-info path:last-child').attr({fill: "#90e6d2"});
                jQuery('.peity-info rect').attr({fill: "#2c9079"});
            }
            return false;
        } else if (this_template === 'dark-cyan') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#00838f"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#005a63"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#0baebd"});
                jQuery('.peity-info path:last-child').attr({fill: "#8dd0d6"});
                jQuery('.peity-info rect').attr({fill: "#00838f"});
            }
            return false;
        } else if (this_template === 'pink') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#c2185b"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#770b36"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#f72f7e"});
                jQuery('.peity-info path:last-child').attr({fill: "#f196ba"});
                jQuery('.peity-info rect').attr({fill: "#c2185b"});
            }
            return false;
        } else if (this_template === 'gray') {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#9e9e9e"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#696060"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#b5adad"});
                jQuery('.peity-info path:last-child').attr({fill: "#d8d6d6"});
                jQuery('.peity-info rect').attr({fill: "#9e9e9e"});
            }
            return false;
        } else {
            if (jQuery(this).find("peity-info")) {
                jQuery('.peity-info path').attr({fill: "#36a9e1"});
                jQuery('.peity-info path:nth-child(2)').attr({fill: "#3600ff"});
                jQuery('.peity-info path:nth-child(3)').attr({fill: "#3666ff"});
                jQuery('.peity-info path:last-child').attr({fill: "#9dcee6"});
                jQuery('.peity-info rect').attr({fill: "#36a9e1"});
            }
            return false;
        }

    });



    // get template from local storage
    if (localStorage.getItem("porish_template") !== null) {
        $template_switcher.children('div[data-site-color=' + localStorage.getItem("porish_template") + ']').click();
    }
    else
    {
        if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
            jQuery('#site-color').attr({href: 'assets/css/colors/' + template_color + '.css'});
        } else {
            jQuery('#site-color').attr({href: '../assets/css/colors/' + template_color + '.css'});
        }
        
    }

    /******************************************** Fonts ***************************************************/

    $template_fonts.children('div').on('click',function (e) {
        e.preventDefault();
        var $this = jQuery(this),
                this_font = $this.attr('data-site-font');

        $template_fonts.children('div').removeClass('active_font');
        jQuery(this).addClass('active_font');
        $html
                .removeClass('fonts1 fonts2 fonts3 fonts4 fonts5')
                .addClass(this_font);

        if (this_font === '') {
            localStorage.removeItem('porish_fonts');
        } else {
            localStorage.setItem("porish_fonts", this_font);
        }

    });

    // get template from local storage
    if (localStorage.getItem("porish_fonts") !== null) {
        $template_fonts.children('div[data-site-font=' + localStorage.getItem("porish_fonts") + ']').click();
    }

    var fonts = localStorage.getItem("porish_fonts");


    /***************************************** template Section ***********************************/

    $template_color.children('div').on('click',function (e) {
        e.preventDefault();
        var $this = jQuery(this),
                this_template = $this.attr('data-dark-color');

        $template_color.children('div').removeClass('active_color');
        jQuery(this).addClass('active_color');
        var porishtemplate = localStorage.getItem("porish_template");
        if (this_template !== null && this_template !== "") {

            if (porishtemplate == null) {
                if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="assets/css/colors/dark/' + template_color + '-' + this_template + '.css">');
                } else {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="../assets/css/colors/dark/' + template_color + '-'  + this_template + '.css">');
                }
            } else if (jQuery("#site-dark-color").length == 0) {
                if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="assets/css/colors/dark/' + porishtemplate + '-' + this_template + '.css">');
                } else {
                    jQuery('#site-color').after('<link id="site-dark-color" rel="stylesheet" href="../assets/css/colors/dark/' + porishtemplate + '-' + this_template + '.css">');
                }
            } else {
                if (pathArray == "dashboard_v1.html" || pathArray == "dashboard_v2.html" || pathArray == "dashboard_v3.html" || pathArray == "" || pathArray == "dashboard_left_menu.html" || pathArray == "dashboard_left_top.html") {
                    jQuery('#site-dark-color').attr('href', 'assets/css/colors/dark/' + porishtemplate + '-' + this_template + '.css');
                } else {
                    jQuery('#site-dark-color').attr('href', '../assets/css/colors/dark/' + porishtemplate + '-' + this_template + '.css');
                }
            }
        } else {
            jQuery('#site-dark-color').remove();
        }
        if (this_template == null || this_template == "") {
            localStorage.removeItem('porish-dark-template');
        } else {
            localStorage.setItem("porish-dark-template", this_template);
        }

    });

    // get template from local storage
    if (localStorage.getItem("porish-dark-template") !== null && localStorage.getItem("porish-dark-template") !== "") {
        $template_color.children('div[data-dark-color=' + localStorage.getItem("porish-dark-template") + ']').click();
    }


    /***************************   texture background **********************/

    $template_texture.children('div').on('click',function (e) {
        e.preventDefault();
        var $this = jQuery(this),
                this_template = $this.attr('data-image-bg');

        $template_texture.children('div').removeClass('active_texture');
        jQuery(this).addClass('active_texture');

        if (jQuery(".checkbox-texture").prop("checked") == true) {

            $body
                    .removeClass('texture1 texture2 texture3 texture4 texture5 texture6 texture7 texture8 texture9 texture10 texture11')
                    .addClass(this_template);
        }
        if (this_template === "") {
            localStorage.removeItem('porish_texture');
        } else {
            localStorage.setItem("porish_texture", this_template);
        }

    });

    // get template from local storage
    if (localStorage.getItem("porish_texture") !== null) {
        $template_texture.children('div[data-image-bg=' + localStorage.getItem("porish_texture") + ']').click();
    }

    $template_checkbox.children('.switchery').on('click',function () {
        if (jQuery(".checkbox-texture").prop("checked") == true) {
            localStorage.setItem("texture_image", "data-site-texture");
            var value = localStorage.getItem("porish_texture");
            $html.addClass('texture-bg');
            $html.removeClass('texture-disable');
            $body.addClass(value);
        } else {
            $html.addClass('texture-disable');
            $html.removeClass('texture-bg');
            $body.removeClass('texture1 texture2 texture3 texture4 texture5 texture6 texture7 texture8 texture9 texture10 texture11');
            localStorage.removeItem("texture_image");
        }
    });

    // get template from local storage
    if (localStorage.getItem("texture_image") !== null) {
        $html.removeClass('texture-disable');
        jQuery(".checkbox-texture").prop("checked", true);
        var value = localStorage.getItem("porish_texture");
        $html.addClass('texture-bg');
        $body.addClass(value);
        jQuery('[data-site-texture=' + localStorage.getItem("texture_image") + ']').click();
        jQuery(".switchery").css({"box-shadow": "rgb(54, 169, 225) 0px 0px 0px 11px inset", "border-color": "rgb(54, 169, 225)", "transition": "border 0.4s, box-shadow 0.4s, background-color 1.2s", "background-color": "rgb(54, 169, 225)"});
        jQuery(".switchery small").css("left", "13px");
    } else {
        $html.addClass('texture-disable');
    }

    /**********************************************************************/


    jQuery('.language-box li').on('click',function (e) {
        jQuery('.language-box li').removeClass('active');
        var $country = jQuery(".flag-country", this).data('country');
        jQuery('.flag-avtar span').removeClass("flag-icon-us flag-icon-au flag-icon-in flag-icon-pt flag-icon-de").addClass("flag-icon-" + $country + "");
        jQuery(this).addClass('active');
    });
}(document, window, jQuery);
