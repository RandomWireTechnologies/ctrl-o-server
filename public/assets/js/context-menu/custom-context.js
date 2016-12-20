!function (document, window, $) {
    "use strict",
            function () {
                $("#defaultcontext").contextmenu({
                    target: "#contextMenu1",
                    before: function (e) {
                        return e.preventDefault(), "SPAN" == e.target.tagName ? (e.preventDefault(), this.closemenu(), !1) : (this.getMenu().find("li").eq(4).find("a").html("Separated link"), !0)
                    }
                })
            }(),
            function () {
                $("#contextaction").contextmenu({
                    target: "#contextmenu3",
                    onItem: function (context, e) {
                        alert($.trim($(e.target).text()))
                    }
                })
            }()
}(document, window, jQuery);