
/*********Basic Sparkline***************/
!function (document, window, $) {
    "use strict";

    $(".sparkline-bar").sparkline("html", {
        type: "bar",
        height: "25px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#fff'],
        negBarColor: ['#fff'],
        stackedBarColor: ['#36a9e1', "red"]
    }),
            $(".sparkline-line").sparkline("html", {
        height: "25px",
        width: $('.sparkline-line').width(),
        lineColor: ['#fff'],
        fillColor: ['#fff'],
        resize: true
    }),
            $(".sparkline-line2").sparkline("html", {
        height: "56px",
        width: $('.sparkline-line2').width(),
        lineColor: ['#fff'],
        fillColor: ['#e53935']
    }),
            $(".sparkline-bar2").sparkline("html", {
        type: "bar",
        height: "56px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#fff'],
        negBarColor: ['#fff'],
        stackedBarColor: ['#36a9e1', "red"]
    }),
            $(".sparkline-bar3").sparkline("html", {
        type: "bar",
        height: "86px",
        barWidth: 20,
        barSpacing: 5,
        barColor: ['#36a9e1'],
        negBarColor: ['#36a9e1'],
        stackedBarColor: ['#36a9e1', "red"]
    }),
            $(".sparkline-line3").sparkline("html", {
        height: "86px",
        width: $('.sparkline-line3').width(),
        lineColor: ['red'],
        fillColor: ['#fdf0f0']
    }),
            $(".sparkline-bar4").sparkline("html", {
        type: "bar",
        height: "110px",
        barWidth: 10,
        barSpacing: 5,
        barColor: ['#fff'],
        negBarColor: ['#fff'],
        stackedBarColor: ['#fff', "fff"]
    }),
            $(".sparkline-bar5").sparkline("html", {
        type: "bar",
        height: "86px",
        barWidth: 20,
        barSpacing: 5,
        barColor: ['#36a9e1'],
        negBarColor: ['#36a9e1'],
        stackedBarColor: ['#36a9e1', "red"]
    })

}(document, window, jQuery);

/***********Peity Chart*************/
$(function () {
    $('.donut').peity('donut')
    $(".donut-info").peity("donut", {
        fill: ["#36a9e1", "#e53935"],
        innerRadius: 75,
        radius: 93
    })
    $(".donut-info2").peity("donut", {
        fill: ["#66bb6a", "#36a9e1"],
        innerRadius: 75,
        radius: 93
    })
})

