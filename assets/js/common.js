
$(function(){



var imgHeight = 300;
var header = $('.header__inner');

$(window).on('load scroll', function(){
    if ($(window).scrollTop() < imgHeight) {
    header.removeClass('transform');
    }else {
    header.addClass('transform');
    }
});


　$('.header__nav_sp').click(function() {
    　　$(this).toggleClass('active');

    　if ($(this).hasClass('active')) {
    　　$('.header__nav').addClass('active');
    　} else {
    　　$('.header__nav').removeClass('active');
    　}
    　});


$('a[href^="#"]').click(function() {
    var speed = 500;
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    position = position - $("header").outerHeight();
    var url = location.href;
    $("html, body").animate({ scrollTop: position }, speed, "swing");
    return false;
});

});