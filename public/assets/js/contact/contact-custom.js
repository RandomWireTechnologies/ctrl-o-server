!function (document, window, $) {
    jQuery(document).on("click", "[data-toggle=edit]", function () {
        "use strict";
        var $button = jQuery(this),
                $panel = $button.parents(".tab-pane"),
                $form = $panel.find(".user-info");
        $button.toggleClass("active"), $form.toggleClass("active"),
                $('.edit').html("Edit");
        $('.btn.active').html("Save");
    }), jQuery(document).on("change", ".user-info .form-group", function () {
        var $input = jQuery(this).find("input"),
                $span = jQuery(this).siblings("span");
        $span.html($input.val());
    });
}(document, window, jQuery);