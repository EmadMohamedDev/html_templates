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