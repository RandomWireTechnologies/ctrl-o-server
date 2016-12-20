!function (window, document, $) {
    "use strict";
    var editor1 = ace.edit("editor1");
    editor1.setTheme("ace/theme/tomorrow");
    editor1.session.setMode("ace/mode/html");
    editor1.setAutoScrollEditorIntoView(true);
    editor1.setShowPrintMargin(false);

    editor1.setOption("maxLines", 30);

    var editor2 = ace.edit("editor2");
    editor2.setTheme("ace/theme/tomorrow_night_blue");
    editor2.session.setMode("ace/mode/javascript");
    editor2.renderer.setScrollMargin(10, 10);
    editor2.setOption("minLines", 30);
    editor2.setOption("maxLines", 50);
    editor2.setShowPrintMargin(false);

    var editor3 = ace.edit("editor3");
    editor3.setTheme("ace/theme/tomorrow");
    editor3.session.setMode("ace/mode/html");
    editor3.setAutoScrollEditorIntoView(true);
    editor3.setOption("minLines", 30);
    editor3.setOption("maxLines", 50);
    editor3.setShowPrintMargin(false);

    // trigger extension

    var editor = ace.edit("editor");
    editor.session.setMode("ace/mode/html");
    editor.setTheme("ace/theme/tomorrow");
    editor.setOption("minLines", 5);
    editor.setOption("maxLines", 10);
    editor.setShowPrintMargin(false);
    // enable autocompletion and snippets
    editor.setOptions({
        enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: false
    });
}(window, document, jQuery);