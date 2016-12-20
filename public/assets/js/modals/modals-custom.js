!function (window, document, $) {
    "use strict";

    $(".bg-info-modal").on('click',function () {

        $(".bg-green-modal").removeClass("bg-green-check");
        $(".bg-red-modal").removeClass("red");
        $(".bg-orange-modal").removeClass("orange");
        $(".bg-cyan-modal").removeClass("cyan");
        $(".bg-info-modal").addClass("bg-info-check");

    });

    $(".bg-green-modal").on('click',function () {
        $(".bg-info-modal").removeClass("bg-info-check");
        $(".bg-green-modal").addClass("bg-green-check");
        $(".bg-red-modal").removeClass("red");
        $(".bg-orange-modal").removeClass("orange");
        $(".bg-cyan-modal").removeClass("cyan");

    });

    $(".bg-red-modal").on('click',function () {

        $(".bg-info-modal").removeClass("bg-info-check");
        $(".bg-green-modal").removeClass("bg-green-check");
        $(".bg-red-modal").addClass("red");
        $(".bg-orange-modal").removeClass("orange");
        $(".bg-cyan-modal").removeClass("cyan");

    });

    $(".bg-orange-modal").on('click',function () {

        $(".bg-info-modal").removeClass("bg-info-check");
        $(".bg-green-modal").removeClass("bg-green-check");
        $(".bg-red-modal").removeClass("red");
        $(".bg-orange-modal").addClass("orange");
        $(".bg-cyan-modal").removeClass("cyan");

    });

    $(".bg-cyan-modal").on('click',function () {

        $(".bg-info-modal").removeClass("bg-info-check");
        $(".bg-green-modal").removeClass("bg-green-check");
        $(".bg-red-modal").removeClass("red");
        $(".bg-orange-modal").removeClass("orange");
        $(".bg-cyan-modal").addClass("cyan");

    });

}(window, document, jQuery);