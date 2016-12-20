/*--------light-Map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#light-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"color": "#000000"}]}, {"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative", "elementType": "labels.icon", "stylers": [{"hue": "#ff0000"}]}, {"featureType": "administrative.province", "elementType": "geometry.stroke", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "landscape.man_made", "elementType": "labels", "stylers": [{"saturation": "36"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#c2185b"}, {"visibility": "on"}]}]};

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
});

/*--------click-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#click-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            styles: [{"featureType": "administrative", "elementType": "all", "stylers": [{"visibility": "on"}, {"saturation": -100}, {"lightness": 20}]}, {"featureType": "road", "elementType": "all", "stylers": [{"visibility": "on"}, {"saturation": -100}, {"lightness": 40}]}, {"featureType": "water", "elementType": "all", "stylers": [{"visibility": "on"}, {"saturation": -10}, {"lightness": 30}]}, {"featureType": "landscape.man_made", "elementType": "all", "stylers": [{"visibility": "simplified"}, {"saturation": -60}, {"lightness": 10}]}, {"featureType": "landscape.natural", "elementType": "all", "stylers": [{"visibility": "simplified"}, {"saturation": -60}, {"lightness": 60}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}, {"saturation": -100}, {"lightness": 60}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}, {"saturation": -100}, {"lightness": 60}]}]};

        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        // Google Map Maker                    
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
});

/*--------polyline-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#polyline-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"visibility": "on"}, {"color": "#aee2e0"}]}, {"featureType": "landscape", "elementType": "geometry.fill", "stylers": [{"color": "#08898e"}]}, {"featureType": "poi", "elementType": "geometry.fill", "stylers": [{"color": "#769E72"}]}, {"featureType": "poi", "elementType": "labels.text.fill", "stylers": [{"color": "#7B8758"}]}, {"featureType": "poi", "elementType": "labels.text.stroke", "stylers": [{"color": "#EBF4A4"}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"visibility": "simplified"}, {"color": "#8dab68"}]}, {"featureType": "road", "elementType": "geometry.fill", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road", "elementType": "labels.text.fill", "stylers": [{"color": "#5B5B3F"}]}, {"featureType": "road", "elementType": "labels.text.stroke", "stylers": [{"color": "#ABCE83"}]}, {"featureType": "road", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "road.local", "elementType": "geometry", "stylers": [{"color": "#A4C67D"}]}, {"featureType": "road.arterial", "elementType": "geometry", "stylers": [{"color": "#9BBF72"}]}, {"featureType": "road.highway", "elementType": "geometry", "stylers": [{"color": "#EBF4A4"}]}, {"featureType": "transit", "stylers": [{"visibility": "off"}]}, {"featureType": "administrative", "elementType": "geometry.stroke", "stylers": [{"visibility": "on"}, {"color": "#87ae79"}]}, {"featureType": "administrative", "elementType": "geometry.fill", "stylers": [{"color": "#7f2200"}, {"visibility": "off"}]}, {"featureType": "administrative", "elementType": "labels.text.stroke", "stylers": [{"color": "#ffffff"}, {"visibility": "on"}, {"weight": 4.1}]}, {"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#495421"}]}, {"featureType": "administrative.neighborhood", "elementType": "labels", "stylers": [{"visibility": "off"}]}]};

        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        // Google Map Maker                    
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
});

/*--------lightness-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#lightness-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{"featureType": "landscape.natural", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"color": "#e0efef"}]}, {"featureType": "poi", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"hue": "#1900ff"}, {"color": "#c0e8e8"}]}, {"featureType": "road", "elementType": "geometry", "stylers": [{"lightness": 100}, {"visibility": "simplified"}]}, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off"}]}, {"featureType": "transit.line", "elementType": "geometry", "stylers": [{"visibility": "on"}, {"lightness": 700}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#7dcdcd"}]}]};

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
});

/*--------traffic-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#traffic-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{"featureType": "all", "elementType": "labels", "stylers": [{"visibility": "off"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#f3f4f4"}]}, {"featureType": "landscape.man_made", "elementType": "geometry", "stylers": [{"weight": 0.9}, {"visibility": "off"}]}, {"featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{"visibility": "on"}, {"color": "#83cead"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#ffffff"}]}, {"featureType": "road", "elementType": "labels", "stylers": [{"visibility": "off"}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#fb8c00"}]}, {"featureType": "road.arterial", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#fb8c00"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"visibility": "on"}, {"color": "#7fc8ed"}]}]};

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
});

/*--------basic-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
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
});

/*--------sky-blue-map----------*/
jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('#sky-blue-map');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400), // New York
            styles: [{"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#36a9e1"}]}, {"featureType": "landscape", "elementType": "geometry", "stylers": [{"color": "#8ed3f5"}]}, {"featureType": "road", "elementType": "geometry", "stylers": [{"color": "#29768a"}, {"lightness": -37}]}, {"featureType": "poi", "elementType": "geometry", "stylers": [{"color": "#36a9e1"}]}, {"featureType": "transit", "elementType": "geometry", "stylers": [{"color": "#36a9e1"}]}, {"elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}, {"color": "#3e606f"}, {"weight": 2}, {"gamma": 0.84}]}, {"elementType": "labels.text.fill", "stylers": [{"color": "#ffffff"}]}, {"featureType": "administrative", "elementType": "geometry", "stylers": [{"weight": 0.6}, {"color": "#1a3541"}]}, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "poi.park", "elementType": "geometry", "stylers": [{"color": "#2c5a71"}]}]};

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
});

/*--------45-map----------*/
function init() {
    var map;
    map = new google.maps.Map(document.getElementById('45-map'), {
        center: {lat: 45.518, lng: -122.672},
        zoom: 18,
        mapTypeId: google.maps.MapTypeId.SATELLITE,
        heading: 90,
        tilt: 45
    });

    function rotate90() {
        var heading = map.getHeading() || 0;
        map.setHeading(heading + 90);
    }

    function autoRotate() {
        if (map.getTilt() !== 0) {
            window.setInterval(rotate90, 3000);
        }
    }
}
google.maps.event.addDomListener(window, 'load', init);



