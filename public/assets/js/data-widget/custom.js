$(function () {
    "use strict";
    sortable('.js-sortable', {
        forcePlaceholderSize: true,
        placeholderClass: 'p1 mb1 bg-navy border border-yellow'
    });
    sortable('.sortable-with-handle', {
        forcePlaceholderSize: true,
        placeholderClass: 'p1 mb1 bg-navy border border-yellow'
    });
    sortable('.list-task', {
        forcePlaceholderSize: true,
        placeholderClass: 'p1 mb1 bg-navy border border-yellow'
    });

    var updateOutput = function (e)
    {
        var list = e.length ? e : $(e.target),
                output = list.data('output');
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    }).on('change', updateOutput);
});