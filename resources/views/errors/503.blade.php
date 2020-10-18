@extends('auth.layouts.base')
@section('page-content')
    <style>
        .card-center {
            position: relative;
            top: 30%;
            width: 100vw;
            max-width: 400px;
        }

    </style>
    {{-- <div class="page-content header-clear pb-0"> --}}
    <div class="page-content header-clear-medium">
        <div data-card-height="cover" class="card">
            <div class="card-center text-center">
                <i class="fa fa-cog fa-spin fa-9x color-highlight mb-5"></i>
                <h1>We're fixing a few bugs...</h1>
                <p class="boxed-text-l">
                    We'll be back in a giffy. Fixing a small hickup. Thank you for your patience.
                </p>
                <div class="row mt-5 mb-0">
                    {{-- <div class="col-6">
                        <a href="#"
                            class="btn btn-m bg-highlight btn-center-s rounded-s bg-highlight font-900 text-uppercase float-right">Back
                            Home</a>
                    </div> --}}
                    <div class="col-12">
                        <a href="{{ route('contact') }}"
                            class="btn btn-m bg-highlight btn-center-s rounded-s bg-highlight font-900 text-uppercase">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page Content-->
@endsection
