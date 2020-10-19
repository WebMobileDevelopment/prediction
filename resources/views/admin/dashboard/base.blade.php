<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.0.0-alpha.1
* @link https://coreui.io
* Copyright (c) 2019 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<base href="./">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
<meta name="author" content="Łukasz Holeczek">
<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
<title>Prediction</title>
{{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}">

<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/ms-icon-144x144.png') }}">
<meta name="theme-color" content="#ffffff"> --}}

<!-- Icons-->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap-v4.4.1.css') }}" rel="stylesheet">
<link href="{{ asset('assets/datetimepicker/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">

<link href="{{ asset('render/css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
<link href="{{ asset('render/css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
{{-- <link href="{{ asset('assets/css/cropper-v1.5.6.css') }}" rel="stylesheet"> <!-- icons --> --}}
{{-- <link href="{{ asset('assets/css/cropper_style.css') }}" rel="stylesheet"> <!-- icons --> --}}
<!-- Main styles for this application-->
<link href="{{ asset('render/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('render/css/coreui-chartjs.css') }}" rel="stylesheet">
@toastr_css
@yield('css')

<script src="{{ asset('assets/js/jquery-3.4.1.js') }}"></script>
{{-- @jquery --}}
@toastr_js
@toastr_render
<!-- Global site tag (gtag.js) - Google Analytics-->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
    var CUSTOM_CROP_OPTIONS = {
        aspectRatio: NaN,
    }

</script>
</head>



<body class="c-app">
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

        @include('admin.dashboard.shared.nav-builder')

        @include('admin.dashboard.shared.header')

        <div class="c-body">

            <main class="c-main">

                @yield('content')

            </main>
            @include('admin.dashboard.shared.footer')
        </div>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
    @endif
</body>
</html>
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('render/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('render/js/coreui-utils.js') }}"></script>
<script src="{{ asset('assets/datetimepicker/js/moment.min.js') }}"></script>
<script src="{{ asset('assets/datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap-4.4.1.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/cropper/cropper-v1.5.6.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/cropper/cropper_script.js') }}"></script> --}}
<script src="{{ asset('assets/js/img_upload.js') }}"></script>

<script>
    toastr.options.timeOut = 1000;
    toastr.options.extendedTimeOut = 0;
    $(function() {
        $(".alert").fadeTo(2000, 500).slideUp(500, function() {
            $(".alert").slideUp(500);
        });
    })

</script>
@yield('javascript')
