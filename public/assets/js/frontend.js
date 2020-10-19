$(function() {
    var swiper_available = $('.swiper-wrapper').children().length;
    var prev_obj = undefined;
    var zoom_out_css = {
        'width': "170%",
        'height': '60vh',
        'font-size': '2em',
        'line-height': '2em',
        'left': '-35%'
    };
    var zoom_in_css = {
        'width': "100%",
        'height': '45vh',
        'font-size': '1em',
        'line-height': '1em',
        'left': '0'
    }

    if (swiper_available) {
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


        swiper.on('transitionEnd', function() {
            if (prev_obj) {
                prev_obj.css(zoom_in_css);
                prev_obj = undefined;
            }
            $(swiper.slides[swiper.previousIndex]).find(".flip-card .flip-card-inner").css("transform", "rotateY(0deg)");
        });

        $(".flip-card-button").on('click', function() {
            $(".swiper-slide-active .flip-card .flip-card-inner").css("transform",
                "rotateY(180deg)");
            origin_styleProps = $(swiper.slides[swiper.activeIndex]).css([
                "width", "height", "font-size", "line-height", "left"
            ]);
            prev_obj = $(swiper.slides[swiper.activeIndex]);
            prev_obj.css(zoom_out_css);
        })

        $(".flip-back-button").on('click', function() {
            if (prev_obj) {
                prev_obj.css(zoom_in_css);
                prev_obj = undefined;
            }
            $(".flip-card .flip-card-inner").css("transform", "rotateY(0deg)");
        })
    }





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
    $('div.countdown_timer').each(function() {
        var final_date = $(this).attr('final_date');
        $(this).countdown(final_date, function(event) {
            $(this).html(event.strftime('' +
                '<span>%H</span>h:' +
                '<span>%M</span>m:' +
                '<span>%S</span>s'));
        })
    });
    $('div.countdown_timer').countdown('2020/10/16', function(event) {
        var $this = $(this).html(event.strftime('' +
            '<span>%H</span>h:' +
            '<span>%M</span>m:' +
            '<span>%S</span>s'));
    });
    $('div#timer2').countdown('2020/10/17', function(event) {
        var $this = $(this).html(event.strftime('' +
            '<span>%H</span>h:' +
            '<span>%M</span>m:' +
            '<span>%S</span>s'));
    });
    $('div#timer3').countdown('2020/10/18', function(event) {
        var $this = $(this).html(event.strftime('' +
            '<span>%H</span>h:' +
            '<span>%M</span>m:' +
            '<span>%S</span>s'));
    });


    function set_transform(id, value) {
        $("#" + id).css({
            '-webkit-transform': value,
            '-moz-transform': value,
            '-ms-transform': value,
            '-o-transform': value,
            'transform': value
        });
    };
    var menu_hidden = true;


    $(".menu-btn").on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (menu_hidden) {
            $(".menu-items").css('display', 'block');
            $(".menu-items").css('width', '100%');
            $(".menu-items").css('height', '100vh');
            $(".menu-items").css('padding-top', 'calc(100vh - 60px)');
            $("#body-text").css('opacity', '0.3');
            set_transform("item-1", 'translateX(-150px)');
            set_transform("item-2", 'translate(-80px, -100px)');
            set_transform("item-3", 'translateY(-150px)');
            set_transform("item-4", 'translate(77px,-110px)');
            set_transform("item-5", 'translateX(150px)');
        } else {
            $(".menu-items").css('display', 'none');
            $("#body-text").css('opacity', '1');
            set_transform("item-1", 'translate(0)');
            set_transform("item-2", 'translate(0)');
            set_transform("item-3", 'translate(0)');
            set_transform("item-4", 'translate(0)');
            set_transform("item-5", 'translate(0)');
        }
        menu_hidden = !menu_hidden;
    });
})