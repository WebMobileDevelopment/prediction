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
                            <i class="fa fa-align-justify"></i> Edit {{ $team->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('teams.update', $team->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="team Name" name="name"
                                            id="team-name" value="{{ $team->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Game Type</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="game_types" name="game_id"
                                            value="{{ $team->game_id }}">
                                            @foreach ($games as $game)
                                                <option value="{{ $game->id }}">{{ $game->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Country</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Country" name="country"
                                            value="{{ $team->country }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Location</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Location" name="location"
                                            value="{{ $team->location }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Description" name="description"
                                            value="{{ $team->description }}">
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
                                            <div class="col-md-6"><img src="{{ $team->avatar }}"></div>
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
                                <a href="{{ route('teams') }}" class="btn btn-block btn-primary">Return</a>
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
                if (!$("#team-name").val()) {
                    toastr.error('Please enter team name', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
