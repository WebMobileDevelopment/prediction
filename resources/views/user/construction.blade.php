@extends('auth.layouts.base')
@section('page-content')
    <style>
        .card-center {
            position: relative;
            top: 40%;
            width: 100vw;
            max-width: 400px;
        }

    </style>
    <div class="page-content header-clear pb-0">

        <div data-card-height="cover" class="card">
            <div class="card-center text-center">
                <i class="fa fa-clock fa-9x color-highlight mb-5"></i>
                <h1 class="font-36 font-800 mb-2">We're on It!</h1>
                <p class="boxed-text-xl">
                    We're currently working to get our page up and running. We estimate we'll be online in about:
                </p>

                <div class="countdown row mb-4 mt-5 ml-2 mr-2">
                    <div class="disabled">
                        <h1 class="mb-0 color-theme font-30" id="years"></h1>
                        <p class="mt-n1 color-theme font-11 opacity-30">years</p>
                    </div>
                    <div class="col-3">
                        <h1 class="mb-0 color-theme font-30" id="days"></h1>
                        <p class="mt-n1 color-theme font-11 opacity-30">days</p>
                    </div>
                    <div class="col-3">
                        <h1 class="mb-0 color-theme font-30" id="hours"></h1>
                        <p class="mt-n1 color-theme font-11 opacity-30">hours</p>
                    </div>
                    <div class="col-3">
                        <h1 class="mb-0 color-theme font-30" id="minutes"></h1>
                        <p class="mt-n1 color-theme font-11 opacity-30">minutes</p>
                    </div>
                    <div class="col-3">
                        <h1 class="mb-0 color-theme font-30" id="seconds"></h1>
                        <p class="mt-n1 color-theme font-11 opacity-30">seconds</p>
                    </div>
                </div>

                <div class="row mb-0">
                    {{-- <div class="col-6">
                        <a href="#"
                            class="btn btn-m bg-highlight btn-center-m rounded-sm bg-highlight font-900 text-uppercase float-right">Back
                            Home</a>
                    </div> --}}
                    <div class="col-12">
                        <a href="{{route('contact')}}"
                            class="btn btn-m bg-highlight btn-center-m rounded-sm bg-highlight font-900 text-uppercase">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Content-->
@endsection
