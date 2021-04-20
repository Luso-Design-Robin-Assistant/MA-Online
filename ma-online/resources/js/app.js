
/* REQUIRED */

require('./bootstrap');

require('alpinejs');

/* 
*
*   CREATEB BY: Luso Design,
*   AUTHORS: Gijs Huitenga, Matthijs Berghuis,
*   DATE CREATED: 12-04-2021
*
*/

// 1. Header on scroll styling event
$(window).on("scroll", function() {
    if ($(window).scrollTop() == 0) {
        $(".ld-navbar").removeClass("ld-white");
        $(".ld-navbar").removeClass("text-black");
        $(".ld-navbar").removeClass("shadow");
        $(".ld-navbar").addClass("text-white");
        $(".ld-navbar").addClass("ld-transparent");
    } else if ($(window).scrollTop() > 0) {
        $(".ld-navbar").removeClass("ld-transparent");
        $(".ld-navbar").removeClass("text-white");
        $(".ld-navbar").addClass("ld-white");
        $(".ld-navbar").addClass("text-black");
        $(".ld-navbar").addClass("shadow");
    }
});

// 2. Anchor link smooth scroll event
$('.ld-main-nav li a').on('click', function(e) { 

    var el = $(e.target.getAttribute('href'));
    var elOffset = el.offset().top;
    var elHeight = el.height();
    var windowHeight = $(window).height();
    var offset;
  
    if (elHeight < windowHeight) {
        offset = elOffset - ((windowHeight / 2) - (elHeight / 2));
    }
    else {
        offset = elOffset;
    }
    var speed = 700;

    $('html, body').animate({scrollTop:offset}, speed);
});
