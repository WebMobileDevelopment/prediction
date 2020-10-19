let swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    loop: true,
    resistance: true,
    resistanceRatio: 0,
    coverflowEffect: {
        rotate: -50,
        stretch: -20,
        depth: 700,
        modifier: 1,
        slideShadows: true,
    }
});


$(document).ready(function() {

    $(".list-mode").hide();
    $(".grid-slider").show();
    $(".top-footer .right .btn-1").css('background-color', 'rgb(30, 38, 55)');
    $(".top-footer .right .btn-2").css('background-color', 'transparent');

    $('.d-list').click(function() {
        $(".list-mode").show();
        $(".grid-slider").hide();
        $(".top-footer .right .btn-2").css('background-color', 'rgb(30, 38, 55)');
        $(".top-footer .right .btn-1").css('background-color', 'transparent');
        $(".top-footer .right .btn-2").css('z-index', '9999');
        $(".top-footer .right .btn-1").css('z-index', '-9999');
    });
    $('.d-slide').click(function() {
        $(".list-mode").hide();
        $(".grid-slider").show();
        $(".top-footer .right .btn-2").css('background-color', 'transparent');
        $(".top-footer .right .btn-1").css('background-color', 'rgb(30, 38, 55)');
        $(".top-footer .right .btn-2").css('z-index', '-9999');
        $(".top-footer .right .btn-1").css('z-index', '9999');
    });
});