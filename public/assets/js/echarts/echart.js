!function (window, document, $) {
    "use strict";

    var myChart = echarts.init(document.getElementById('basic-area'));
    myChart.setOption({
        tooltip: {
            trigger: 'axis'
        },
        resize: true,
        legend: {
            show: false,
            data: ['Intention', 'Pre order', 'Transactions']
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
                dataView: {show: true, readOnly: false},
//            magicType: {show: true, type: ['line', 'bar', 'stack', 'tiled']},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        calculable: true,
        xAxis: [
            {
                type: 'category',
                boundaryGap: false,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: 'black'
                    }
                },
                data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
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
                name: 'Transactions',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data: [10, 12, 21, 54, 260, 830, 710]
            },
            {
                name: 'Pre order',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data: [30, 182, 434, 791, 390, 30, 10]
            },
            {
                name: 'Intention',
                type: 'line',
                smooth: true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data: [1320, 1132, 601, 234, 120, 90, 20]
            }
        ]

    });

    var myChart2 = echarts.init(document.getElementById('change-waterfall'));
    myChart2.setOption({
        tooltip: {
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
    var myChart3 = echarts.init(document.getElementById('large-scale-scatter'));
    myChart3.setOption({
        tooltip: {
            trigger: 'axis',
            showDelay: 0,
            axisPointer: {
                show: true,
                type: 'cross',
                lineStyle: {
                    type: 'dashed',
                    width: 1
                }
            }
        },
        legend: {
            data: ['sin', 'cos'],
            textStyle: {color: 'black', fontSize: 14,}
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: false},
                dataZoom: {show: false},
//            dataView: {show: true, readOnly: false},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        xAxis: [
            {
                type: 'value',
                scale: true,
                axisLabel: {
                    show: true,
                    textStyle: {
                        color: 'black'
                    }
                },
            }
        ],
        yAxis: [
            {
                type: 'value',
                scale: true,
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
                name: 'sin',
                type: 'scatter',
                large: true,
                data: (function () {
                    var d = [];
                    var len = 10000;
                    var x = 0;
                    while (len--) {
                        x = (Math.random() * 10).toFixed(3) - 0;
                        d.push([
                            x,
                            //Math.random() * 10
                            (Math.sin(x) - x * (len % 2 ? 0.1 : -0.1) * Math.random()).toFixed(3) - 0
                        ]);
                    }
                    return d;
                })()
            },
            {
                name: 'cos',
                type: 'scatter',
                large: true,
                data: (function () {
                    var d = [];
                    var len = 10000;
                    var x = 0;
                    while (len--) {
                        x = (Math.random() * 10).toFixed(3) - 0;
                        d.push([
                            x,
                            //Math.random() * 10
                            (Math.cos(x) - x * (len % 2 ? 0.1 : -0.1) * Math.random()).toFixed(3) - 0
                        ]);
                    }
                    //console.log(d)
                    return d;
                })()
            }
        ]
    });

    var myChart4 = echarts.init(document.getElementById('nested-pie'));
    myChart4.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
            x: 'center',
            show: true,
//        y: 'bottom',
            data: ['R1', 'R2', 'R3', 'R4', 'R5', 'R6'],
            
            textStyle: {color: 'black', fontSize: 14,}
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

    var myChart5 = echarts.init(document.getElementById('basic-radar'));
    myChart5.setOption({
        tooltip: {
            trigger: 'axis',
        },
        legend: {
            x: 'center',
            data: ['Ronaldo', 'Chenko'],
            textStyle: {color: 'black', fontSize: 14,}
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
                dataView: {show: true, readOnly: false},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        calculable: true,
        polar: [
            {
                indicator: [
                    {text: '', max: 100},
                    {text: '', max: 100},
                    {text: '', max: 100},
                    {text: '', max: 100},
                    {text: '', max: 100},
                    {text: '', max: 100}
                ],
                radius: 120
            }

        ],
        series: [
            {
                name: 'Players fully live data',
                type: 'radar',
                itemStyle: {
                    normal: {
                        areaStyle: {
                            type: 'default'
                        }
                    }
                },
                data: [
                    {
                        value: [97, 42, 88, 94, 90, 86],
                        name: 'chenko'
                    },
                    {
                        value: [97, 32, 74, 95, 88, 92],
                        name: 'Ronaldo'
                    }
                ]
            }
        ]
    });

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
            show: true,
            data: ['AA', 'BB', 'CC'],
            textStyle: {color: 'black', fontSize: 14,}
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

    var myChart7 = echarts.init(document.getElementById('basic-chord'));
    myChart7.setOption({
        tooltip: {
            trigger: 'item',
            formatter: function (params) {
                if (params.indicator2) { // is edge
                    return params.value.weight;
                } else {// is node
                    return params.name
                }
            }
        },
        toolbox: {
            show: true,
            feature: {
//            restore : {show: true},
//            magicType: {show: true, type: ['force', 'chord']},
                saveAsImage: {show: true}
            }
        },
        legend: {
            x: 'left',
            data: ['group1', 'group2', 'group3', 'group4'],
            textStyle: {color: 'black', fontSize: 14,}
        },
        series: [
            {
                type: 'chord',
                sort: 'ascending',
                sortSub: 'descending',
                showScale: true,
                showScaleText: true,
                data: [
                    {name: 'group1'},
                    {name: 'group2'},
                    {name: 'group3'},
                    {name: 'group4'}
                ],
                itemStyle: {
                    normal: {
                        label: {
                            show: false
                        }
                    }
                },
                matrix: [
                    [11975, 5871, 8916, 2868],
                    [1951, 10048, 2060, 6171],
                    [8010, 16145, 8090, 8045],
                    [1013, 990, 940, 6907]
                ]
            }
        ]
    });

    var myChart8 = echarts.init(document.getElementById('multiple-angular-gauges'));
    myChart8.setOption({
        tooltip: {
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        series: [
            {
                name: 'Business Index',
                type: 'gauge',
                detail: {formatter: '{value}%'},
                title: {
                    textStyle: {
                        fontWeight: 'bolder',
                        fontStyle: 'italic',
                        color: '#000',
                        shadowColor: '#fff'
                    }
                },
                data: [{value: 50, name: 'Completion rate', color: 'black'}]
            }
        ]
    });

    var myChart9 = echarts.init(document.getElementById('basic-funnel'));
    myChart9.setOption({
        tooltip: {
            trigger: 'item',
            formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
            show: true,
            feature: {
                mark: {show: true},
                dataView: {show: true, readOnly: false},
//            restore: {show: true},
                saveAsImage: {show: true}
            }
        },
        legend: {
            show: true,
            data: ['A', 'B', 'C', 'D', 'E'],
            textStyle: {color: 'black' , fontSize: 14,}
        },
        calculable: true,
        series: [
            {
                name: 'Funnel plot',
                type: 'funnel',
                width: '40%',
                itemStyle: {
                    normal: {
                        label: {
                            position: 'right',
                            show: false
                        }
                    }
                },
                data: [
                    {value: 60, name: 'C'},
                    {value: 40, name: 'D'},
                    {value: 20, name: 'E'},
                    {value: 80, name: 'B'},
                    {value: 100, name: 'A'}
                ]
            },
            {
                name: 'pyramid',
                type: 'funnel',
                x: '50%',
                sort: 'ascending',
                itemStyle: {
                    normal: {
                        label: {
                            position: 'left',
                            show: false
                        }
                    }
                },
                data: [
                    {value: 60, name: 'C'},
                    {value: 40, name: 'D'},
                    {value: 20, name: 'E'},
                    {value: 80, name: 'B'},
                    {value: 100, name: 'A'}
                ]
            }
        ]
    });

    window.onresize = function () {
        myChart.resize();
        myChart2.resize();
        myChart3.resize();
        myChart4.resize();
        myChart5.resize();
        myChart6.resize();
        myChart7.resize();
        myChart8.resize();
        myChart9.resize();
    }
}(window, document, jQuery);