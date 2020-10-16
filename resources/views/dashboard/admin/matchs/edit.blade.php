@extends('dashboard.base')
<link rel="stylesheet" href="{{ URL::asset('css/cropper_style.css') }}" />

@section('content')
    <style>
        .input-group-prepend,
        .input-group-text {
            width: 100px;
        }

        #update_form .text-center img {
            width: 100px;
        }

    </style>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Edit {{ $game->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('games.update', $game->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Name</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Name" name="name" id="game-name"
                                        value="{{ $game->name }}" autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">View order</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="View order" name="view_order"
                                        value="{{ $game->view_order }}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Description" name="description"
                                        value="{{ $game->description }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        Active avatar
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row text-center">
                                            <div class="col-md-6">Origin</div>
                                            <div class="col-md-6">New</div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-6"><img src="{{ $game->active_avatar }}"></div>
                                            <div class="col-md-6">
                                                <div class="img_container" id="active-avatar">
                                                    @include('element.cropper.content')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        Inactive avatar
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row text-center">
                                            <div class="col-md-6">Origin</div>
                                            <div class="col-md-6">New</div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-6"><img src="{{ $game->inactive_avatar }}"></div>
                                            <div class="col-md-6">
                                                <div class="img_container" id="inactive-avatar">
                                                    @include('element.cropper.content')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @include('element.cropper.footer')


                                <button class="btn btn-block btn-success" id="save_button">Save</button>
                                <a href="{{ route('games') }}" class="btn btn-block btn-primary">Return</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script>
        var CUSTOM_CROP_OPTIONS = {
            aspectRatio: 1,
        }

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
        integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="{{ asset('js/cropper.js') }}"></script>
    <script src="{{ asset('js/cropper_script.js') }}"></script>
    <script>
        $(function() {
            toastr.options.timeOut = 1000;
            toastr.options.extendedTimeOut = 0;

            $("#save_button").click(function() {
                if (!$("#game-name").val()) {
                    toastr.error('Please enter game name', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
