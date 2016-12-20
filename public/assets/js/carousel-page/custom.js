!function (document, window, $) {
    "use strict";
    var owl = jQuery("#owl-demo");
    var owl2 = jQuery("#owl-demo2");
    var owl5 = jQuery("#owl-demo5");
    var owl7 = jQuery("#owl-demo7");
    owl.owlCarousel({
        navigation: true,
        pagination: false,
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        navigationText: [
            "<i class='arrow_carrot-left icon-white'></i>",
            "<i class='arrow_carrot-right icon-white'></i>"
        ]

    });
    owl2.owlCarousel({
        navigation: true,
        pagination: false,
        items: 3,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: [480, 2],
        autoWidth: true,
        responsiveClass: true,
        navigationText: [
            "<i class='arrow_carrot-left icon-white'></i>",
            "<i class='arrow_carrot-right icon-white'></i>"
        ]

    });
   
    owl5.owlCarousel({
        navigation: true,
        pagination: true,
        items: 1,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: false,
        itemsMobile: false,
        autoHeight: true,
        navigationText: [
            "<i class='arrow_carrot-left icon-white'></i>",
            "<i class='arrow_carrot-right icon-white'></i>"
        ]

    });
    
    jQuery('.loop').owlCarousel({
        center: true,
        items: 4,
        loop: true,
        margin: 10,
        responsive: {
            600: {
                items: 4
            }
        }
    });
    
    jQuery(".play").on("click",function () {
        owl9.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
    });
    
    jQuery("#owl-demo13").owlCarousel({
        items: 3,
        pagination: false,
        navigation: true,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: [600, 1],
        itemsMobile: false,
        navigationText: [
            "<i class='arrow_carrot-left icon-white'></i>",
            "<i class='arrow_carrot-right icon-white'></i>"
        ]

    });
    
    jQuery("#owl-demo16").owlCarousel({
        items: 3,
        pagination: true,
        navigation: true,
        itemsDesktop: false,
        itemsDesktopSmall: false,
        itemsTablet: [600, 1],
        itemsMobile: false,
        navigationText: [
            "<i class='arrow_carrot-left icon-white'></i>",
            "<i class='arrow_carrot-right icon-white'></i>"
        ]

    });

}(document, window, jQuery);