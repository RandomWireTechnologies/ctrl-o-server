jQuery(function ($) {

    'use strict';

    var MAP_SETTINGS = window.MAP_SETTINGS || {};


    /*--------------------------------
     Vector maps
     --------------------------------*/
    MAP_SETTINGS.jvectorMaps = function () {

        if ($.isFunction($.fn.vectorMap)) {

            if ($("#world-map-markers").length) {
                $(function () {
                    $('#world-map-markers').vectorMap({
                        map: 'world_mill_en',
                        scaleColors: ['#1fb5ac', '#1fb5ac'],
                        normalizeFunction: 'polynomial',
                        hoverOpacity: 0.7,
                        hoverColor: false,
                        regionsSelectable: true,
                        markersSelectable: true,
                        markersSelectableOne: true,
                        onRegionOver: function (event, code) {
                        },
                        onRegionOut: function (event, code) {
                        },
                        onRegionClick: function (event, code) {
                        },
                        onRegionSelected: function (event, code, isSelected, selectedRegions) {
                            if (window.localStorage) {
                                window.localStorage.setItem(
                                        'jvectormap-selected-regions',
                                        JSON.stringify(selectedRegions)
                                        );
                            }
                        },
                        panOnDrag: true,
                        focusOn: {
                            x: 1.5,
                            y: 1.5,
                            scale: 1,
                            animate: true
                        },
                        regionStyle: {
                            initial: {
                                fill: '#cccccc',
                                'fill-opacity': 1,
                                stroke: 'none',
                                'stroke-width': 0,
                                'stroke-opacity': 1
                            },
                            hover: {
                                fill: '#fa8564',
                                'fill-opacity': 1,
                                cursor: 'pointer'
                            },
                            selected: {
                                fill: '#fa8564'
                            },
                            selectedHover: {}
                        },
                        markerStyle: {
                            initial: {
                                fill: '#9972b5',
                                stroke: '#ffffff',
                                "stroke-width": 2,
                                r: 10
                            },
                            hover: {
                                stroke: '#FDB45C',
                                "stroke-width": 2,
                                cursor: 'pointer'
                            },
                            selected: {
                                fill: '#FDB45C',
                                "stroke-width": 0,
                            },
                        },
                        backgroundColor: '#ffffff',
                        markers: [{
                                latLng: [41.90, 12.45],
                                name: 'Vatican City'
                            }, {
                                latLng: [43.73, 7.41],
                                name: 'Monaco'
                            }, {
                                latLng: [-0.52, 166.93],
                                name: 'Nauru'
                            }, {
                                latLng: [-8.51, 179.21],
                                name: 'Tuvalu'
                            }, {
                                latLng: [43.93, 12.46],
                                name: 'San Marino'
                            }, {
                                latLng: [47.14, 9.52],
                                name: 'Liechtenstein'
                            }, {
                                latLng: [7.11, 171.06],
                                name: 'Marshall Islands'
                            }, {
                                latLng: [17.3, -62.73],
                                name: 'Saint Kitts and Nevis'
                            }, {
                                latLng: [3.2, 73.22],
                                name: 'Maldives'
                            }, {
                                latLng: [35.88, 14.5],
                                name: 'Malta'
                            }, {
                                latLng: [12.05, -61.75],
                                name: 'Grenada'
                            }, {
                                latLng: [13.16, -61.23],
                                name: 'Saint Vincent and the Grenadines'
                            }, {
                                latLng: [13.16, -59.55],
                                name: 'Barbados'
                            }, {
                                latLng: [17.11, -61.85],
                                name: 'Antigua and Barbuda'
                            }, {
                                latLng: [-4.61, 55.45],
                                name: 'Seychelles'
                            }, {
                                latLng: [7.35, 134.46],
                                name: 'Palau'
                            }, {
                                latLng: [42.5, 1.51],
                                name: 'Andorra'
                            }, {
                                latLng: [14.01, -60.98],
                                name: 'Saint Lucia'
                            }, {
                                latLng: [6.91, 158.18],
                                name: 'Federated States of Micronesia'
                            }, {
                                latLng: [1.3, 103.8],
                                name: 'Singapore'
                            }, {
                                latLng: [1.46, 173.03],
                                name: 'Kiribati'
                            }, {
                                latLng: [15.3, -61.38],
                                name: 'Dominica'
                            }, {
                                latLng: [-20.2, 57.5],
                                name: 'Mauritius'
                            }, {
                                latLng: [26.02, 50.55],
                                name: 'Bahrain'
                            }, {
                                latLng: [0.33, 6.73],
                                name: 'SÃ£o TomÃ© and PrÃ­ncipe'
                            }]
                    });
                });
                //@code_end
            }

            var mapid = "";
            mapid = $('#europe_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'europe_mill_en',
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
                        scale: 1,
                        animate: true
                    },
                });
            } // Europe 
            mapid = $('#in_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'in_mill_en',
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
                });
            } // India
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
                });
            } // USA
            mapid = $('#pt_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'pt_mill_en',
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
                });
            } // Portugal
            mapid = $('#cn_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'cn_mill_en',
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
                });
            } // China
            mapid = $('#nz_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'nz_mill_en',
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
                });
            } // New Zealand
            mapid = $('#no_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'no_mill_en',
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
                });
            } // Norway
            mapid = $('#es_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'es_mill_en',
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
                });
            } // Spain
            mapid = $('#au_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'au_mill_en',
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
                });
            } // Australia
            mapid = $('#fr_regions_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'fr_regions_mill_en',
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
                });
            } // France - Regions
            mapid = $('#th_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'th_mill_en',
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
                });
            } // Thailand
            mapid = $('#co_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'co_mill_en',
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
                });
            } // Colombia
            mapid = $('#be_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'be_mill_en',
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
                });
            } // Belgium
            mapid = $('#ar_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'ar_mill_en',
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
                });
            } // Argentina
            mapid = $('#ve_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 've_mill_en',
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
                });
            } // Venezuela
            mapid = $('#it_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'it_mill_en',
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
                });
            } // Italy
            mapid = $('#dk_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'dk_mill_en',
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
                });
            } // Denmark
            mapid = $('#at_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'at_mill_en',
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
                });
            } // Austria
            mapid = $('#ca_lcc_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'ca_lcc_en',
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
                });
            } // Canada
            mapid = $('#nl_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'nl_mill_en',
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
                });
            } // Netherlands
            mapid = $('#se_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'se_mill_en',
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
                });
            } // Sweden
            mapid = $('#pl_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'pl_mill_en',
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
                });
            } // Poland
            mapid = $('#de_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'de_mill_en',
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
                });
            } // Germany
            mapid = $('#fr_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'fr_mill_en',
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
                });
            } // France - Departments
            mapid = $('#za_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'za_mill_en',
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
                });
            } // South Africa
            mapid = $('#ch_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'ch_mill_en',
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
                });
            } // Switzerland
            mapid = $('#us-ny-newyork_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'us-ny-newyork_mill_en',
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
                });
            } // New York City
            mapid = $('#us-il-chicago_mill_en-map');
            if (mapid.length) {
                mapid.vectorMap({
                    map: 'us-il-chicago_mill_en',
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
                });
            } // Chicago

        }

    };



    /*--------------------------------
     Vector maps
     --------------------------------*/
    MAP_SETTINGS.dbjvectorMap = function () {

        if (jQuery.isFunction(jQuery.fn.vectorMap)) {
            //@code_start
            jQuery(function () {
                jQuery('#db-world-map-markers').vectorMap({
                    map: 'world_mill_en',
                    scaleColors: ['#1fb5ac', '#1fb5ac'],
                    normalizeFunction: 'polynomial',
                    hoverOpacity: 0.7,
                    hoverColor: false,
                    regionsSelectable: true,
                    markersSelectable: true,
                    markersSelectableOne: true,
                    updateSize: true,
                    onRegionOver: function (event, code) {
                        //console.log('region-over', code);
                    },
                    onRegionOut: function (event, code) {
                        //console.log('region-out', code);
                    },
                    onRegionClick: function (event, code) {
                        //console.log('region-click', code);
                    },
                    onRegionSelected: function (event, code, isSelected, selectedRegions) {
                        //console.log('region-select', code, isSelected, selectedRegions);
                        if (window.localStorage) {
                            window.localStorage.setItem(
                                    'jvectormap-selected-regions',
                                    JSON.stringify(selectedRegions)
                                    );
                        }
                    },
                    panOnDrag: true,
                    focusOn: {
                        x: 0.5,
                        y: 0.5,
                        scale: 1.2,
                        animate: true
                    },
                    regionStyle: {
                        initial: {
                            fill: '#aaaaaa',
                            'fill-opacity': 1,
                            stroke: 'false',
                            'stroke-width': 0,
                            'stroke-opacity': 1
                        },
                        hover: {
                            fill: '#1fb5ac',
                            'fill-opacity': 1,
                            cursor: 'pointer'
                        },
                        selected: {
                            fill: '#1fb5ac'
                        },
                        selectedHover: {}
                    },
                    markerStyle: {
                        initial: {
                            fill: '#fa8564',
                            stroke: '#ffffff',
                            r: 5
                        },
                        hover: {
                            stroke: '#FDB45C',
                            "stroke-width": 2,
                            cursor: 'pointer'
                        },
                        selected: {
                            fill: '#FDB45C',
                            "stroke-width": 0,
                        },
                    },
                    backgroundColor: '#ffffff',
                    markers: [{
                            latLng: [41.90, 12.45],
                            name: 'Vatican City'
                        }, {
                            latLng: [43.73, 7.41],
                            name: 'Monaco'
                        }, {
                            latLng: [-0.52, 166.93],
                            name: 'Nauru'
                        }, {
                            latLng: [-8.51, 179.21],
                            name: 'Tuvalu'
                        }, {
                            latLng: [43.93, 12.46],
                            name: 'San Marino'
                        }, {
                            latLng: [47.14, 9.52],
                            name: 'Liechtenstein'
                        }, {
                            latLng: [7.11, 171.06],
                            name: 'Marshall Islands'
                        }, {
                            latLng: [17.3, -62.73],
                            name: 'Saint Kitts and Nevis'
                        }, {
                            latLng: [3.2, 73.22],
                            name: 'Maldives'
                        }, {
                            latLng: [35.88, 14.5],
                            name: 'Malta'
                        }, {
                            latLng: [12.05, -61.75],
                            name: 'Grenada'
                        }, {
                            latLng: [13.16, -61.23],
                            name: 'Saint Vincent and the Grenadines'
                        }, {
                            latLng: [13.16, -59.55],
                            name: 'Barbados'
                        }, {
                            latLng: [17.11, -61.85],
                            name: 'Antigua and Barbuda'
                        }, {
                            latLng: [-4.61, 55.45],
                            name: 'Seychelles'
                        }, {
                            latLng: [7.35, 134.46],
                            name: 'Palau'
                        }, {
                            latLng: [42.5, 1.51],
                            name: 'Andorra'
                        }, {
                            latLng: [14.01, -60.98],
                            name: 'Saint Lucia'
                        }, {
                            latLng: [6.91, 158.18],
                            name: 'Federated States of Micronesia'
                        }, {
                            latLng: [1.3, 103.8],
                            name: 'Singapore'
                        }, {
                            latLng: [1.46, 173.03],
                            name: 'Kiribati'
                        }, {
                            latLng: [-21.13, -175.2],
                            name: 'Tonga'
                        }, {
                            latLng: [15.3, -61.38],
                            name: 'Dominica'
                        }, {
                            latLng: [-20.2, 57.5],
                            name: 'Mauritius'
                        }, {
                            latLng: [26.02, 50.55],
                            name: 'Bahrain'
                        }, {
                            latLng: [0.33, 6.73],
                            name: 'São Tomé and Príncipe'
                        }]
                });
            });
        }

    };

    // Element Attribute Helper
    function getValue($el, data_var, default_val) {
        if (typeof $el.data(data_var) != 'undefined') {
            return $el.data(data_var);
        }

        return default_val;
    }
    jQuery(document).on("ready",function () {
        MAP_SETTINGS.jvectorMaps();
    });

});
