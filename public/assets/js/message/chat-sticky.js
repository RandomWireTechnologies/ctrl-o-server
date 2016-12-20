 $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 120) {
        $("body").addClass("sticky-chat-box");
    } else {
        $("body").removeClass("sticky-chat-box");
    }
});