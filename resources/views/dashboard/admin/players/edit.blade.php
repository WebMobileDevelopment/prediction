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
                            <i class="fa fa-align-justify"></i> Edit {{ $player->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('players.update', $player->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Player Name" name="name"
                                            id="player-name" value="{{ $player->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Team Name</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="player_types" name="team_id"
                                            value="{{ $player->team_id }}">
                                            @foreach ($teams as $team)
                                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Country</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Country" name="country"
                                            value="{{ $player->country }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Nationality</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="nationality" name="nationality"
                                            value="{{ $player->nationality }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">age</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="age" name="age"
                                            value="{{ $player->age }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Description" name="description"
                                            value="{{ $player->description }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Avatar</label>
                                    <div class="col-md-9">
                                        <div class="row text-center">
                                            <div class="col-md-6">Origin</div>
                                            <div class="col-md-6">New</div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-6"><img src="{{ $player->avatar }}"></div>
                                            <div class="col-md-6">
                                                <div class="img_container" id="active-avatar">
                                                    @include('element.cropper.content')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @include('element.cropper.footer')


                                <button class="btn btn-block btn-success" id="save_button">Save</button>
                                <a href="{{ route('players') }}" class="btn btn-block btn-primary">Return</a>
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
                if (!$("#player-name").val()) {
                    toastr.error('Please enter player name', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
