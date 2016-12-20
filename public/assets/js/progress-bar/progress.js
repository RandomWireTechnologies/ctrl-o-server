!function (document, window, $) {
    "use strict";
    $('.progress').asProgress({
        'namespace': 'progress'
    });
    $('#button_start').on('click', function () {
        $('.progress').asProgress('start');
    });
    $('#button_finish').on('click', function () {
        $('.progress').asProgress('finish');
    });
    $('#button_go').on('click', function () {
        $('.progress').asProgress('go', 50);
    });
    $('#button_go_percentage').on('click', function () {
        $('.progress').asProgress('go', '50%');
    });
    $('#button_stop').on('click', function () {
        $('.progress').asProgress('stop');
    });
    $('#button_reset').on('click', function () {
        $('.progress').asProgress('reset');
    });

    $('.pie_progress').asPieProgress({
        namespace: 'pie_progress'
    });

    // Example with grater loading time - loads longer
    $('.pie_progress--slow').asPieProgress({
        namespace: 'pie_progress',
        goal: 1000,
        min: 0,
        max: 1000,
        speed: 200,
        easing: 'linear'
    });

    // Example with grater loading time - loads longer
    $('.pie_progress--countdown').asPieProgress({
        namespace: 'pie_progress',
        easing: 'linear',
        first: 120,
        max: 120,
        goal: 0,
        speed: 1200, // 120 s * 1000 ms per s / 100
        numberCallback: function (n) {
            var minutes = Math.floor(this.now / 60);
            var seconds = this.now % 60;
            if (seconds < 10) {
                seconds = '0' + seconds;
            }
            return minutes + ': ' + seconds;
        }
    });
    $('#button_start2').on('click', function () {
        $('.pie_progress').asPieProgress('start');
    });
    $('#button_finish2').on('click', function () {
        $('.pie_progress').asPieProgress('finish');
    });
    $('#button_go2').on('click', function () {
        $('.pie_progress').asPieProgress('go', 50);
    });
    $('#button_go_percentage2').on('click', function () {
        $('.pie_progress').asPieProgress('go', '50%');
    });
    $('#button_stop2').on('click', function () {
        $('.pie_progress').asPieProgress('stop');
    });
    $('#button_reset2').on('click', function () {
        $('.pie_progress').asPieProgress('reset');
    });


}(document, window, jQuery);