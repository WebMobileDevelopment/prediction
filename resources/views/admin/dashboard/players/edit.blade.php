@extends('admin.dashboard.base')

@section('content')
    <style>
        .input-group-prepend,
        .input-group-text {
            width: 100px;
        }

        #prev_img {
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
                            <form method="POST" action="{{ route('players.update', $player->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Team Name</label>
                                    <select class="form-control col-md-9" id="team_types" name="team_id">
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}"
                                                {{ $player->team_id == $team->id ? 'selected' : '' }}>
                                                {{ $team->game->name }} / {{ $team->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Name</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Player Name" name="name"
                                        id="player_name" value="{{ $player->name }}" autofocus>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Description</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Description"
                                        name="description" value="{{ $player->description }}">
                                </div>
                                <div class="input-group mb- row">
                                    <span class="col-md-3">Photo / Avatar</span>
                                    <div class="img_container col-md-9" id="active-avatar">
                                        <img id="prev_img" alt="Select File" title="Select File" src="{{ $player->avatar }}"
                                            style="cursor: pointer" />
                                        <input type="file" id="img_selector" style="display: none" />
                                        <input type="hidden" id="base64_img" name="base64_img"
                                            value="{{ $player->avatar }}">
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success mt-5" id="submit_button">Save</button>
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
        $(function() {
            $("#submit_button").click(function() {
                if (!$("#team_types").val()) {
                    toastr.error('Please select team', 'error!');
                    return false;
                }
                if (!$("#player_name").val()) {
                    toastr.error('Please enter player name', 'error!');
                    return false;
                }
                if (!$("#base64_img").val()) {
                    toastr.error('Please select photo/avatar', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
