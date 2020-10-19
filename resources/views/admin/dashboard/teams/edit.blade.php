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
                            <i class="fa fa-align-justify"></i> Edit {{ $team->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('teams.update', $team->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Game Type</label>
                                    <select class="form-control col-md-9" id="game_types" name="game_id">
                                        @foreach ($games as $game)
                                            <option value="{{ $game->id }}"
                                                {{ $team->game_id == $game->id ? 'selected' : '' }}> {{ $game->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Team Name" name="name"
                                        id="team_name" value="{{ $team->name }}" autofocus>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Short Name</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Short Name"
                                        name="short_name" id="short_name" value="{{ $team->short_name }}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Description"
                                        name="description" value="{{ $team->description }}">
                                </div>
                                <div class="input-group mb- row">
                                    <span class="col-md-3">Avatar</span>
                                    <div class="img_container col-md-9" id="active-avatar">
                                        <img id="prev_img" alt="Select File" title="Select File" src="{{ $team->avatar }}"
                                            style="cursor: pointer" />
                                        <input type="file" id="img_selector" style="display: none" />
                                        <input type="hidden" id="base64_img" name="base64_img" value="{{ $team->avatar }}">
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success mt-5" id="submit_button">Save</button>
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
            $("#submit_button").click(function() {
                if (!$("#game_types").val()) {
                    toastr.error('Please select game type', 'error!');
                    return false;
                }
                if (!$("#team_name").val()) {
                    toastr.error('Please input team name', 'error!');
                    return false;
                }
                if (!$("#short_name").val()) {
                    toastr.error('Please input short name', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
