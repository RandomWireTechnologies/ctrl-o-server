!function (window, document, $) {
    "use strict";
    $('#editor-triger-init').click(function () {
        $("#target-editor").markdown({
            savable: true,
            onShow: function (e) {
                alert("Showing "
                        + e.$textarea.prop("tagName").toLowerCase()
                        + "#"
                        + e.$textarea.attr("id")
                        + " as Markdown Editor...");
            },
            onPreview: function (e) {
                var previewContent;

                if (e.isDirty()) {
                    var originalContent = e.getContent();

                    previewContent = "Prepended text here..."
                            + "\n"
                            + originalContent
                            + "\n"
                            + "Apended text here...";
                } else {
                    previewContent = "Default content";
                }

                return previewContent;
            },
            onSave: function (e) {
                alert("Saving '" + e.getContent() + "'...");
            },
            onChange: function (e) {
//    console.log("Changed!");
            },
            onFocus: function (e) {

                $(e.$element).data('focused', true);
            },
            onBlur: function (e) {
                alert("Blur triggered!");
                $(e.$element).data('focused', null);
            }
        });
        $(this).hide();
        return false;
    });

    $("#target-editor-with-custom-buttons").markdown({
        additionalButtons: [
            [{
                    name: "groupCustom",
                    data: [{
                            name: "cmdBeer",
                            toggle: true, // this param only take effect if you load bootstrap.js
                            title: "Beer",
                            icon: "glyphicon glyphicon-glass",
                            callback: function (e) {
                                // Replace selection with some drinks
                                var chunk, cursor,
                                        selected = e.getSelection(), content = e.getContent(),
                                        drinks = ["Heinekken", "Budweiser",
                                            "Iron City", "Amstel Light",
                                            "Red Stripe", "Smithwicks",
                                            "Westvleteren", "Sierra Nevada",
                                            "Guinness", "Corona", "Calsberg"],
                                        index = Math.floor((Math.random() * 10) + 1);


                                // Give random drink
                                chunk = drinks[index];

                                // transform selection and set the cursor into chunked text
                                e.replaceSelection(chunk);
                                cursor = selected.start;
                                // Set the cursor
                                e.setSelection(cursor, cursor + chunk.length);
                            }
                        }]
                }]
        ]
    })
}(window, document, jQuery);