!function () {
    "use strict";
    var data = [{
            text: "Assets",
            href: "#Assets",
            state: {
                expanded: !1
            },
            nodes: [{
                    text: "css",
                    href: "#css",
                    nodes: [{
                            text: "bootstrap.css",
                            href: "#bootstrap.css",
                            icon: "fa fa-file-code-o"
                        }, {
                            text: "style.css",
                            href: "#style.css",
                            icon: "fa fa-file-code-o"
                        }]
                }, {
                    text: "fonts",
                    href: "#fonts",
                    nodes: [{
                            text: "font-awesome",
                            href: "#font-awesome"
                        }, {
                            text: "Elegant",
                            href: "#Elegant"
                        }]
                }, {
                    text: "images",
                    href: "#images",
                    nodes: [{
                            text: "image.jpg",
                            href: "#image.jpg",
                            icon: "fa fa-file-photo-o"
                        }, {
                            text: "logo.png",
                            href: "#logo.png",
                            icon: "fa fa-file-photo-o"
                        }]
                }]
        }, {
            text: "js",
            href: "#js",
            state: {
                expanded: !1
            },
            nodes: [{
                    text: "advance.js",
                    href: "#advance.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "chart.js",
                    href: "#chart.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "contect.js",
                    href: "#contect.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "calendar.js",
                    href: "#calendar.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "gallery.js",
                    href: "#gallery.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "form.js",
                    href: "#form.js",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "global.js",
                    href: "#global.js",
                    icon: "fa fa-file-code-o"
                }]
        }, {
            text: "Php",
            href: "#Php",
            state: {
                expanded: !0
            },
            nodes: [{
                    text: "gallery.php",
                    href: "#gallery.php",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "login.php",
                    href: "#login.php",
                    icon: "fa fa-file-code-o"
                }, {
                    text: "dashboard_v1.php",
                    href: "#dashboard_v1.php",
                    state: {
                        selected: !0
                    },
                    icon: "fa fa-file-code-o"
                }]
        }, {
            text: "media",
            href: "#media",
            state: {
                expanded: !1
            },
            nodes: [{
                    text: "song.mp3",
                    href: "#song.mp3",
                    icon: "fa fa-file-audio-o"
                }, {
                    text: "video.mp4",
                    href: "#video.mp4",
                    icon: "fa fa-file-video-o"
                }]
        }, {
            text: "global.js",
            href: "#global.js",
            icon: "fa fa-file-code-o"
        }, {
            text: "bower.json",
            href: "#bower.json",
            icon: "fa fa-file-code-o"
        }, {
            text: "cities.json",
            href: "#cities.json",
            icon: "fa fa-file-code-o"
        }, {
            text: "about.pdf",
            href: "#about.pdf",
            icon: "fa fa-file-pdf-o"

        }],
            
            options = $.extend({},{
                levels: 1,
                color: !1,
                backColor: !1,
                borderColor: !1,
                onhoverColor: !1,
                selectedColor: !1,
                selectedBackColor: !1,
                searchResultColor: !1,
                searchResultBackColor: !1,
                data: data,
                highlightSelected: !0
            });
    $("#code-tree").treeview(options)
}(document, window, jQuery);