/********Echart***********/
if ($("#basic-area").length) {
    var myChart = echarts.init(document.getElementById('basic-area'));
    myChart.setOption({
        tooltip: {
            show: false,
            trigger: 'axis'
        },
        resize: true,
        legend: {
            show: false,
            data: ['Intention', 'Pre order', 'Transactions']
        },
        toolbox: {
            show: false,
            feature: {
                show: false,
                mark: {show: false},
                dataView: {show: false, readOnly: false},
//            magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//            restore: {show: true},
                saveAsImage: {show: false}
            }
        },
        calculable: false,
        xAxis: [
            {
                show: false,
                type: 'category',
                boundaryGap: false,
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
            }
        ],
        yAxis: [
            {
                show: false,
                type: 'value'
            }
        ],
        series: [
            {
                show: false,
                name: 'Transactions',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {show: false, type: 'default'}}},
                data: [10, 12, 21, 54, 260, 830, 710]
            },
            {
                show: false,
                name: 'Pre order',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {show: false, type: 'default'}}},
                data: [30, 182, 434, 791, 390, 30, 10]
            },
            {
                show: false,
                name: 'Intention',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {show: false, type: 'default'}}},
                data: [1220, 1132, 601, 234, 120, 90, 20]
            }
        ]

    });
}
if ($("#change-waterfall").length) {

    var myChart2 = echarts.init(document.getElementById('change-waterfall'));
    myChart2.setOption({
        tooltip: {
            show: false,
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            formatter: function (params) {
                var tar;
                if (params[1].value != '-') {
                    tar = params[1];
                } else {
                    tar = params[0];
                }
                return tar.name + '<br/>' + tar.seriesName + ' : ' + tar.value;
            }
        },
        resize: true,
        legend: {
            show: false,
            data: ['expenditure', 'income']
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
//            dataView: {show: true, readOnly: false},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        xAxis: [
            {
                type: 'category',
                splitLine: {show: false},
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: 'black'
                    }
                },
                data: function () {
                    var list = [];
                    for (var i = 1; i <= 11; i++) {
                        list.push('' + i + 'day');
                    }
                    return list;
                }()
            }
        ],
        yAxis: [
            {
                type: 'value',
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: 'black'
                    }
                },
            }
        ],
        series: [
            {
                name: 'Aid',
                type: 'bar',
                stack: 'Total',
                itemStyle: {
                    normal: {
                        barBorderColor: 'rgba(0,0,0,0)',
                        color: 'rgba(0,0,0,0)'
                    },
                    emphasis: {
                        barBorderColor: 'rgba(0,0,0,0)',
                        color: 'rgba(0,0,0,0)'
                    }
                },
                data: [0, '-', 1245, 1530, 1376, 1376, 1511, 1689, 1856, 1495, 1292]
            },
            {
                name: 'income',
                type: 'bar',
                stack: 'Total',
                itemStyle: {normal: {label: {show: true, position: 'top'}}},
                data: ['-', 1460, 393, '-', '-', 135, 178, 286, '-', '-', '-']
            },
            {
                name: 'expenditure',
                type: 'bar',
                stack: 'Total',
                itemStyle: {normal: {label: {show: true, position: 'bottom'}}},
                data: ['-', '-', '-', 108, 154, '-', '-', '-', 119, 361, 203]
            }
        ]

    });
}
if ($("#nested-pie").length) {
    var myChart4 = echarts.init(document.getElementById('nested-pie'));
    myChart4.setOption({
        tooltip: {
            show: false,
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            show: false,
//        y: 'bottom',
            data: ['R1', 'R2', 'R3', 'R4', 'R5', 'R6']
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
                dataView: {show: true, readOnly: false},
//            magicType: {
//                show: true,
//                type: ['pie', 'funnel']
//            },
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        calculable: true,
        series: [
            {
                name: 'Radius',
                type: 'pie',
                radius: [20, 94],
//            center: ['25%', 200],
                roseType: 'radius',
                width: '40%', // for funnel
                max: 40, // for funnel
                itemStyle: {
                    normal: {
                        label: {
                            show: false
                        },
                        labelLine: {
                            show: false
                        }
                    },
                    emphasis: {
                        label: {
                            show: true
                        },
                        labelLine: {
                            show: true
                        }
                    }
                },
                data: [
                    {value: 10, name: 'R1'},
                    {value: 5, name: 'R2'},
                    {value: 15, name: 'R3'},
                    {value: 25, name: 'R4'},
                    {value: 20, name: 'R5'},
                    {value: 35, name: 'R6'},
                    {value: 30, name: 'R7'},
                    {value: 40, name: 'R8'}
                ]
            }

        ]

    });
}
if ($("#non-ribbon-chord").length) {
    var myChart6 = echarts.init(document.getElementById('non-ribbon-chord'));
    myChart6.setOption({
        tooltip: {
            trigger: 'item',
            formatter: function (params) {
                if (params.indicator2) {
                    return params.indicator2 + ' ' + params.name + ' ' + params.indicator;
                } else {
                    return params.name
                }
            }
        },
        toolbox: {
            show: true,
            feature: {
//            restore: {show: true},
//            magicType: {show: true, type: ['force', 'chord']},
                saveAsImage: {show: true}
            }
        },
        legend: {
            x: 'left',
            show: false,
            data: ['AA', 'BB', 'CC']
        },
        series: [
            {
                name: 'German league team effectiveness',
                type: 'chord',
                sort: 'ascending',
                sortSub: 'descending',
                ribbonType: false,
                radius: '60%',
                itemStyle: {
                    normal: {
                        label: {
                            rotate: true
                        }
                    }
                },
                minRadius: 7,
                maxRadius: 20,
                nodes: [
                    {name: 'AA 1'},
                    {name: 'AA 2'},
                    {name: 'AA 3'},
                    {name: 'BB 1'},
                    {name: 'BB 2'},
                    {name: 'BB 3'},
                    {name: 'BB 4'},
                    {name: 'BB 5'},
                    {name: 'BB 6', symbol: 'star'},
                    {name: 'BB 7'},
                    {name: 'CC 1'},
                    {name: 'CC 2'},
                    {name: 'CC 3'},
                    {name: 'CC 4'},
                    {name: 'AA'},
                    {name: 'BB'},
                    {name: 'CC'}
                ],
                links: [
                    {source: 'AA', target: 'AA 1', weight: 1, name: 'Effect'},
                    {source: 'AA', target: 'AA 2', weight: 1, name: 'Effect'},
                    {source: 'AA', target: 'AA 3', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 1', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 2', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 3', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 4', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 5', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 6', weight: 1, name: 'Effect'},
                    {source: 'BB', target: 'BB 7', weight: 1, name: 'Effect'},
                    {source: 'CC', target: 'CC 1', weight: 1, name: 'Effect'},
                    {source: 'CC', target: 'CC 2', weight: 1, name: 'Effect'},
                    {source: 'CC', target: 'CC 3', weight: 1, name: 'Effect'},
                    {source: 'CC', target: 'CC 4', weight: 1, name: 'Effect'}
                ]
            }
        ]
    });
}
/*********Flot*************/
$(function () {
    var data = [],
            totalPoints = 300;
    function getRandomData() {
        if (data.length > 0)
            data = data.slice(1);

        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;

            if (y < 0) {
                y = 0;
            } else if (y > 100) {
                y = 100;
            }
            data.push(y);
        }



        var res = [];
        for (var i = 0; i < data.length; ++i) {
            res.push([i, data[i]])
        }

        return res;
    }



    var updateInterval = 30;
    $("#updateInterval").val(updateInterval).change(function () {
        var v = $(this).val();
        if (v && !isNaN(+v)) {
            updateInterval = +v;
            if (updateInterval < 1) {
                updateInterval = 1;
            } else if (updateInterval > 2000) {
                updateInterval = 2000;
            }
            $(this).val("" + updateInterval);
        }
    });

    var plot = $.plot("#realtime-flot", [getRandomData()], {
        yaxis: {
            show: false,
            min: 0,
            max: 100
        },
        xaxis: {
            show: false
        },
        colors: ["#fff"],
        grid: {
            borderWidth: 0
        }
    });

    function update() {

        plot.setData([getRandomData()]);

        plot.draw();
        setTimeout(update, updateInterval);
    }

    update();

});

