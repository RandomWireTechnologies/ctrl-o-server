!function (document, window, $) {
    "use strict",
            /*********Basic Sparkline***************/
            $(".basic-pie-chart").sparkline([5, 3, 4], {
        type: "pie",
        height: "162px",
        sliceColors: ['#36a9e1', '#4fbcf1', '#71ccf9']
    }),
            $(".basic-line-chart").sparkline([1, 4, 3, 3, 2, 5, 6, 3], {
        type: "line",
        height: "162px",
        width: "200px",
        normalRangeMin: 0,
        spotRadius: 2,
        spotColor: ["red"],
        highlightSpotColor: ["red"],
        lineColor: ["red"],
        highlightLineColor: ["red"],
        fillColor: ['#fdc2c8']
        
    }),
            $(".basic-bar-chart").sparkline([5, 4, 7, 3, 1, 5, 9, 3, 8, 2], {
        type: "bar",
        height: "162px",
        barWidth: 10,
        barSpacing: 6,
        barColor: ['#36a9e1'],
        negBarColor: ['#36a9e1']
    }),
            $(".basic-compositebar-chart").sparkline("html", {
        type: "bar",
        height: "162px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#bdbdbd']
    }),
            $(".basic-compositebar-chart").sparkline([2, 4, 5, 5, 7, 5, 4, 5, 3, 1], {
        composite: !0,
        fillColor: !1,
        lineColor: ['#36a9e1']
    }),
            $(".basic-compositebar-chart").sparkline([1, 5, 6, 3, 3, 4, 7, 2, 4, 7], {
        composite: !0,
        fillColor: !1,
        lineColor: ['red']
    }),
            /*********types Sparkline***************/
            $(".sparkline-line").sparkline("html", {
        height: "50px",
        width: "200px",
        lineColor: ['red'],
        fillColor: ['#fdc2c8']
    }),
            $(".sparkline-bar").sparkline("html", {
        type: "bar",
        height: "50px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#36a9e1'],
        negBarColor: ['red'],
        stackedBarColor: ['#36a9e1', "red"]
    }),
            $(".sparkline-compositeline").sparkline("html", {
        height: "50px",
        width: "200px",
        fillColor: !1,
        lineColor: ['#36a9e1'],
        spotColor: ['#5cb85c'],
        minSpotColor: ['#36a9e1'],
        maxSpotColor: ['#5cb85c'],
        changeRangeMin: 0,
        chartRangeMax: 10
    }),
            $(".sparkline-compositeline").sparkline([3, 2, 4, 5, 7, 6, 7, 5, 5, 3, 6, 2, 8, 4, 2, 3, 5, 6], {
        composite: !0,
        fillColor: !1,
        height: "50px",
        width: "200px",
        lineColor: ['red'],
        spotColor: ['#5cb85c'],
        minSpotColor: ['#36a9e1'],
        maxSpotColor: ['#5cb85c'],
        changeRangeMin: 0,
        chartRangeMax: 10
    }),
            $(".sparkline-inlinerange").sparkline("html", {
        fillColor: !1,
        height: "50px",
        width: "200px",
        lineColor: ['red'],
        spotColor: ['#36a9e1'],
        minSpotColor: ['#36a9e1'],
        maxSpotColor: ['#36a9e1'],
        normalRangeColor: ['#bdbdbd'],
        normalRangeMin: -1,
        normalRangeMax: 8
    }),
            $(".sparkline-compositebar").sparkline("html", {
        type: "bar",
        height: "50px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#36a9e1']
    }),
            $(".sparkline-compositebar").sparkline([4, 2, 4, 8, 5, 5, 6, 8, 9, 9, 4, 3, 7, 2, 5, 4, 4, 6, 7, 9], {
        composite: !0,
        fillColor: !1,
        lineColor: ['red'],
        spotColor: ['#36a9e1']
    }),
            $(".sparkline-discrete1").sparkline("html", {
        type: "discrete",
        height: "50px",
        lineColor: ['#36a9e1'],
        xwidth: 36
    }),
            $(".sparkline-discrete2").sparkline("html", {
        type: "discrete",
        height: "50px",
        lineColor: ['#36a9e1'],
        thresholdColor: ['red'],
        thresholdValue: 4
    }),
            $(".sparkline-bullet").sparkline("html", {
        type: "bullet",
        targetColor: ['red'],
        targetWidth: "2",
        performanceColor: ['#36a9e1'],
        rangeColors: ['#abdaf1', '#8fceec', '#65c5f3']
    }),
            $(".sparkline-linecustom").sparkline("html", {
        height: "50px",
        width: "200px",
        lineColor: ['red'],
        fillColor: ['#bdbdbd'],
        minSpotColor: !1,
        maxSpotColor: !1,
        spotColor: ['green'],
        spotRadius: 2
    }),
            $(".sparkline-tristate").sparkline("html", {
        type: "tristate",
        height: "50px",
        barWidth: 10,
        barSpacing: 5,
        posBarColor: ['#36a9e1'],
        negBarColor: ['#bdbdbd'],
        zeroBarColor: ['red'],
    }),
            $(".sparkline-tristatecols").sparkline("html", {
        type: "tristate",
        height: "50px",
        barWidth: 10,
        barSpacing: 5,
        posBarColor: ['#36a9e1'],
        negBarColor: ['#bdbdbd'],
        zeroBarColor: ['red'],
        colorMap: {
            "-4": ['red'],
            "-2": ['#36a9e1'],
            2: ['#bdbdbd']
        }
    }),
            $(".sparkline-boxplot").sparkline("html", {
        type: "box",
        height: "50px",
        width: "100px",
        lineColor: ["#36a9e1"],
        boxLineColor: ["#36a9e1"],
        boxFillColor: ["#90ceec"],
        whiskerColor: ["grey"],
        medianColor: ["red"]
    }),
            $(".sparkline-boxplotraw").sparkline([1, 3, 5, 8, 10, 15, 18], {
        type: "box",
        height: "50px",
        width: "150px",
        raw: !0,
        showOutliers: !0,
        target: 6,
        lineColor: ["#36a9e1"],
        boxLineColor: ["#36a9e1"],
        boxFillColor: ["#90ceec"],
        whiskerColor: ["grey"],
        outlierLineColor: ["grey"],
        outlierFillColor: ["grey"],
        medianColor: ["red"],
        targetColor: ["green"]
    }),
            $(".sparkline-pie").sparkline("html", {
        type: "pie",
        height: "50px",
        sliceColors: ['#36a9e1', '#4fbcf1', '#71ccf9']
    }),
            $(".sparkline-pie-1").sparkline("html", {
        type: "pie",
        height: "50px",
        sliceColors: ["#36a9e1", "grey"]
    })
}(document, window, jQuery);