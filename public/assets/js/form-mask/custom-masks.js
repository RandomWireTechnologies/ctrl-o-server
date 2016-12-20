!function (window, document, $) {
    "use strict";

    $('#date1').formatter({
        'pattern': '{{9999}}-{{99}}-{{99}}',
        'persistent': true
    });
    $('#date2').formatter({
        'pattern': '{{99}}/{{99}}/{{9999}}',
        'persistent': true
    });
    $('#time').formatter({
        'pattern': '{{99}}: {{99}}',
        'persistent': true
    });
    $('#time-date').formatter({
        'pattern': '{{99}}: {{99}} {{99}}/{{99}}/{{9999}}',
        'persistent': true
    });
    $('#characters').formatter({
        'pattern': '{{aaaaaaaaa}}',
        'persistent': true
    });
    $('#phone').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}',
        'persistent': true
    });
    $('#phone2').formatter({
        'pattern': '+186 {{999}}-{{999}}-{{9999}}',
        'persistent': true
    });
    $('#phoneEx').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}} x{{99999}}',
        'persistent': true
    });
    $('#Creditcard').formatter({
        'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}',
        'persistent': true
    });
    $('#Productkey').formatter({
        'pattern': 'a{{*}}-{{9999}}-C{{999}}',
        'persistent': true
    });
    $('#Percent').formatter({
        'pattern': '{{99}}.{{99}}%',
        'persistent': true
    });
    $('#Currency').formatter({
        'pattern': '${{999}},{{999}},{{999}}.{{99}}',
        'persistent': true
    });
    $('#Currency2').formatter({
        'pattern': '${{999}},{{999}},{{999}}.{{99}}',
        'persistent': true
    });
}(window, document, jQuery);