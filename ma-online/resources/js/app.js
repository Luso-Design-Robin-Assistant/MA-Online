
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
        $(".ld-navbar").addClass("bg-opacity-75");
        $(".ld-navbar").removeClass("shadow");
    } else if ($(window).scrollTop() > 0) {
        $(".ld-navbar").removeClass("bg-opacity-75");
        $(".ld-navbar").addClass("shadow");
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
