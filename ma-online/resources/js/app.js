
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
        $(".ld-main-nav").removeClass("text-black");
        $(".ld-login").removeClass("text-black");
        $(".ld-navbar").removeClass("shadow");
        $(".ld-main-nav").addClass("text-white");
        $(".ld-login").addClass("text-white");
        $(".ld-navbar").addClass("ld-transparent");
        $(".ld-top, .ld-meat, .ld-bottom").removeClass("bg-black");
        $(".ld-top, .ld-meat, .ld-bottom").addClass("bg-white");
    } else if ($(window).scrollTop() > 0) {
        $(".ld-navbar").removeClass("ld-transparent");
        $(".ld-main-nav").removeClass("text-white");
        $(".ld-login").removeClass("text-white");
        $(".ld-navbar").addClass("ld-white");
        $(".ld-main-nav").addClass("text-black");
        $(".ld-login").addClass("text-black");
        $(".ld-navbar").addClass("shadow");
        $(".ld-top, .ld-meat, .ld-bottom").addClass("bg-black");
        $(".ld-top, .ld-meat, .ld-bottom").removeClass("bg-white");
    }
});

// 2. Anchor link smooth scroll event
// logo
$('.ld-logo a').on('click', function(e) { 

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

// main menu
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

// mobile menu 
$('.ld-menu1 a').on('click', function(e) { 

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

// footer menu
$('.ld-footer div a').on('click', function(e) { 

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
