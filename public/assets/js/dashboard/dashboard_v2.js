jQuery(document).on("ready", function ()
{
    'use strict';

    /*--------basic-map----------*/
    var elem = jQuery('#basic-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{"featureType": "water", "stylers": [{"saturation": 43}, {"lightness": -11}, {"hue": "#0088ff"}]}, {"featureType": "road", "elementType": "geometry.fill", "stylers": [{"hue": "#ff0000"}, {"saturation": -100}, {"lightness": 99}]}, {"featureType": "road", "elementType": "geometry.stroke", "stylers": [{"color": "#808080"}, {"lightness": 54}]}, {"featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{"color": "#ece2d9"}]}, {"featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{"color": "#ccdca1"}]}, {"featureType": "road", "elementType": "labels.text.fill", "stylers": [{"color": "#767676"}]}, {"featureType": "road", "elementType": "labels.text.stroke", "stylers": [{"color": "#ffffff"}]}, {"featureType": "poi", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"color": "#b8cb93"}]}, {"featureType": "poi.park", "stylers": [{"visibility": "on"}]}, {"featureType": "poi.sports_complex", "stylers": [{"visibility": "on"}]}, {"featureType": "poi.medical", "stylers": [{"visibility": "on"}]}, {"featureType": "poi.business", "stylers": [{"visibility": "simplified"}]}]};

        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
        });
        new google.maps.Marker({map: map, position: map.getCenter()})



        google.maps.event.addListener(map, 'center_changed', function () {

            //a value to determine whether the map has been resized
            var size = [this.getDiv().offsetWidth, this.getDiv().offsetHeight].join('x');

            //when the center has changed, but not the size of the map
            if (!this.get('size') || size === this.get('size')) {
                this.setValues({size: size, _center: this.getCenter()});
            }
            //when the map has been resized
            else {
                google.maps.event.addListenerOnce(this, 'idle', function () {
                    this.setValues({size: size, center: this.get('_center')});
                });
            }
        });
        //trigger the resize-event to initialize the size and _center-values
        google.maps.event.trigger(map, 'center_changed', {});
    }
    ;
    google.maps.event.addDomListener(window, 'load', initialize);

    /*-------Sortable task-------*/
    $(function () {
        sortable('.js-sortable', {
            forcePlaceholderSize: true,
            placeholderClass: 'p1 mb1 bg-navy border border-yellow'
        });
        sortable('.sortable-with-handle', {
            forcePlaceholderSize: true,
            placeholderClass: 'p1 mb1 bg-navy border border-yellow'
        });
        sortable('.list-task', {
            forcePlaceholderSize: true,
            placeholderClass: 'p1 mb1 bg-navy border border-yellow'
        });

        var updateOutput = function (e)
        {
            var list = e.length ? e : $(e.target),
                    output = list.data('output');
        };


    });

    /*-------Basic Sparkline-------*/

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
        height: "113px",
        barWidth: 20,
        barSpacing: 5,
        barColor: ['#36a9e1'],
        negBarColor: ['#36a9e1'],
        stackedBarColor: ['#36a9e1', "red"]
    })


    /*-------Ribbon Chord Chart-------*/

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
            textStyle: {color: 'black'}
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


    /*-------Flot-------*/
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


    window.onresize = function () {
        myChart6.resize();
    }

});

    /*------- Line Animation -------*/
    var cssAnimationData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        series: [
            [1, 2, 2.7, 0, 3, 5, 3, 4, 8, 10, 12, 7, 9],
            [0, 1.2, 2, 7, 2.5, 9, 5, 8, 9, 11, 14, 4, 7],
            [10, 9, 8, 6.5, 6.8, 6, 5.4, 5.3, 4.5, 4.4, 3, 2.8, 4.8]
        ]
    },
    cssAnimationResponsiveOptions = [
        [{
                axisX: {
                    labelInterpolationFnc: function (value, index) {
                        return index % 2 !== 0 ? !1 : value
                    }
                }
            }]
    ];
    new Chartist.Line("#pageLineAnimation", cssAnimationData, null, cssAnimationResponsiveOptions);

