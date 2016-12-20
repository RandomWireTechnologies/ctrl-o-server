!function (window, document, $) {
    "use strict";
    var selector = '.list-group-item';
    jQuery(selector).on('click', function () {
        jQuery(selector).removeClass('active');
        jQuery(this).addClass('active');
    });
    jQuery(".page-left-switch").on('click', function () {
        jQuery(".page-left").toggleClass('active');
        jQuery(".page-left-switch").toggleClass('active');
    });
    jQuery('.list-group-item').on('click',function () {
        var newSrc = jQuery("img", this).data('image');
        jQuery('.user-image-left').attr('src', newSrc);
    });
}(window, document, jQuery);
