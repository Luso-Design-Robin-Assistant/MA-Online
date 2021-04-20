
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
