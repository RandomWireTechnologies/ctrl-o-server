!function (window, document, $) {
    "use strict";

    var $window = $(window),
            $html = $('html');

    $("#selectall").on('click', function () {
        $('.fab').toggleClass('active');
        $(".differentmenu").slideToggle();
    });

    $(".fab").on('click', function () {
        $(this).toggleClass('active');
        $(".differentmenu").slideToggle();
    });

    $('input:checkbox[id^="home_"]').on("change", function ()
    {
        if ($(this).is(":checked")) {
            $(this).parents().eq(2).css("background-color", "inherit");
            var a = $('input:checkbox[id^="home_"]');
            if ([a.length] == a.filter(":checked").length)
            {
                selectall.checked = true;
                $('.fab').toggleClass('active');
                $(".differentmenu").slideToggle();
            }
        } else
        {
            $("#selectall")[0].checked = false;
            $(this).parents().eq(2).css("background-color", "inherit");
        }
    });

    $('#selectall').on("change", function () {
        if ($(this).is(":checked")) {
            $('.mail-inbox').css("background-color", "inherit");

        } else {
            $('.mail-inbox').css("background-color", "inherit");
        }
    });
}(window, document, jQuery);

function toggle(source) {

    $('.mail-inbox').css("background-color", "inherit");
    checkboxes = document.getElementsByName('foo');
    for (var i = 0, n = checkboxes.length; i < n; i++)
    {
        checkboxes[i].checked = source.checked;
    }
}




