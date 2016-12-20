!function (document, window, $) {
    "use strict";
    var $grid = jQuery('.filter-gallery');
    $grid.imagesLoaded(function () {
        $grid.isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
    });


    var filterFns = {};
    jQuery('.filters-li-group').on('click', 'a', function (e) {
        var filterValue = jQuery(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({filter: filterValue});
    });
    jQuery('.li-group').each(function (i, buttonGroup) {

        var $buttonGroup = jQuery(buttonGroup);
        $buttonGroup.on('click', 'a', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            jQuery(this).addClass('is-checked');
        });
    });
}(document, window, jQuery);

