!function (window, document, $) {
    "use strict";
    if ("undefined" != typeof toastr) {
        jQuery(document).on("click", '[data-plugin="toastr"]', function (e) {
            e.preventDefault();
            var jQuerythis = jQuery(this),
                    options = jQuery.extend(!0, {}, jQuerythis.data()),
                    message = options.message || "",
                    type = options.type || "info",
                    title = options.title || void 0;
            switch (type) {
                case "success":
                    toastr.success(message, title, options);
                    break;
                case "warning":
                    toastr.warning(message, title, options);
                    break;
                case "error":
                    toastr.error(message, title, options);
                    break;
                case "info":
                    toastr.info(message, title, options);
                    break;
                default:
                    toastr.info(message, title, options)
            }
        })
    }
}(window, document, jQuery);