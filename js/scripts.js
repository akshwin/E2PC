$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: false, // Disable looping
        margin: 10, // Space between items
        nav: true,  // Enable navigation arrows
        items: 5,   // Number of visible items
        autoplay: false, // Disable autoplay if on
    });
});

$(function(){$("a.shownav").on("click",function(){$("nav.headernav").slideDown(),$(this).next("a.hidenav").fadeIn(),$(this).hide()}),$("a.hidenav").on("click",function(){$("nav.headernav").fadeOut(),$(this).prev("a.shownav").fadeIn(),$(this).hide()}),$("nav ul li").on("click",function(){$("nav.headernav").fadeOut("slow"),$("a.hidenav").hide(),$("a.shownav").fadeIn()}),$(window).scroll(function(){$(this).scrollTop()>=100?$("header").addClass("fixed"):$("header").removeClass("fixed")}),$(".galleryslider").owlCarousel({loop:!0,margin:20,responsive:{360:{items:2},640:{items:3},900:{items:4},1200:{items:5},1600:{items:6}}}),$("a.playicon").click(function(){$(".videobox video").trigger("play"),$("a.pauseicon").show(),$(this).hide()}),$("a.pauseicon").click(function(){$(".videobox video").trigger("pause"),$("a.playicon").show(),$(this).hide()})});



