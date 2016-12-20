!function (document, window, $) {
    "use strict";
    var Site = window.Site;
    $(document).ready(function ($) {
        Site.run()
    }
    ),
            
                    /*--------Simple line----------*/
                            function () {
                                c3.generate({
                                    bindto: "#pageSimpleline", data: {
                                        x: 'x',
                                        columns: [
                                            ['x', 30, 50, 100, 230, 300, 310],
                                            ['data1', 30, 200, 100, 400, 150, 250],
                                            ['data2', 130, 300, 200, 300, 250, 450]
                                        ],
                                        colors: {
                                            data1: '#36a9e1',
                                            data2: '#bf360c'
                                        }
                                    }
                                });
                            }
                    (),
                            /*--------Weather--------*/
                                    function () {
                                        var skycons3 = new Skycons({"color": "white"});
                                        skycons3.add("icon6", Skycons.RAIN);
                                        skycons3.play();
                                    }
                            (),
                                    /*--------Updating Chart----------*/
                                    $(function () {
                                        var a = $(".updating-chart").peity("line", {
                                            width: 150,
                                            height: 50,
                                            stroke: "#36A9E1",
                                            fill: !1,
                                            strokeWidth: 3
                                        });
                                        setInterval(function () {
                                            var b = Math.round(5 * Math.random()),
                                                    c = a.text().split(",");
                                            c.shift(), c.push(b), a.text(c.join(",")).change()
                                        }, 500)
                                    })

                            $("#sparkline_bar").sparkline([9, 11, 12, 13, 12, 13, 10, 14, 13, 11, 11, 12, 11, 11, 10, 12, 11, 10],
                                    {
                                        type: "bar",
                                        width: "100",
                                        barWidth: 5,
                                        height: "55",
                                        barColor: "#5c9bd1",
                                        negBarColor: "#e02222"
                                    });
                        }
                (document, window, jQuery);

  