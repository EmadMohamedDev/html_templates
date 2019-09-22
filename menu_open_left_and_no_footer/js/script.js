/* ----------------------- Start Preloader ----------------------- */
// $(window).ready(function () {
//     $('#preloader').fadeOut('slow', function () {
//         $(this).remove();
//     });
// });
/* ----------------------- End Preloader ----------------------- */

/* ----------------------- Start Back Botton ----------------------- */
$(document).on('click', '.back_botton', function () {
    parent.history.back();
    //$.mobile.back();
});
/* ----------------------- End Back Botton ----------------------- */

/* ----------------------- Start Active Links ----------------------- */
$(function () {
    var url = window.location.pathname, //   /alafasy_webapp_new_design2/design2/home.php
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
    // create regexp to match current url pathname and remove trailing slash if present
    //  as it could collide with the link in navigation in case trailing slash wasn't present there
    // console.log("Url: " + url);
    // console.log("url.replace: " + url.replace(/\/$/, '')); // this remove lastest /     as $  mean in the end   and  \/  mena /  So \/$  mean the last / 
    // console.log("urlRegExp: " + urlRegExp);
    // now grab every link from the navigation
    $('aside ul li a').each(function () {
        // and test its normalized href against the url pathname regexp
        // console.log("this.href: " +this.href)
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).addClass('active');
        }
    });
});
/* ----------------------- End Active Links ----------------------- */

/* ----------------------- Start Menu Overlay ----------------------- */
$('.menu, #overlay').click(function () {
    $('aside').toggleClass('showAside');
    $("#overlay").toggleClass("overlay");
    $("#overlay").toggleClass("add");
});
/* ----------------------- End Menu Overlay ----------------------- */