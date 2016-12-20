jQuery(function () {
     "use strict";
    jQuery('#slideright').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top left',
            'inEffect': 'slideRight'
        });
    });
    jQuery('#slidetop-right').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'inEffect': 'slideRight'
        });
    });
    jQuery('#slideleft').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'inEffect': 'slideLeft'
        });
    });
    jQuery('#slideleft-bottom').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom left',
            'inEffect': 'slideLeft'
        });
    });
    jQuery('#effect-top').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom right',
            'inEffect': 'slideTop'
        });
    });
    jQuery('#effect-top-right').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'inEffect': 'slideTop'
        });
    });
    jQuery('#effect-bottom').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'inEffect': 'slideBottom'
        });
    });
    jQuery('#effect-bottom-right').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom right',
            'inEffect': 'slideBottom'
        });
    });
    jQuery('#effect-fade').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom right'
        });
    });
    jQuery('#effect-slideRight').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top left',
            'outEffect': 'slideRight'
        });
    });
    jQuery('#effect-slideRight-top').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'inEffect': 'slideRight',
            'outEffect': 'slideRight'
        });
    });
    jQuery('#effect-slideLeft').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'outEffect': 'slideLeft'
        });
    });
    jQuery('#slideTop').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom right',
            'outEffect': 'slideTop'
        });
    });
    jQuery('#slideBottom').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'bottom right',
            'outEffect': 'slideBottom'
        });
    });
    jQuery('#delay').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'delay': 5000
        });
    });
    jQuery('#sticky').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'sticky': true
        });
    });
    jQuery('#bounceOut').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'cssanimationIn': 'swing',
            'cssanimationOut': 'bounceOut'
        });
    });
    jQuery('#rollOut').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'cssanimationIn': 'tada',
            'cssanimationOut': 'rollOut'
        });
    });
    jQuery('#zoomOutUp').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'cssanimationIn': 'boundeInDown',
            'cssanimationOut': 'zoomOutUp',
            'position': 'bottom right'
        });
    });
    jQuery('#bounceInRight').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'cssanimationIn': 'bounceInRight',
            'cssanimationOut': 'rollOut',
            'position': 'bottom right'
        });
    });
    jQuery('#shake').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'cssanimationIn': 'shake',
            'cssanimationOut': 'fadeOutRight',
            'outEffect': 'slideRight',
            'position': 'bottom right'
        });
    });
    jQuery('#callback').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'position': 'top right',
            'afterEnd': function ()
            {
                alert('Hello');
            }
        });
    });
    jQuery('#onhover').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'resetTimeout': true,
            'closeOnClick': false
        });
    });
    jQuery('#overlay').on('click', function () {
        jQuery.amaran({
            'message': 'My positioning example.',
            'overlay': true,
            'sticky': true,
            'inEffect': 'slideTop',
            'outEffect': 'slideLeft',
            'overlayColor': '#A7A7A7'
        });
    });
});
