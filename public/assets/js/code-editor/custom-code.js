!function (document, window, $) {
    "use strict";
    var editor3 = ace.edit("editor");
    editor3.setTheme("ace/theme/tomorrow");
    editor3.session.setMode("ace/mode/html");
    editor3.setAutoScrollEditorIntoView(true);
    editor3.setOption("minLines", 30);
    editor3.setOption("maxLines", 50);
    editor3.setShowPrintMargin(false);
}(document, window, jQuery);