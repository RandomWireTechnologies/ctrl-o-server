jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('.map-canvas1');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        };
        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        // Black and White style for Google Map                       
        var styles = [
            {
                stylers: [
                    {hue: "#36a9e1"},
                    {saturation: 40}
                ]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    {lightness: 100},
                    {visibility: "simplified"}
                ]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    {visibility: "off"}
                ]
            }
        ];
        map.setOptions({styles: styles});
        // Google Map Maker                    
        var marker = new google.maps.Marker({
            position: myLatlng,
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




jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('.map-canvas2');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        };
        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        // Black and White style for Google Map                       
        var styles = [
            {
                stylers: [
                    {hue: "#36a9e1"},
                    {saturation: 40}
                ]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    {lightness: 100},
                    {visibility: "simplified"}
                ]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    {visibility: "off"}
                ]
            }
        ];
        map.setOptions({styles: styles});
        // Google Map Maker                    
        var marker = new google.maps.Marker({
            position: myLatlng,
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



jQuery(document).on("ready", function ()
{
    'use strict';
    var elem = jQuery('.map-canvas3');
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.622872, -79.187470);
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        };
        var map = new google.maps.Map(elem[0], mapOptions);
        // Disabled Map Scroll in Contact Page                         
        map.setOptions({'scrollwheel': false});

        // Black and White style for Google Map                       
        var styles = [
            {
                stylers: [
                    {hue: "#36a9e1"},
                    {saturation: 40}
                ]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    {lightness: 100},
                    {visibility: "simplified"}
                ]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    {visibility: "off"}
                ]
            }
        ];
        map.setOptions({styles: styles});
        // Google Map Maker                    
        var marker = new google.maps.Marker({
            position: myLatlng,
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
            