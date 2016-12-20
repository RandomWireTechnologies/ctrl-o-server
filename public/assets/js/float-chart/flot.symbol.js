/* Flot plugin that adds some extra symbols for plotting points.
 
 Copyright (c) 2007-2014 IOLA and Ole Laursen.
 Licensed under the MIT license.
 
 The symbols are accessed as strings through the standard symbol options:
 
 series: {
 points: {
 symbol: "square" // or "diamond", "triangle", "cross"
 }
 }
 
 */

!function (document, window, $) {
    'use strict';
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
            series: {
                shadowSize: 0
            },
            yaxis: {
                min: 0,
                max: 100
            },
            xaxis: {
                show: false
            }
        });

        function update() {

            plot.setData([getRandomData()]);

            plot.draw();
            setTimeout(update, updateInterval);
        }

        update();

    });





    $(function () {

        var options = {
            lines: {
                show: true
            },
            points: {
                show: true
            },
            xaxis: {
                tickDecimals: 0,
                tickSize: 1
            }
        };

        var data = [];

        $.plot("#full-float", data, options);

        var alreadyFetched = {};

        $("button.fetchSeries").on("click", function () {

            var button = $(this);


            var dataurl = button.siblings("a").attr("href");

            function onDataReceived(series) {


                var firstcoordinate = "(" + series.data[0][0] + ", " + series.data[0][1] + ")";
                button.siblings("span").text("Fetched " + series.label + ", first point: " + firstcoordinate);


                if (!alreadyFetched[series.label]) {
                    alreadyFetched[series.label] = true;
                    data.push(series);
                }

                $.plot("#full-float", data, options);
            }

            $.ajax({
                url: dataurl,
                type: "GET",
                dataType: "json",
                success: onDataReceived
            });
        });

        $("button.dataUpdate").on("click", function () {

            data = [];
            alreadyFetched = {};

            $.plot("#full-float", data, options);

            var iteration = 0;

            function fetchData() {

                ++iteration;

                function onDataReceived(series) {


                    data = [series];
                    $.plot("#full-float", data, options);
                }


                $.ajax({
                    url: "data-eu-gdp-growth-" + iteration + ".json",
                    type: "GET",
                    dataType: "json",
                    success: onDataReceived
                });

                if (iteration < 5) {
                    setTimeout(fetchData, 1000);
                } else {
                    data = [];
                    alreadyFetched = {};
                }
            }

            setTimeout(fetchData, 1000);
        });

        $("button.fetchSeries:first").click();
    });





    $(function () {

        var sin = [],
                cos = [];

        for (var i = 0; i < 14; i += 0.5) {
            sin.push([i, Math.sin(i)]);
            cos.push([i, Math.cos(i)]);
        }

        var plot = $.plot("#crave-flot", [
            {data: sin, label: "sin(x)"},
            {data: cos, label: "cos(x)"}
        ], {
            series: {
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            grid: {
                hoverable: true,
                clickable: true
            },
            yaxis: {
                min: -1.2,
                max: 1.2
            }
        });

        $("<div id='tooltip'></div>").css({
            position: "absolute",
            display: "none",
            border: "1px solid #fdd",
            padding: "2px",
            "background-color": "#fee",
            opacity: 0.80
        }).appendTo("body");

        $("#crave-flot").bind("plothover", function (event, pos, item) {

            if ($("#enablePosition:checked").length > 0) {
                var str = "(" + pos.x.toFixed(2) + ", " + pos.y.toFixed(2) + ")";
                $("#hoverdata").text(str);
            }

            if ($("#enableTooltip:checked").length > 0) {
                if (item) {
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    $("#tooltip").html(item.series.label + " of " + x + " = " + y)
                            .css({top: item.pageY + 5, left: item.pageX + 5})
                            .fadeIn(200);
                } else {
                    $("#tooltip").hide();
                }
            }
        });

        $("#crave-flot").bind("plotclick", function (event, pos, item) {
            if (item) {
                $("#clickdata").text(" - click point " + item.dataIndex + " in " + item.series.label);
                plot.highlight(item.series, item.datapoint);
            }
        });
    });





    $(function () {

        function generate(offset, amplitude) {

            var res = [];
            var start = 0, end = 10;

            for (var i = 0; i <= 50; ++i) {
                var x = start + i / 50 * (end - start);
                res.push([x, amplitude * Math.sin(x + offset)]);
            }

            return res;
        }

        var data = [
            {data: generate(2, 1.8), points: {symbol: "circle"}},
            {data: generate(3, 1.5), points: {symbol: "square"}},
            {data: generate(4, 0.9), points: {symbol: "diamond"}},
            {data: generate(6, 1.4), points: {symbol: "triangle"}},
            {data: generate(7, 1.1), points: {symbol: "cross"}}
        ];

        $.plot("#symbol-flot", data, {
            series: {
                points: {
                    show: true,
                    radius: 3
                }
            },
            grid: {
                hoverable: true
            }
        });

    });


    $(function () {

        var d1 = [];
        for (var i = 0; i <= 10; i += 1) {
            d1.push([i, parseInt(Math.random() * 30)]);
        }

        var d2 = [];
        for (var i = 0; i <= 10; i += 1) {
            d2.push([i, parseInt(Math.random() * 30)]);
        }

        var d3 = [];
        for (var i = 0; i <= 10; i += 1) {
            d3.push([i, parseInt(Math.random() * 30)]);
        }

        var stack = 0,
                bars = true,
                lines = false,
                steps = false;

        function plotWithOptions() {
            $.plot("#stack-flot", [d1, d2, d3], {
                series: {
                    stack: stack,
                    lines: {
                        show: lines,
                        fill: true,
                        steps: steps
                    },
                    bars: {
                        show: bars,
                        barWidth: 0.6
                    }
                }
            });
        }

        plotWithOptions();

        $(".stackControls button").on("click", function (e) {
            e.preventDefault();
            stack = $(this).text() == "With stacking" ? true : null;
            plotWithOptions();
        });

        $(".graphControls button").on("click", function (e) {
            e.preventDefault();
            bars = $(this).text().indexOf("Bars") != -1;
            lines = $(this).text().indexOf("Lines") != -1;
            steps = $(this).text().indexOf("steps") != -1;
            plotWithOptions();
        });
    });


    $(function () {

        var d1 = [];
        for (var i = 0; i < 20; ++i) {
            d1.push([i, Math.sin(i)]);
        }

        var data = [{data: d1, label: "Pressure", color: "#edc240"}];

        var markings = [
            {color: "#000", lineWidth: 1, xaxis: {from: 2, to: 2}},
            {color: "#000", lineWidth: 1, xaxis: {from: 8, to: 8}}
        ];

        var placeholder = $("#annotations-bar");

        var plot = $.plot(placeholder, data, {
            bars: {show: true, barWidth: 0.5, fill: 0.9},
            xaxis: {ticks: [], autoscaleMargin: 0.02},
            yaxis: {min: -2, max: 2},
            grid: {markings: markings}
        });

        var o = plot.pointOffset({x: 2, y: -1.2});

        // Append it to the placeholder that Flot already uses for positioning

//									placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Warming up</div>");

        o = plot.pointOffset({x: 8, y: -1.2});
//									placeholder.append("<div style='position:absolute;left:" + (o.left + 4) + "px;top:" + o.top + "px;color:#666;font-size:smaller'>Actual measurements</div>");

        // Draw a little arrow on top of the last label to demonstrate canvas
        // drawing

        var ctx = plot.getCanvas().getContext("2d");
        ctx.beginPath();
        o.left += 4;
        ctx.moveTo(o.left, o.top);
        ctx.lineTo(o.left, o.top - 10);
        ctx.lineTo(o.left + 10, o.top - 5);
        ctx.lineTo(o.left, o.top);
        ctx.fill();

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });





    $(function () {


        var data = [],
                series = Math.floor(Math.random() * 6) + 3;

        for (var i = 0; i < series; i++) {
            data[i] = {
                label: "Series" + (i + 1),
                data: Math.floor(Math.random() * 100) + 1
            }
        }

        var placeholder = $("#pie-float");

        $("#default-flot").on("click", function () {

            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true
                    }
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            show: true",
                "        }",
                "    }",
                "});"
            ]);
        });

        $("#without-flot").on("click", function () {

            placeholder.unbind();


            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true
                    }
                },
                legend: {
                    show: false
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            show: true",
                "        }",
                "    },",
                "    legend: {",
                "        show: false",
                "    }",
                "});"
            ]);
        });

        $("#label-flot").on("click", function () {

            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 1,
                            formatter: labelFormatter,
                            background: {
                                opacity: 0.8
                            }
                        }
                    }
                },
                legend: {
                    show: false
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            show: true,",
                "            radius: 1,",
                "            label: {",
                "                show: true,",
                "                radius: 1,",
                "                formatter: labelFormatter,",
                "                background: {",
                "                    opacity: 0.8",
                "                }",
                "            }",
                "        }",
                "    },",
                "    legend: {",
                "        show: false",
                "    }",
                "});"
            ]);
        });


        $("#hidden-style-flot").on("click", function () {

            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 3 / 4,
                            formatter: labelFormatter,
                            background: {
                                opacity: 0.5,
                                color: "#000"
                            }
                        }
                    }
                },
                legend: {
                    show: false
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: { ",
                "            show: true,",
                "            radius: 1,",
                "            label: {",
                "                show: true,",
                "                radius: 3/4,",
                "                formatter: labelFormatter,",
                "                background: { ",
                "                    opacity: 0.5,",
                "                    color: '#000'",
                "                }",
                "            }",
                "        }",
                "    },",
                "    legend: {",
                "        show: false",
                "    }",
                "});"
            ]);
        });

        $("#hidden-flot").on("click", function () {

            placeholder.unbind();


            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }
                    }
                },
                legend: {
                    show: false
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            show: true,",
                "            radius: 1,",
                "            label: {",
                "                show: true,",
                "                radius: 2/3,",
                "                formatter: labelFormatter,",
                "                threshold: 0.1",
                "            }",
                "        }",
                "    },",
                "    legend: {",
                "        show: false",
                "    }",
                "});"
            ]);
        });

        $("#donut-flot").on("click", function () {

            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        tilt: 0.5,
                        label: {
                            show: true,
                            radius: 1,
                            formatter: labelFormatter,
                            background: {
                                opacity: 0.8
                            }
                        },
                        combine: {
                            color: "#999",
                            threshold: 0.1
                        }
                    }
                },
                legend: {
                    show: false
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            show: true,",
                "            radius: 1,",
                "            tilt: 0.5,",
                "            label: {",
                "                show: true,",
                "                radius: 1,",
                "                formatter: labelFormatter,",
                "                background: {",
                "                    opacity: 0.8",
                "                }",
                "            },",
                "            combine: {",
                "                color: '#999',",
                "                threshold: 0.1",
                "            }",
                "        }",
                "    },",
                "    legend: {",
                "        show: false",
                "    }",
                "});",
            ]);
        });

        $("#donut-hole-flot").on("click", function () {

            placeholder.unbind();

            $.plot(placeholder, data, {
                series: {
                    pie: {
                        innerRadius: 0.5,
                        show: true
                    }
                }
            });

            setCode([
                "$.plot('#pie-float', data, {",
                "    series: {",
                "        pie: {",
                "            innerRadius: 0.5,",
                "            show: true",
                "        }",
                "    }",
                "});"
            ]);
        });

        // Show the initial default chart

        $("#default-flot").click();

    });

    /*-------- navigation Start----------*/
    $(function () {

        // generate data set from a parametric function with a fractal look

        function sumf(f, t, m) {
            var res = 0;
            for (var i = 1; i < m; ++i) {
                res += f(i * i * t) / (i * i);
            }
            return res;
        }

        var d1 = [];
        for (var t = 0; t <= 2 * Math.PI; t += 0.01) {
            d1.push([sumf(Math.cos, t, 10), sumf(Math.sin, t, 10)]);
        }

        var data = [d1],
                placeholder = $("#navigation");

        var plot = $.plot(placeholder, data, {
            series: {
                lines: {
                    show: true
                },
                shadowSize: 0
            },
            xaxis: {
                zoomRange: [0.1, 10],
                panRange: [-10, 10]
            },
            yaxis: {
                zoomRange: [0.1, 10],
                panRange: [-10, 10]
            },
            zoom: {
                interactive: true
            },
            pan: {
                interactive: true
            }
        });

        // show pan/zoom messages to illustrate events 

        placeholder.bind("plotpan", function (event, plot) {
            var axes = plot.getAxes();
            $(".message").html("Panning to x: " + axes.xaxis.min.toFixed(2)
                    + " &ndash; " + axes.xaxis.max.toFixed(2)
                    + " and y: " + axes.yaxis.min.toFixed(2)
                    + " &ndash; " + axes.yaxis.max.toFixed(2));
        });

        placeholder.bind("plotzoom", function (event, plot) {
            var axes = plot.getAxes();
            $(".message").html("Zooming to x: " + axes.xaxis.min.toFixed(2)
                    + " &ndash; " + axes.xaxis.max.toFixed(2)
                    + " and y: " + axes.yaxis.min.toFixed(2)
                    + " &ndash; " + axes.yaxis.max.toFixed(2));
        });

        // add zoom out button 

        $("<div class='button' style='right:20px;top:20px'>zoom out</div>")
                .appendTo(placeholder)
                .on("click", function (event) {
                    event.preventDefault();
                    plot.zoomOut();
                });

        // and add panning buttons

        // little helper for taking the repetitive work out of placing
        // panning arrows

        function addArrow(dir, right, top, offset) {
            $("<img class='button' src='../assets/js/float-chart/image/arrow-" + dir + ".gif' style='right:" + right + "px;top:" + top + "px'>")
                    .appendTo(placeholder)
                    .on("click", function (e) {
                        e.preventDefault();
                        plot.pan(offset);
                    });
        }

        addArrow("left", 55, 60, {left: -100});
        addArrow("right", 25, 60, {left: 100});
        addArrow("up", 40, 45, {top: -100});
        addArrow("down", 40, 75, {top: 100});

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });

    /*-------- navigation End ----------*/

