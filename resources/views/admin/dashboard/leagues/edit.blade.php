@extends('admin.dashboard.base')

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
                            <i class="fa fa-align-justify"></i> Edit {{ $league->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('leagues.update', $league->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="league Name" name="name"
                                            id="league-name" value="{{ $league->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Game Type</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="game_types" name="game_id"
                                            value="{{ $league->game_id }}">
                                            @foreach ($games as $game)
                                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Description" name="description"
                                            value="{{ $league->description }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Location</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Location" name="location"
                                            value="{{ $league->location }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Start Time</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control datetimepicker" name="start_time"
                                            value="{{ $league->start_time }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">End Time</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control datetimepicker" name="end_time"
                                            value="{{ $league->end_time }}">
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
                                            <div class="col-md-6"><img src="{{ $league->avatar }}"></div>
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
                                <a href="{{ route('leagues') }}" class="btn btn-block btn-primary">Return</a>
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
        $(function() {
            $("#save_button").click(function() {
                if (!$("#league-name").val()) {
                    toastr.error('Please enter league name', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
