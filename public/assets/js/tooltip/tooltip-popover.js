jQuery(document).on("ready",function ($) {
    "use strict";

    // Define any icon actions before calling the toolbar
    jQuery('.toolbar-icons a').on('click', function (event) {
        event.preventDefault();
    });

    jQuery('div[data-toolbar="user-options"]').toolbar({
        content: '#user-options',
        position: 'bottom',
    });

    jQuery('div[data-toolbar="transport-options"]').toolbar({
        content: '#transport-options',
        position: 'top',
    });

    jQuery('div[data-toolbar="transport-options-o"]').toolbar({
        content: '#transport-options-o',
        position: 'bottom',
        event: 'click',
        hideOnClick: true,
    });

    jQuery('div[data-toolbar="content-option"]').toolbar({
        content: '#transport-options',
    });

    jQuery('div[data-toolbar="position-option"]').toolbar({
        content: '#transport-options',
        position: 'bottom',
    });

    jQuery('div[data-toolbar="style-option"]').toolbar({
        content: '#transport-options',
        position: 'bottom',
        style: 'primary',
    });

    jQuery('div[data-toolbar="animation-option"]').toolbar({
        content: '#transport-options',
        position: 'bottom',
        style: 'primary',
        animation: 'flyin'
    });

    jQuery('div[data-toolbar="event-option"]').toolbar({
        content: '#transport-options',
        position: 'bottom',
        style: 'primary',
        event: 'click',
    });

    jQuery('div[data-toolbar="hide-option"]').toolbar({
        content: '#transport-options',
        position: 'bottom',
        style: 'primary',
        event: 'click',
        hideOnClick: true
    });

    jQuery('#link-toolbar').toolbar({
        content: '#user-options',
        position: 'top',
        event: 'click',
        adjustment: 35
    });

    jQuery('div[data-toolbar="set-01"]').toolbar({
        content: '#set-01-options',
        position: 'top',
    });

    jQuery('div[data-toolbar="set-02"]').toolbar({
        content: '#set-02-options',
        position: 'left',
    });

    jQuery('div[data-toolbar="set-03"]').toolbar({
        content: '#set-03-options',
        position: 'bottom',
    });

    jQuery('div[data-toolbar="set-04"]').toolbar({
        content: '#set-04-options',
        position: 'right',
    });

    jQuery(".download").on('click', function () {
        mixpanel.track("Toolbar.Download");
    });

    jQuery("#transport-options-2").find('a').on('click', function () {
        $this = jQuery(this);
        $button = jQuery('div[data-toolbar="transport-options-2"]');
        $newClass = $this.find('i').attr('class').substring(3);
        $oldClass = $button.find('i').attr('class').substring(3);
        if ($newClass != $oldClass) {
            $button.find('i').animate({
                top: "+=50",
                opacity: 0
            }, 200, function () {
                jQuery(this).removeClass($oldClass).addClass($newClass).css({top: "-=100", opacity: 1}).animate({
                    top: "+=50"
                });
            });
        }

    });

    jQuery('div[data-toolbar="transport-options-2"]').toolbar({
        content: '#transport-options-2',
        position: 'top',
    });


});
(function () {

    var settings = {
        trigger: 'click',
        title: 'Pop Title',
        content: '<p>This is webui popover demo.</p><p>just enjoy it and have fun !</p>',
        width: 300,
        multi: true,
        closeable: false,
        style: '',
        delay: 300,
        padding: true
    };

    jQuery('.btn-settings').on('click', function (e) {
        e.preventDefault();
        jQuery(this).addClass('active').siblings().removeClass('active');
        var option = jQuery(this).data('option');
        settings[option] = jQuery(this).data(option);
        initPopover();
    });

    jQuery('.btn-reset').on('click', function (e) {
        e.preventDefault();
        location.reload();
    });


    function initPopover() {
        jQuery('a.show-pop').webuiPopover('destroy').webuiPopover(settings);

        var tableContent = jQuery('#tableContent').html(),
                tableSettings = {content: tableContent,
                    width: 500
                };
        jQuery('a.show-pop-table').webuiPopover('destroy').webuiPopover($.extend({}, settings, tableSettings));

        var listContent = jQuery('#listContent').html(),
                listSettings = {content: listContent,
                    title: '',
                    padding: false
                };
        jQuery('a.show-pop-list').webuiPopover('destroy').webuiPopover($.extend({}, settings, listSettings));

        var largeContent = jQuery('#largeContent').html(),
                largeSettings = {content: largeContent,
                    width: 400,
                    height: 350,
                    delay: {show: 300, hide: 1000},
                    closeable: true
                };
        var popLarge = jQuery('a.show-pop-large').webuiPopover('destroy').webuiPopover($.extend({}, settings, largeSettings));


        jQuery('a.show-pop-delay').webuiPopover('destroy').webuiPopover({trigger: 'hover', width: 300, height: 200});
        jQuery('a.show-pop-code-delay').webuiPopover('destroy').webuiPopover({
            trigger: 'hover',
            width: 300,
            height: 200,
            delay: {
                show: 1000,
                hide: 1000
            }
        });

        var
                iframeSettings = {width: 500,
                    height: 350,
                    closeable: true,
                    padding: false,
                    type: 'iframe',
                    url: 'http://getbootstrap.com'};
        jQuery('a.show-pop-iframe').webuiPopover('destroy').webuiPopover($.extend({}, settings, iframeSettings));


        var
                asyncSettings = {width: 'auto',
                    height: '200',
                    closeable: true,
                    padding: false,
                    cache: false,
                    url: 'https://api.github.com/',
                    type: 'async',
                    content: function (data) {
                        var html = '<ul class="list-group">';
                        for (var key in data) {
                            html += '<li class="list-group-item"><a href="' + data[key] + '" target="_blank">'
                                    + '<i class="icon  icon_tag_alt"></i> ' + key + '</a>' + '</li>';
                        }
                        html += '</ul>';
                        return html;
                    }};
        jQuery('a.show-pop-async').webuiPopover('destroy').webuiPopover($.extend({}, settings, asyncSettings));





        jQuery('a.show-pop-event').each(function (i, item) {
            var ename = jQuery(item).text() + '.webui.popover';
            jQuery(item).webuiPopover('destroy').webuiPopover(settings)
                    .on(ename, function (e) {
                        var log = ename + ' is trigged!';
                        if (console) {
                            console.log(log);
                        }
                        jQuery('#eventLogs').text(jQuery('#eventLogs').text() + '\n' + log);
                    });
        });


        jQuery('body').on('click', '.pop-click', function (e) {
            e.preventDefault();
            console.log('clicked');
        });

    }

    jQuery('#resetLogs').on('click', function (e) {
        e.preventDefault();
        jQuery('#eventLogs').text('');
    });

    initPopover();

})();