// A custom label formatter used by several of the plots

    function labelFormatter(label, series) {
        return "<div style='font-size:8pt; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }

//

    function setCode(lines) {
        $("#code").text(lines.join("\n"));
    }




    $(function () {

        var d = [[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 1352], [1198450800000, 686], [1198537200000, 279], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 253], [1199574000000, 218], [1199660400000, 476], [1199746800000, 462], [1199833200000, 448], [1199919600000, 442], [1200006000000, 403], [1200092400000, 204], [1200178800000, 194], [1200265200000, 327], [1200351600000, 374], [1200438000000, 507], [1200524400000, 546], [1200610800000, 482], [1200697200000, 283], [1200783600000, 221], [1200870000000, 483], [1200956400000, 523], [1201042800000, 528], [1201129200000, 483], [1201215600000, 452], [1201302000000, 270], [1201388400000, 222], [1201474800000, 439], [1201561200000, 559], [1201647600000, 521], [1201734000000, 477], [1201820400000, 442], [1201906800000, 252], [1201993200000, 236], [1202079600000, 525], [1202166000000, 477], [1202252400000, 386], [1202338800000, 409], [1202425200000, 408], [1202511600000, 237], [1202598000000, 193], [1202684400000, 357], [1202770800000, 414], [1202857200000, 393], [1202943600000, 353], [1203030000000, 364], [1203116400000, 215], [1203202800000, 214], [1203289200000, 356], [1203375600000, 399], [1203462000000, 334], [1203548400000, 348], [1203634800000, 243], [1203721200000, 126], [1203807600000, 157], [1203894000000, 288]];

        // first correct the timestamps - they are recorded as the daily
        // midnights in UTC+0100, but Flot always displays dates in UTC
        // so we have to add one hour to hit the midnights in the plot

        for (var i = 0; i < d.length; ++i) {
            d[i][0] += 60 * 60 * 1000;
        }

        // helper for returning the weekends in a period

        function weekendAreas(axes) {

            var markings = [],
                    d = new Date(axes.xaxis.min);

            // go to the first Saturday

            d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
            d.setUTCSeconds(0);
            d.setUTCMinutes(0);
            d.setUTCHours(0);

            var i = d.getTime();

            // when we don't set yaxis, the rectangle automatically
            // extends to infinity upwards and downwards

            do {
                markings.push({xaxis: {from: i, to: i + 2 * 24 * 60 * 60 * 1000}});
                i += 7 * 24 * 60 * 60 * 1000;
            } while (i < axes.xaxis.max);

            return markings;
        }

        var options = {
            xaxis: {
                mode: "time",
                tickLength: 5
            },
            selection: {
                mode: "x"
            },
            grid: {
                markings: weekendAreas
            }
        };

        var plot = $.plot("#visitor-flot", [d], options);

        var overview = $.plot("#overview-flot", [d], {
            series: {
                lines: {
                    show: true,
                    lineWidth: 1
                },
                shadowSize: 0
            },
            xaxis: {
                ticks: [],
                mode: "time"
            },
            yaxis: {
                ticks: [],
                min: 0,
                autoscaleMargin: 0.1
            },
            selection: {
                mode: "x"
            }
        });

        // now connect the two

        $("#placeholder").bind("plotselected", function (event, ranges) {

            // do the zooming
            $.each(plot.getXAxes(), function (_, axis) {
                var opts = axis.options;
                opts.min = ranges.xaxis.from;
                opts.max = ranges.xaxis.to;
            });
            plot.setupGrid();
            plot.draw();
            plot.clearSelection();

            // don't fire event on the overview to prevent eternal loop

            overview.setSelection(ranges, true);
        });

        $("#overview").bind("plotselected", function (event, ranges) {
            plot.setSelection(ranges);
        });

        // Add the Flot version string to the footer

        $("#footer").prepend("Flot " + $.plot.version + " &ndash; ");
    });


    (function ($) {
        function processRawData(plot, series, datapoints) {
            // we normalize the area of each symbol so it is approximately the
            // same as a circle of the given radius

            var handlers = {
                square: function (ctx, x, y, radius, shadow) {
                    // pi * r^2 = (2s)^2  =>  s = r * sqrt(pi)/2
                    var size = radius * Math.sqrt(Math.PI) / 2;
                    ctx.rect(x - size, y - size, size + size, size + size);
                },
                diamond: function (ctx, x, y, radius, shadow) {
                    // pi * r^2 = 2s^2  =>  s = r * sqrt(pi/2)
                    var size = radius * Math.sqrt(Math.PI / 2);
                    ctx.moveTo(x - size, y);
                    ctx.lineTo(x, y - size);
                    ctx.lineTo(x + size, y);
                    ctx.lineTo(x, y + size);
                    ctx.lineTo(x - size, y);
                },
                triangle: function (ctx, x, y, radius, shadow) {
                    // pi * r^2 = 1/2 * s^2 * sin (pi / 3)  =>  s = r * sqrt(2 * pi / sin(pi / 3))
                    var size = radius * Math.sqrt(2 * Math.PI / Math.sin(Math.PI / 3));
                    var height = size * Math.sin(Math.PI / 3);
                    ctx.moveTo(x - size / 2, y + height / 2);
                    ctx.lineTo(x + size / 2, y + height / 2);
                    if (!shadow) {
                        ctx.lineTo(x, y - height / 2);
                        ctx.lineTo(x - size / 2, y + height / 2);
                    }
                },
                cross: function (ctx, x, y, radius, shadow) {
                    // pi * r^2 = (2s)^2  =>  s = r * sqrt(pi)/2
                    var size = radius * Math.sqrt(Math.PI) / 2;
                    ctx.moveTo(x - size, y - size);
                    ctx.lineTo(x + size, y + size);
                    ctx.moveTo(x - size, y + size);
                    ctx.lineTo(x + size, y - size);
                }
            };

            var s = series.points.symbol;
            if (handlers[s])
                series.points.symbol = handlers[s];
        }

        function init(plot) {
            plot.hooks.processDatapoints.push(processRawData);
        }

        $.plot.plugins.push({
            init: init,
            name: 'symbols',
            version: '1.0'
        });
    })(jQuery);

}(document, window, jQuery);           