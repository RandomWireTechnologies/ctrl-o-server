!function (document, window, $) {
    "use strict";
    /*--------bar charts--------*/
    Morris.Bar({
        element: 'barcharts',
        resize: true,
        data: [
            {x: '2011 Q1', y: 3, z: 2, a: 3},
            {x: '2011 Q2', y: 2, z: 3, a: 1},
            {x: '2011 Q3', y: 1, z: 2, a: 4},
            {x: '2011 Q4', y: 2, z: 4, a: 3}
        ],
        xkey: 'x',
        ykeys: ['y', 'z', 'a'],
        labels: ['Y', 'Z', 'A'],
        barColors: ['#36a9e1', '#7a92a3', '#4da74d']
    }).on('click', function (i, row) {
        console.log(i, row);
    });


    /***********line charts**************/
    Morris.Line({
        element: 'myfirstchart',
        resize: true,
        data: [
            {year: '2008', value: 0},
            {year: '2009', value: 15},
            {year: '2010', value: 10},
            {year: '2011', value: 5},
            {year: '2012', value: 20}
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value'],
        lineColors: ['#36a9e1']
    });



    /*--------Weather--------*/
    var skycons = new Skycons({"color": "white"});
    var skycons2 = new Skycons({"color": "#76838f"});
    var skycons3 = new Skycons({"color": "white"});
    skycons.add("icon1", Skycons.PARTLY_CLOUDY_DAY);
    skycons.add("icon2", Skycons.PARTLY_CLOUDY_DAY);
    skycons2.add("icon4", Skycons.SNOW);
    skycons3.add("icon5", Skycons.SNOW);
    skycons3.add("icon6", Skycons.RAIN);
    skycons2.play();
    skycons3.play();
    skycons.pause();

    /*------- map -------*/

    var mapid = "";

    mapid = $('#us_aea_en-map');
    if (mapid.length) {
        mapid.vectorMap({
            map: 'us_aea_en',
            regionsSelectable: true,
            backgroundColor: '#1fb5ac',
            regionStyle: {
                initial: {
                    fill: 'white',
                    stroke: 'none',
                },
                hover: {
                    fill: '#fa8564',
                    'fill-opacity': 1,
                    cursor: 'pointer'
                },
                selected: {
                    fill: '#fa8564'
                }
            },
            focusOn: {
                x: 0,
                y: 0,
                scale: 0,
                animate: true
            },
            markerStyle: {
                initial: {
                    fill: '#9972b5',
                    stroke: '#ffffff',
                    "stroke-width": 1,
                    r: 6
                },
                hover: {
                    stroke: '#FDB45C',
                    "stroke-width": 1,
                    cursor: 'pointer'
                },
                selected: {
                    fill: '#FDB45C',
                    "stroke-width": 0,
                },
                selectedHover: {
                }
            },
            markerLabelStyle: {
                initial: {
                    'font-family': 'Verdana',
                    'font-size': '12',
                    'font-weight': 'bold',
                    cursor: 'default',
                    fill: 'black'
                },
                hover: {
                    cursor: 'pointer'
                }
            },
            markers: [{
                    latLng: [45.25, -69.44],
                    name: 'Maine'
                }, {
                    latLng: [44.07, -114.74],
                    name: 'Idaho'
                }, {
                    latLng: [37.43, -78.65],
                    name: 'Virginia'
                },{
                    latLng: [64.20, -149.49],
                    name: 'Alaska'
                },{
                    latLng: [36.77, -119.42],
                    name: 'California'
                },{
                    latLng: [47.55, -101.00],
                    name: 'North Dakota'
                },{
                    latLng: [37.96, -91.83],
                    name: 'Missouri'
                },{
                    latLng: [44.31, -85.60],
                    name: 'Michigan'
                },{
                    latLng: [31.97, -99.90],
                    name: 'Texas'
                }]
        });
    } // USA

    /*--------Polate Chart--------*/
//    !function () {
//        for (var seriesData = [[], [], []], random = new Rickshaw.Fixtures.RandomData(150), i = 0; 150 > i; i++)
//            random.addData(seriesData);
//        var $element = $("#interpolateChart"), graph = new Rickshaw.Graph({
//            element: $element.get(0),
//            width: $element.width(),
//            height: 300,
//            renderer: "area",
//            stroke: !0,
//            series: [{
//                    color: "#ef5350",
//                    data: seriesData[0],
//                    name: "Mexico"
//                }
//                ,
//                {
//                    color: "#5cb85c",
//                    data: seriesData[1],
//                    name: "France"
//                }
//                ,
//                {
//                    color: "#36a9e1",
//                    data: seriesData[2],
//                    name: " Iran"
//                }
//            ]
//        }
//        );
////        graph.render(),
////                setInterval(function () {
////                    random.removeData(seriesData), random.addData(seriesData), graph.update()
////                }
////                ,
////                        2e3);
//////        var legend = (new Rickshaw.Graph.HoverDetail({
//////            graph: graph
//////        }
//////        ),
//////                new Rickshaw.Graph.Legend({
//////                    graph: graph, element: document.getElementById("interpolateLegend")
//////                }
//////                ));
//////        new Rickshaw.Graph.Behavior.Series.Toggle({
//////            graph: graph, legend: legend
//////        }
//////        );
////        $(window).on("resize",
////                function () {
////                    graph.configure({
////                        width: $element.width()
////                    }
////                    ),
////                            graph.render()
////                }
////        )
//    }()
}
(document, window, jQuery);




