<!doctype html>
<html lang="en">

<head>
    <title>Game</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-v4.2.1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('render/css/frontend.css') }}">
</head>

<body>
    <!-- theme -->
    <div class="theme">
        <!-- body text -->
        <div id="body-text">
            @include('user.layouts.header')
            @yield('page-content')
        </div>
        <!-- body text -->
        @include('user.layouts.menu_bottom')
    </div>
    <!-- theme -->

    @include('user.layouts.menu_popup')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-v4.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/frontend.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $('div#timer1').countdown('2020/10/16', function(event) {
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

            var i = 0;

            function pop() {
                if (i == 0) {
                    document.querySelector(".menu-items").style.display = 'block';
                    document.getElementById("body-text").style.opacity = '0.1';
                    document.getElementById("item-1").style.transform = 'translateX(-150px)';
                    document.getElementById("item-2").style.transform = 'translate(-80px, -100px)';
                    document.getElementById("item-3").style.transform = 'translateY(-150px)';
                    document.getElementById("item-4").style.transform = 'translate(77px, -110px)';
                    document.getElementById("item-5").style.transform = 'translateX(150px)';
                    i = 1;
                } else {
                    document.querySelector(".menu-items").style.display = 'none';
                    document.getElementById("body-text").style.opacity = '1';
                    document.getElementById("item-1").style.transform = 'translate(0)';
                    document.getElementById("item-2").style.transform = 'translate(0)';
                    document.getElementById("item-3").style.transform = 'translate(0)';
                    document.getElementById("item-4").style.transform = 'translate(0)';
                    document.getElementById("item-5").style.transform = 'translate(0)';
                    i = 0;
                }
            }
        })

    </script>
</body>

</html>
