!function (window, document, $) {
    "use strict";
    /***********line charts**************/
    Morris.Line({
        element: 'myfirstchart',
        resize: true,
        data: [
            {year: '2008', value: 20},
            {year: '2009', value: 10},
            {year: '2010', value: 5},
            {year: '2011', value: 5},
            {year: '2012', value: 20}
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value'],
        lineColors: ['#36a9e1']
    });
    /***********area charts**************/
    Morris.Area({
        element: 'areachart',
        resize: true,
        data: [
            {x: '2010 Q4', y: 3, z: 7},
            {x: '2011 Q1', y: 3, z: 4},
            {x: '2011 Q2', y: null, z: 1},
            {x: '2011 Q3', y: 2, z: 5},
            {x: '2011 Q4', y: 8, z: 2},
            {x: '2012 Q1', y: 4, z: 4}
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        labels: ['Y', 'Z'],
        lineColors: ['#36a9e1', 'z']
    }).on('click', function (i, row) {
        console.log(i, row);
    });
    /***********bar charts**************/
    Morris.Bar({
        element: 'barcharts',
        resize: true,
        data: [
            {x: '2011 Q1', y: 3, z: 2, a: 3},
            {x: '2011 Q2', y: 2, z: null, a: 1},
            {x: '2011 Q3', y: 0, z: 2, a: 4},
            {x: '2011 Q4', y: 2, z: 4, a: 3}
        ],
        xkey: 'x',
        ykeys: ['y', 'z', 'a'],
        labels: ['Y', 'Z', 'A'],
        barColors: ['#36a9e1', '#7a92a3', '#4da74d']
    }).on('click', function (i, row) {
        console.log(i, row);
    });
    /***********stacked bars**************/
    Morris.Bar({
        element: 'stackedbars',
        resize: true,
        data: [
            {x: '2011 Q1', y: 3, z: 2, a: 3},
            {x: '2011 Q2', y: 2, z: null, a: 1},
            {x: '2011 Q3', y: 0, z: 2, a: 4},
            {x: '2011 Q4', y: 2, z: 4, a: 3}
        ],
        xkey: 'x',
        ykeys: ['y', 'z', 'a'],
        labels: ['Y', 'Z', 'A'],
        barColors: ['#36a9e1', '#7a92a3', '#4da74d'],
        stacked: true
    });

    /***********daylight savings**************/
    Morris.Area({
        element: 'daylightsavings',
        resize: true,
        data: [
            {x: '2013-03-30 22:00:00', y: 3, z: 3},
            {x: '2013-03-31 00:00:00', y: 2, z: 0},
            {x: '2013-03-31 02:00:00', y: 0, z: 2},
            {x: '2013-03-31 04:00:00', y: 4, z: 4}
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        labels: ['Y', 'Z'],
        lineColors: ['#36a9e1', 'z']
    });

    /********negative values*********/
    var neg_data = [
        {"period": "2011-08-12", "a": 100},
        {"period": "2011-03-03", "a": 75},
        {"period": "2010-08-08", "a": 50},
        {"period": "2010-05-10", "a": 25},
        {"period": "2010-03-14", "a": 0},
        {"period": "2010-01-10", "a": -25},
        {"period": "2009-12-10", "a": -50},
        {"period": "2009-10-07", "a": -75},
        {"period": "2009-09-25", "a": -100}
    ];
    Morris.Line({
        element: 'negativevalues',
        resize: true,
        data: neg_data,
        xkey: 'period',
        ykeys: ['a'],
        labels: ['Series A'],
        units: '%',
        lineColors: ['#36a9e1']
    });
    /********formatting dates*********/
    var year_data = [
        {"period": "2012", "licensed": 3407, "sorned": 660},
        {"period": "2011", "licensed": 3351, "sorned": 629},
        {"period": "2010", "licensed": 3269, "sorned": 618},
        {"period": "2009", "licensed": 3246, "sorned": 661},
        {"period": "2008", "licensed": 3257, "sorned": 667},
        {"period": "2007", "licensed": 3248, "sorned": 627},
        {"period": "2006", "licensed": 3171, "sorned": 660},
        {"period": "2005", "licensed": 3171, "sorned": 676},
        {"period": "2004", "licensed": 3201, "sorned": 656},
        {"period": "2003", "licensed": 3215, "sorned": 622}
    ];
    Morris.Line({
        element: 'formattingdates',
        resize: true,
        data: year_data,
        xkey: 'period',
        ykeys: ['licensed', 'sorned'],
        labels: ['Licensed', 'SORN'],
        lineColors: ['#36a9e1', 'z']
    });
    /********Time Events*********/
    var week_data = [
        {"period": "2011 W27", "licensed": 3407, "sorned": 660},
        {"period": "2011 W26", "licensed": 3351, "sorned": 629},
        {"period": "2011 W25", "licensed": 3269, "sorned": 618},
        {"period": "2011 W24", "licensed": 3246, "sorned": 661},
        {"period": "2011 W23", "licensed": 3257, "sorned": 667},
        {"period": "2011 W22", "licensed": 3248, "sorned": 627},
        {"period": "2011 W21", "licensed": 3171, "sorned": 660},
        {"period": "2011 W20", "licensed": 3171, "sorned": 676},
        {"period": "2011 W19", "licensed": 3201, "sorned": 656},
        {"period": "2011 W18", "licensed": 3215, "sorned": 622},
        {"period": "2011 W17", "licensed": 3148, "sorned": 632},
        {"period": "2011 W16", "licensed": 3155, "sorned": 681},
        {"period": "2011 W15", "licensed": 3190, "sorned": 667},
        {"period": "2011 W14", "licensed": 3226, "sorned": 620},
        {"period": "2011 W13", "licensed": 3245, "sorned": null},
        {"period": "2011 W12", "licensed": 3289, "sorned": null},
        {"period": "2011 W11", "licensed": 3263, "sorned": null},
        {"period": "2011 W10", "licensed": 3189, "sorned": null},
        {"period": "2011 W09", "licensed": 3079, "sorned": null},
        {"period": "2011 W08", "licensed": 3085, "sorned": null},
        {"period": "2011 W07", "licensed": 3055, "sorned": null},
        {"period": "2011 W06", "licensed": 3063, "sorned": null},
        {"period": "2011 W05", "licensed": 2943, "sorned": null},
        {"period": "2011 W04", "licensed": 2806, "sorned": null},
        {"period": "2011 W03", "licensed": 2674, "sorned": null},
        {"period": "2011 W02", "licensed": 1702, "sorned": null},
        {"period": "2011 W01", "licensed": 1732, "sorned": null}
    ];
    Morris.Line({
        element: 'timeevents',
        resize: true,
        data: week_data,
        xkey: 'period',
        ykeys: ['licensed', 'sorned'],
        labels: ['Licensed', 'SORN'],
        events: [
            '2011-04',
            '2011-08'
        ],
        lineColors: ['#36a9e1', 'z']
    });
    /********Non-continuous data*********/
    var day_data = [
        {"period": "2012-10-01", "licensed": 3407},
        {"period": "2012-09-30", "sorned": 0},
        {"period": "2012-09-29", "sorned": 618},
        {"period": "2012-09-20", "licensed": 3246, "sorned": 661},
        {"period": "2012-09-19", "licensed": 3257, "sorned": null},
        {"period": "2012-09-18", "licensed": 3248, "other": 1000},
        {"period": "2012-09-17", "sorned": 0},
        {"period": "2012-09-16", "sorned": 0},
        {"period": "2012-09-15", "licensed": 3201, "sorned": 656},
        {"period": "2012-09-10", "licensed": 3215}
    ];
    Morris.Line({
        element: 'noncontinuousdata',
        resize: true,
        data: day_data,
        xkey: 'period',
        ykeys: ['licensed', 'sorned', 'other'],
        labels: ['Licensed', 'SORN', 'Other'],
        lineColors: ['#36a9e1', 'z'],
        /* custom label formatting with `xLabelFormat` */
        xLabelFormat: function (d) {
            return (d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear();
        },
        /* setting `xLabels` is recommended when using xLabelFormat */
        xLabels: 'day'
    });
    /********Donut Chart*********/
    Morris.Donut({
        element: 'donutchart',
        resize: true,
        data: [
            {value: 50, label: 'foo'},
            {value: 25, label: 'bar'},
            {value: 15, label: 'baz'},
            {value: 10, label: 'A really really long label'}
        ],
        formatter: function (x) {
            return x + "%"
        }
    }).on('click', function (i, row) {
        console.log(i, row);
    });
    /********Donut Colors*********/
    Morris.Donut({
        element: 'donutcolors',
        resize: true,
        data: [
            {value: 50, label: 'Mail-Order Sales'},
            {value: 15, label: 'In-Store Sales'},
            {value: 15, label: 'Download Sales'},
            {value: 20, label: 'Online Sales'}
        ],
        backgroundColor: '#ccc',
        labelColor: '#36a9e1',
        colors: ['#36a9e1', '#5cb85c', '#f0ad4e', '#d9534f'],
        formatter: function (x) {
            return x + "$"
        }
    });
    /********Donut Formatter*********/
    Morris.Donut({
        element: 'donutformatter',
        resize: true,
        data: [
            {value: 70, label: 'foo', formatted: 'at least 70%'},
            {value: 15, label: 'bar', formatted: 'approx. 15%'},
            {value: 10, label: 'baz', formatted: 'approx. 10%'},
            {value: 5, label: 'A really really long label', formatted: 'at most 5%'}
        ],
        formatter: function (x, data) {
            return data.formatted;
        }
    });

    var salesdata = [{period: "2014-02-05", Modena: 810, Bologna: 0, Rimini: 0},
        {period: "2014-02-09", Modena: 0, Bologna: 396, Rimini: 0},
        {period: "2014-02-10", Modena: 0, Bologna: 0, Rimini: 380},
        {period: "2014-02-10", Modena: 0, Bologna: 736, Rimini: 0},
        {period: "2014-02-12", Modena: 0, Bologna: 0.00, Rimini: 0},
        {period: "2014-02-13", Modena: 0, Bologna: 0, Rimini: 0}];




    Morris.Area({
        element: 'graph-area',
        padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        fillOpacity: .7,
        data: salesdata,
        lineColors: ['#ED5D5D', '#D6D23A', '#32D2C9'],
        xkey: 'period',
        ykeys: ['Modena', 'Bologna', 'Rimini'],
        labels: ['Modena', 'Bologna', 'Rimini'],
        pointSize: 0,
        lineWidth: 0,
        resize: true,
        hideHover: 'auto'
    });

}(window, document, jQuery);