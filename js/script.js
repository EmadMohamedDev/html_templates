/* ----------------------- Start Back Botton ----------------------- */
$(document).on('click', '.back', function () {
    'use strict';
    parent.history.back();
});
/* ----------------------- End Back Botton ----------------------- */

/* ----------------------- Start Loading Screen ----------------------- */
$(window).on('load', function () {
    'use strict';
    $('.loading-overlay .spinner').fadeOut(800, function () {
        $(this).parent().fadeOut(500, function () {
            $('body').css('overflow', 'auto');
            $(this).remove();
        });
    });
});
/* ----------------------- End Loading Screen ----------------------- */

/* ----------------------- Start Heart ----------------------- */
$('.heart').click(function () {
    $(this).toggleClass('active-heart');
});
/* ----------------------- End Heart ----------------------- */

/* ----------------------- Start Focus Out Menu Bar ----------------------- */
$(document).ready(function () {
    $(".main").click(function () {
        $('#menu-toggle').prop('checked', false);
    });
});
/* ----------------------- End Focus Out Menu Bar ----------------------- */

/* ----------------------- Start Active Links ----------------------- */
$(function () {
    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
    $('nav ul li a').each(function () {
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).addClass('active');
        }
    });

    $('nav ul li ul li a').each(function () {
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            $(this).addClass('active');
            $(this).parent().parent().css('display', 'block');
        }
    });
});
/* ----------------------- End Active Links ----------------------- */

/* ----------------------- Start Menu Overlay ----------------------- */
$(function () {
    var Accordion = function (el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables privadas
        var links = this.el.find('.link');
        // Evento
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function (e) {
        var $el = e.data.el;
        $this = $(this),
            $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if (!e.data.multiple) {
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        };
    };

    var accordion = new Accordion($('#accordion'), false);
});
/* ----------------------- End Menu Overlay ----------------------- */

/* ----------------------- Start Owl Carousel ----------------------- */
$('.owl-one').owlCarousel({
    center: false,
    rtl: true,
    loop: false,
    //margin: 10,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
$(".owl-prev").html('<i class="fas fa-chevron-circle-left"></i>');
$(".owl-next").html('<i class="fas fa-chevron-circle-right"></i>');
/* ----------------------- End Owl Carousel ----------------------- */