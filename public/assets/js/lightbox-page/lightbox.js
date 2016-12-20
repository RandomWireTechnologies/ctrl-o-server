!function (document, window, $) {
    "use strict";

    jQuery('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    jQuery('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    jQuery('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom',
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300
        }
    });


    jQuery("#pageZoomGallery").magnificPopup({
        delegate: "a",
        type: "image",
        closeOnContentClick: !1,
        closeBtnInside: !1,
        mainClass: "mfp-with-zoom mfp-img-mobile",
        image: {
            verticalFit: !0,
            titleSrc: function (item) {
                return item.el.attr("title") + ' &middot; <a class="image-source-link" href="' + item.el.attr("data-source") + '" target="_blank">image source</a>'
            }
        },
        gallery: {
            enabled: !0
        },
        zoom: {
            enabled: !0,
            duration: 300,
            opener: function (element) {
                return element.find("img")
            }
        }
    }), jQuery("#pageGallery").magnificPopup({
        delegate: "a",
        type: "image",
        tLoading: "Loading image #%curr%...",
        mainClass: "mfp-img-mobile",
        gallery: {
            enabled: !0,
            navigateByImgClick: !0,
            preload: [0, 1]
        },
        image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function (item) {
                return item.el.attr("title") + "<small>by amazingSurge</small>"
            }
        }
    }), jQuery(".popup-with-css-anim").magnificPopup({
        type: "image",
        removalDelay: 500,
        preloader: !0,
        callbacks: {
            beforeOpen: function () {
                this.st.image.markup = this.st.image.markup.replace("mfp-figure", "mfp-figure mfp-with-anim"), this.st.mainClass = this.st.el.attr("data-effect")
            }
        },
        closeOnContentClick: !0,
        midClick: !0
    }), jQuery(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
        disableOn: 700,
        type: "iframe",
        mainClass: "mfp-fade",
        removalDelay: 160,
        preloader: !1,
        fixedContentPos: !1
    }), jQuery("#pagePopupForm").magnificPopup({
        type: "inline",
        preloader: !1,
        focus: "#inputName",
        callbacks: {
            beforeOpen: function () {
                jQuery(window).width() < 700 ? this.st.focus = !1 : this.st.focus = "#inputName"
            }
        }
    }), jQuery("#pagePopupAjaxAlignTop").magnificPopup({
        type: "ajax",
        alignTop: !0,
        overflowY: "scroll"
    }), jQuery("#pagePopupAjax").magnificPopup({
        type: "ajax"
    }), jQuery(".popup-modal").magnificPopup({
        type: "inline",
        preloader: !1,
        modal: !0
    }), jQuery(document).on("click", ".popup-modal-dismiss", function (e) {
        e.preventDefault(), jQuery.magnificPopup.close()
    }), jQuery("#pageBrokenImage, #pageBrokenAjax").magnificPopup({}),
            jQuery('#image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }
    }), jQuery('#image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    }), $('#image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    }), $('#dataimage').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    }), $('#dataimage2').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    }), $('#dataimage3').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    })
}(document, window, jQuery);