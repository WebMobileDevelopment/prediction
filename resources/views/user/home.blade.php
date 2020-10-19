@extends('user.layouts.base')

@section('page-content')
    <!-- main -->
    <div class="main">
        <!-- slider -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 1; $i < 4; $i++)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        <img src="{{ asset('assets/images/front/my-ads/Banner-' . $i . '.jpg') }}" class="d-block w-100">
                    </div>
                @endfor
            </div>
        </div>
        <!-- slider -->
        <div class="grid-slider">
            <!-- container -->
            <div class="container">
                <!-- Swiper -->
                <div class="swiper-container py-4">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 3; $i++)
                            @include('user.elements.swiper-slide')
                        @endfor
                        {{-- <div class="swiper-slide">
                            <!-- flip -->
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <!-- front -->
                                    <div class="flip-card-front">
                                        <!-- card -->
                                        <div class="card">
                                            <div class="card-header text-muted font-weight-bold">
                                                <div class="note-title">
                                                    <div class="note-text">
                                                        IPL - T20
                                                    </div>
                                                </div>
                                                <div class="note-des">Indian premier league</div>
                                            </div>
                                            <div
                                                class="card-body d-flex flex-column justify-content-center align-items-center px-1 py-4">
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/CSK.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Chennai super Kings</div>
                                                    </div>
                                                </div>
                                                <div class="my-2 text-center">
                                                    <small>
                                                        Match Starts in
                                                    </small>
                                                    <div class="text-warning timer">
                                                        <div id="timer1"></div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/SRH.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Sunrise Hydrabad</div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 mb-2 text-center">
                                                    <button type="button" class="btn btn-success" onclick='
                                                              $(".flip-card .flip-card-inner").css("transform", "rotateY(180deg)");
                                                              '>
                                                        Predict & Win
                                                    </button>
                                                </div>
                                                <div class="text-center font-weight-bold small text-muted pb-3">
                                                    Absolutly Free & Win Big Prizes
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card -->
                                    </div>
                                    <!-- front -->
                                    <!-- back -->
                                    <div class="flip-card-back">
                                        <div
                                            class="flip-header d-flex align-items-center justify-content-between small px-2 py-1">
                                            <div class="">
                                                <i class="fa fa-arrow-left pr-2 text-muted"></i>
                                                <span class="text-muted">
                                                    Predict Below Questions Correctly
                                                </span>
                                            </div>
                                            <i class="fa fa-times-circle"
                                                onclick='$(".flip-card .flip-card-inner").css("transform", "rotateY(0deg)")'>
                                            </i>
                                        </div>
                                        <!-- s1 -->
                                        <div class="predict-s1 p-1 small">
                                            <div class="top-predict">
                                                Top Batsmen's
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s1 -->
                                        <!-- s2 -->
                                        <div class="predict-s2 small mt-1 p-2">
                                            <div class="top-predict">
                                                Top Bowlers
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s2 -->
                                        <div class="my-1 text-center">
                                            <a href="page4.html" class="btn btn-success btn-sm">
                                                Submit
                                            </a>
                                        </div>
                                        <div class="text-center font-weight-bold small text-muted pb-2">
                                            Absolutly Free & Win Big Prizes
                                        </div>
                                    </div>
                                    <!-- back -->
                                </div>
                            </div>
                            <!-- flip -->
                        </div>


                        <div class="swiper-slide">
                            <!-- flip -->
                            <div class="Secflip-card">
                                <div class="Secflip-card-inner">
                                    <!-- front -->
                                    <div class="Secflip-card-front">
                                        <!-- card -->
                                        <div class="card">
                                            <div class="card-header text-muted font-weight-bold">
                                                <div class="note-title">
                                                    <div class="note-text">
                                                        IPL - T20
                                                    </div>
                                                </div>
                                                <div class="note-des">Indian premier league</div>
                                            </div>
                                            <div
                                                class="card-body d-flex flex-column justify-content-center align-items-center px-1 py-4">
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/MI.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Mumbai Indians</div>
                                                    </div>
                                                </div>
                                                <div class="my-2 text-center">
                                                    <small>
                                                        Match Starts in
                                                    </small>
                                                    <div class="text-warning timer">
                                                        <div id="timer2"></div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/PUNJAB.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Kings XI Punjab</div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 mb-2 text-center">
                                                    <button type="button" class="btn btn-success"
                                                        onclick='$(".Secflip-card .Secflip-card-inner").css("transform", "rotateY(180deg)")'>
                                                        Predict & Win
                                                    </button>
                                                </div>
                                                <div class="text-center font-weight-bold small text-muted pb-3">
                                                    Absolutly Free & Win Big Prizes
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card -->
                                    </div>
                                    <!-- front -->
                                    <!-- back -->
                                    <div class="Secflip-card-back">
                                        <div
                                            class="Secflip-header d-flex align-items-center justify-content-between small px-2 py-1">
                                            <div class="">
                                                <i class="fa fa-arrow-left pr-2 text-muted"></i>
                                                <span class="text-muted">
                                                    Predict Below Questions Correctly
                                                </span>
                                            </div>
                                            <i class="fa fa-times-circle"
                                                onclick='$(".Secflip-card .Secflip-card-inner").css("transform", "rotateY(0deg)")'>
                                            </i>
                                        </div>
                                        <!-- s1 -->
                                        <div class="predict-s1 p-1 small">
                                            <div class="top-predict">
                                                Top Batsmen's
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s1 -->
                                        <!-- s2 -->
                                        <div class="predict-s2 small mt-1 p-2">
                                            <div class="top-predict">
                                                Top Bowlers
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s2 -->
                                        <div class="my-1 text-center">
                                            <a href="page4.html" class="btn btn-success btn-sm">
                                                Submit
                                            </a>
                                        </div>
                                        <div class="text-center font-weight-bold small text-muted pb-2">
                                            Absolutly Free & Win Big Prizes
                                        </div>
                                    </div>
                                    <!-- back -->
                                </div>
                            </div>
                            <!-- flip -->
                        </div>
                        <div class="swiper-slide">
                            <!-- flip -->
                            <div class="Thiflip-card">
                                <div class="Thiflip-card-inner">
                                    <!-- front -->
                                    <div class="Thiflip-card-front">
                                        <!-- card -->
                                        <div class="card">
                                            <div class="card-header text-muted font-weight-bold">
                                                <div class="note-title">
                                                    <div class="note-text">
                                                        IPL - T20
                                                    </div>
                                                </div>
                                                <div class="note-des">Indian premier league</div>
                                            </div>
                                            <div
                                                class="card-body d-flex flex-column justify-content-center align-items-center px-1 py-4">
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/DC.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Delhi Capitals</div>
                                                    </div>
                                                </div>
                                                <div class="my-2 text-center">
                                                    <small>
                                                        Match Starts in
                                                    </small>
                                                    <div class="text-warning timer">
                                                        <div id="timer1"></div>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-start align-items-center no-gutters">
                                                    <div class="col-auto">
                                                        <img src="assets/images/team-icons/KKR.png" height="19px">
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="font-weight-bold ml-3">Kolkata Knight Riders</div>
                                                    </div>
                                                </div>
                                                <div class="mt-3 mb-2 text-center">
                                                    <button type="button" class="btn btn-success"
                                                        onclick='$(".Thiflip-card .Thiflip-card-inner").css("transform", "rotateY(180deg)")'>
                                                        Predict & Win
                                                    </button>
                                                </div>
                                                <div class="text-center font-weight-bold small text-muted pb-3">
                                                    Absolutly Free & Win Big Prizes
                                                </div>
                                            </div>
                                        </div>
                                        <!-- card -->
                                    </div>
                                    <!-- front -->
                                    <!-- back -->
                                    <div class="Thiflip-card-back">
                                        <div
                                            class="Thiflip-header d-flex align-items-center justify-content-between small px-2 py-1">
                                            <div class="">
                                                <i class="fa fa-arrow-left pr-2 text-muted"></i>
                                                <span class="text-muted">
                                                    Predict Below Questions Correctly
                                                </span>
                                            </div>
                                            <i class="fa fa-times-circle"
                                                onclick='$(".Thiflip-card .Thiflip-card-inner").css("transform", "rotateY(0deg)")'>
                                            </i>
                                        </div>
                                        <!-- s1 -->
                                        <div class="predict-s1 p-1 small">
                                            <div class="top-predict">
                                                Top Batsmen's
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Batsmen
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s1 -->
                                        <!-- s2 -->
                                        <div class="predict-s2 small mt-1 p-2">
                                            <div class="top-predict">
                                                Top Bowlers
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/CSK.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select CSK Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                            <div class="border d-flex justify-content-between align-items-center p-1">
                                                <div class="d-flex align-items-center">
                                                    <img src="assets/images/team-icons/SRH.png" width="25px">
                                                    <div class="pl-3 text-weight-bold">
                                                        Select SHR Top Bowlers
                                                    </div>
                                                </div>
                                                <i class="fa fa-plus"></i>
                                            </div>
                                        </div>
                                        <!-- s2 -->
                                        <div class="my-1 text-center">
                                            <a href="page4.html" class="btn btn-success btn-sm">
                                                Submit
                                            </a>
                                        </div>
                                        <div class="text-center font-weight-bold small text-muted pb-2">
                                            Absolutly Free & Win Big Prizes
                                        </div>
                                    </div>
                                    <!-- back -->
                                </div>
                            </div>
                            <!-- flip -->
                        </div> --}}
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- swiper -->
                <!-- container -->
            </div>
            <!-- container -->
        </div>
        <!-- slider -->
        <!-- container -->
        <div class="container">
            <!-- list -->
            <div class="list-mode mb-5 py-3">
                <!-- card -->
                <div class="card mx-2 my-3">
                    <div class="card-header text-muted font-weight-bold">
                        <div class="note-title">
                            <div class="note-text">
                                IPL - T20
                            </div>
                        </div>
                        <div class="note-des">Indian premier league</div>
                    </div>
                    <div class="card-body p-2 m-0">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/images/team-icons/MI.png" height="19px">
                                    <span class="">Mumbai Indians</span>
                                </div>
                            </div>
                            <div class="col-4 px-2">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <div class="small">
                                        Match Starts in
                                    </div>
                                    <div class="text-warning font-weight-bold mb-2">
                                        <div id="timer1"></div>
                                    </div>
                                    <a href="page3.html" class="btn btn-sm btn-success">Predict & Win</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center  align-items-center">
                                    <img src="assets/images/team-icons/DC.png" height="19px">
                                    <span class="">Delhi Capitals</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 text-center text-muted">
                        Absolutely Free & Win Big Prize
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="card mx-2 my-3">
                    <div class="card-header text-muted font-weight-bold">
                        <div class="note-title">
                            <div class="note-text">
                                IPL - T20
                            </div>
                        </div>
                        <div class="note-des">Indian premier league</div>
                    </div>
                    <div class="card-body p-2 m-0">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/images/team-icons/CSK.png" height="19px">
                                    <span class="">Chennai super Kings</span>
                                </div>
                            </div>
                            <div class="col-4 px-2">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <div class="small">
                                        Match Starts in
                                    </div>
                                    <div class="text-warning font-weight-bold mb-2">
                                        <div id="timer2"></div>
                                    </div>
                                    <a href="page3.html" class="btn btn-sm btn-success">Predict & Win</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center  align-items-center">
                                    <img src="assets/images/team-icons/SRH.png" height="19px">
                                    <span class="">Sunrise Hydrabad</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 text-center text-muted">
                        Absolutely Free & Win Big Prize
                    </div>
                </div>
                <!-- card -->
                <!-- card -->
                <div class="card mx-2 my-3 mb-5">
                    <div class="card-header text-muted font-weight-bold">
                        <div class="note-title">
                            <div class="note-text">
                                IPL - T20
                            </div>
                        </div>
                        <div class="note-des">Indian premier league</div>
                    </div>
                    <div class="card-body p-2 m-0">
                        <div class="row no-gutters justify-content-center align-items-center">
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <img src="assets/images/team-icons/DC.png" height="19px">
                                    <span class="">Delhi Capitals</span>
                                </div>
                            </div>
                            <div class="col-4 px-2">
                                <div class="d-flex flex-column justify-content-center align-items-center">
                                    <div class="small">
                                        Match Starts in
                                    </div>
                                    <div class="text-warning font-weight-bold mb-2">
                                        <div id="timer3"></div>
                                    </div>
                                    <a href="page3.html" class="btn btn-sm btn-success">Predict & Win</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex flex-column justify-content-center  align-items-center">
                                    <img src="assets/images/team-icons/KKR.png" height="19px">
                                    <span style="font-size: 11px;">Kolkata Knight Riders</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer p-1 text-center text-muted">
                        Absolutely Free & Win Big Prize
                    </div>
                </div>
                <!-- card -->
            </div>
            <!-- list -->
        </div>
        <!-- container -->
    </div>
    <!-- main -->
@endsection
