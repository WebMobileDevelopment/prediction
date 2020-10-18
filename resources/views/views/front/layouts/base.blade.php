{{--
<!DOCTYPE HTML> --}}
<!DOCTYPE html
    PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.2//EN" "http://www.openmobilealliance.org/tech/DTD/xhtml-mobile12.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    {{--
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    --}}
    <meta name="viewport" content="width=400, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    {{--
    <meta name="viewport" content="width=944 , initial-scale=1.0, shrink-to-fit=no" /> --}}
    <title>Games Predictions</title>
    <link href="{{ asset('assets/css/bootstrap-v4.4.1.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('front/styles/style.css') }}" rel="stylesheet"> <!-- css -->
    <link href="{{ asset('front/fonts/google_font.css') }}" rel="stylesheet">
    <link href="{{ asset('front/fonts/css/fontawesome-all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/_manifest.json') }}" rel="manifest" data-pwa-version="set_in_manifest_and_pwa_js">
    <link href="{{ asset('front/app/icons/icon-192x192.png') }}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{ asset('render/css/front/custom.css') }}" rel="stylesheet"> <!-- sass -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>



    </style>
</head>

<body class="theme-dark" data-background="none" data-highlight="red2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">

        @include('front.layouts.header')

        @yield('page-content')

        @include('front.layouts.footer')

    </div>
    <script src="{{ asset('assets/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-v4.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @yield('javascript')
</body>

</html>
