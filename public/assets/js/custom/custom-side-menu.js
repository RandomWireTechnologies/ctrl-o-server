!function (document, window, $) {
    'use strict';

    var CUSTOM_SETTINGS = window.CUSTOM_SETTINGS || {};
    /*--------------------------------
     CHAT API
     --------------------------------*/
    CUSTOM_SETTINGS.navClick = function () {
        $(function () {
            var button = $('#wsnavtoggle');
            var navarea = $(".utmenucontainer");
            button.mouseup(function () {
                navarea.toggleClass("wsoffcanvasopener");
                return false;
            });
            $(".utmenu").mouseup(function () {
                return false;
            });
            $(this).mouseup(function (e) {
                navarea.removeClass("wsoffcanvasopener");
            });
        });
    };

    CUSTOM_SETTINGS.navClick();


    $(document).on("ready", function () {
        if ($(window).width() < 980) {
            $(".utmenu-submenu li a").removeClass("waves-effect waves-light");
            $(".utmenu-submenu-sub li a").removeClass("waves-effect waves-light");
            $(".utmenu-submenu-sub-sub li a").removeClass("waves-effect waves-light");
        } else {
            $(".utmenu-submenu li a").addClass("waves-effect waves-light");
            $(".utmenu-submenu-sub li a").addClass("waves-effect waves-light");
            $(".utmenu-submenu-sub-sub li a").addClass("waves-effect waves-light");
        }
        $(window).bind("resize", function () {
            if ($(window).width() < 980) {
                $(".utmenu-submenu li a").removeClass("waves-effect waves-light");
                $(".utmenu-submenu-sub li a").removeClass("waves-effect waves-light");
                $(".utmenu-submenu-sub-sub li a").removeClass("waves-effect waves-light");
            } else {
                $(".utmenu-submenu li a").addClass("waves-effect waves-light");
                $(".utmenu-submenu-sub li a").addClass("waves-effect waves-light");
                $(".utmenu-submenu-sub-sub li a").addClass("waves-effect waves-light");
            }
        });
    }).trigger('resize');

    $(window).on('load', function () {
        $('.utmenu-list li').has('ul').prepend('<span class="utmenu-click"><i class="utmenu-arrow fa fa-angle-right"></i></span>');
    });

    $(document).delegate(".wsoffcanvasopener .utmenu-list li > a, .wsoffcanvasopener .utmenu-list li > span", "click", function (e) {
        $('.utmenu-list').children('li > span').has('.ws-activearrow').removeClass("ws-activearrow");
        $(this).parent().toggleClass("active");
        $(this).parent().children('span').toggleClass('ws-activearrow');
        $(this).parent().children('ul').slideToggle('slow');
    });
}(document, window, jQuery);