/*********c3 chart****************/

window.addEventListener('load', function () {

    var chart4 = c3.generate({
        bindto: "#pageCombinationchart", data: {
            columns: [
                                    ['data1', 30, 20, 50, 40, 60, 50],
                                    ['data2', 200, 130, 90, 240, 130, 220],
                                    ['data3', 300, 200, 160, 400, 250, 250],
                                    ['data4', 200, 130, 90, 240, 130, 220],
                                    ['data5', 130, 120, 150, 140, 160, 150],
                                    ['data6', 90, 70, 20, 50, 60, 120],
                                ],
                                type: 'bar',
                                types: {
                                    data3: 'spline',
                                    data4: 'line',
                                    data6: 'area',
                                },
                                groups: [
                                    ['data1', 'data2']
                                ],
                                colors: {
                                    data1: '#36a9e1',
                                    data2: '#2c9079',
                                    data3: '#fb8c00',
                                    data4: '#bf360c',
                                    data5: '#c2185b',
                                    data6: '#9e9e9e'
                                }
        },
        grid: {
            y: {
                lines: [{value: 0}]
            }
        }
    });
    var addEvent = function (elem, type, eventHandle) {
        if (elem == null || typeof (elem) == 'undefined')
            return;
        if (elem.addEventListener) {
            elem.addEventListener(type, eventHandle, false);
        } else if (elem.attachEvent) {
            elem.attachEvent("on" + type, eventHandle);
        } else {
            elem["on" + type] = eventHandle;
        }
    };

    function adjustSize() {
        chart4.resize();

    }
    addEvent(window, "resize", adjustSize);
}, false);

