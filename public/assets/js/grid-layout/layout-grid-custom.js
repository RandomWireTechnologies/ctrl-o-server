$(function () {
    "use strict";
    $('.grid-stack').gridstack({
        width: 12,
        cellHeight: 80,
        verticalMargin: 10,
        alwaysShowResizeHandle: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
        resizable: {
            handles: 'e, se, s, sw, w'
        }
    });

});