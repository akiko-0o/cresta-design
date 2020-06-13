var imgHeight = 300;
var header = $('.header__inner');

$(window).on('load scroll', function(){
    if ($(window).scrollTop() < imgHeight) {
    header.removeClass('transform');
    }else {
    header.addClass('transform');
    }
});