window.addEventListener('load', function () {

    var chart = c3.generate({
        bindto: "#pageStackedbar", data: {
            columns: [
                ['data1', -30, 200, 200, 400, -150, 250],
                ['data2', 130, 100, -100, 200, -150, 50],
                ['data3', -230, 200, 200, -300, 250, 250]
            ],
            type: 'bar',
            groups: [
                ['data1', 'data2']
            ],
            height: 65,
            colors: {
                data1: '#36a9e1',
                data2: '#2c9079',
                data3: '#fb8c00'
            }
        },
        grid: {
            y: {
                lines: [{value: 0}]
            }
        }
    });
    var addEvent = function (elem, type, eventHandle) {
        if (elem == null || typeof (elem) == 'undefined')
            return;
        if (elem.addEventListener) {
            elem.addEventListener(type, eventHandle, false);
        } else if (elem.attachEvent) {
            elem.attachEvent("on" + type, eventHandle);
        } else {
            elem["on" + type] = eventHandle;
        }
    };

    function adjustSize() {
        chart.resize();

    }
    addEvent(window, "resize", adjustSize);
}, false);


window.addEventListener('load', function () {

    var chart2 = c3.generate({
        bindto: "#pageSimpleline", data: {
            x: 'x',
            columns: [
                ['x', 30, 50, 100, 230, 280, 310],
                ['data1', 30, 200, 100, 400, 150, 250],
                ['data2', 130, 300, 200, 300, 250, 450]
            ],
            colors: {
                data1: '#36a9e1',
                data2: '#bf360c'
            }
        }
    });
    var addEvent = function (elem, type, eventHandle) {
        if (elem == null || typeof (elem) == 'undefined')
            return;
        if (elem.addEventListener) {
            elem.addEventListener(type, eventHandle, false);
        } else if (elem.attachEvent) {
            elem.attachEvent("on" + type, eventHandle);
        } else {
            elem["on" + type] = eventHandle;
        }
    };

    function adjustSize() {
        chart2.resize();

    }
    addEvent(window, "resize", adjustSize);
}, false);


window.addEventListener('load', function () {

    var chart3 = c3.generate({
        bindto: "#pageareachart", data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 0],
                ['data2', 130, 100, 140, 200, 150, 50]
            ],
            types: {
                data1: 'area',
                data2: 'area-spline'
            },
            colors: {
                data1: '#36a9e1',
                data2: '#bf360c'
            }
        }
    });

    var addEvent = function (elem, type, eventHandle) {
        if (elem == null || typeof (elem) == 'undefined')
            return;
        if (elem.addEventListener) {
            elem.addEventListener(type, eventHandle, false);
        } else if (elem.attachEvent) {
            elem.attachEvent("on" + type, eventHandle);
        } else {
            elem["on" + type] = eventHandle;
        }
    };

    function adjustSize() {
        chart3.resize();

    }
    addEvent(window, "resize", adjustSize);
}, false);


window.onresize = function () {
    myChart.resize();
    myChart2.resize();
    myChart4.resize();
    myChart6.resize();
}