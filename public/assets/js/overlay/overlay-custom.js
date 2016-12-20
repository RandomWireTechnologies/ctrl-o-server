!function (window, document, $) {
    "use strict";
    if (Modernizr.touch) {
        $(".close-overlay").removeClass("hidden");
        $(".overlay").on('click',function (e) {
            if (!$(this).hasClass("hover")) {
                $(this).addClass("hover");
            }
        });
        $(".close-overlay").on('click',function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($(this).closest(".overlay").hasClass("hover")) {
                $(this).closest(".overlay").removeClass("hover");
            }
        });
    } else {
        $(".overlay").mouseenter(function () {
            $(this).addClass("hover");
        })
                .mouseleave(function () {
                    $(this).removeClass("hover");
                });
    }
}(window, document, jQuery);