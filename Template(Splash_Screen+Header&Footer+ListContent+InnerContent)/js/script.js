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

/* ----------------------- Start Audio Inner Content Js ----------------------- */
var audio = document.getElementById("audio-player");
$(document).ready(function () {
    $("#play-button").click(function () {
        if ($(this).hasClass("unchecked")) {
            $(this)
                .addClass("play-active")
                .removeClass("play-inactive")
                .removeClass("unchecked");
            $(".info-two")
                .addClass("info-active");
            $("#pause-button")
                .addClass("scale-animation-active");
            $(".waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two").show();
            $(".waves-animation-two").hide();
            $("#pause-button")
                .children('.icon')
                .addClass("fa fa-pause")
                .removeClass("fas fa-play");
            setTimeout(function () {
                $(".info-one").hide();
            }, 400);
            audio.play();
            audio.currentTime = 0;
        } else {
            $(this)
                .removeClass("play-active")
                .addClass("play-inactive")
                .addClass("unchecked");
            $("#pause-button")
                .children(".icon")
                .addClass("fa fa-pause")
                .removeClass("fas fa-play");
            $(".info-two")
                .removeClass("info-active");
            $(".waves-animation-one, #pause-button, .seek-field, .volume-icon, .volume-field, .info-two").hide();
            $(".waves-animation-two").show();
            setTimeout(function () {
                $(".info-one").show();
            }, 150);
            audio.pause();
            audio.currentTime = 0;
        }
    });
    $("#pause-button").click(function () {
        $(this).children(".icon")
            .toggleClass("fa fa-pause")
            .toggleClass("fas fa-play");

        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
        }
    });
    $("#play-button").click(function () {
        setTimeout(function () {
            $("#play-button").children(".icon")
                .toggleClass("fas fa-play")
                .toggleClass("fas fa-times");
        }, 350);
    });
    $(".like").click(function () {
        $(".icon-heart").toggleClass("like-active");
    });
});

function CreateSeekBar() {
    var seekbar = document.getElementById("audioSeekBar");
    seekbar.min = 0;
    seekbar.max = audio.duration;
    seekbar.value = 0;
}

function EndofAudio() {
    document.getElementById("audioSeekBar").value = 0;
}

function audioSeekBar() {
    var seekbar = document.getElementById("audioSeekBar");
    audio.currentTime = seekbar.value;
}

function SeekBar() {
    var seekbar = document.getElementById("audioSeekBar");
    seekbar.value = audio.currentTime;
}

audio.addEventListener("timeupdate", function () {
    var duration = document.getElementById("duration");
    var s = parseInt(audio.currentTime % 60);
    var m = parseInt((audio.currentTime / 60) % 60);
    duration.innerHTML = m + ':' + s;
}, false);

Waves.init();
Waves.attach("#play-button", ["waves-button", "waves-float"]);
Waves.attach("#pause-button", ["waves-button", "waves-float"]);
/* ----------------------- End Audio Inner Content Js ----------------------- */

/* ----------------------- Start Focus Out Menu Bar ----------------------- */
// $(document).ready(function () {
//     $(".main").click(function () {
//         $('#menu-toggle').prop('checked', true);
//     });
// });
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