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
                            <i class="fa fa-align-justify"></i> Edit {{ $match->name }}
                        </div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('matchs.update', $match->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Team1</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="team1_name" name="team1_id">
                                            @foreach ($league_teams as $league_team)
                                                <option value="{{ $league_team->team_id }}"
                                                    {{ $match->team1_id == $league_team->team_id ? 'selected' : '' }}>
                                                    {{ $league_team->team->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Team2</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="team2_name" name="team2_id">
                                            @foreach ($league_teams as $league_team)
                                                <option value="{{ $league_team->team_id }}"
                                                    {{ $match->team2_id == $league_team->team_id ? 'selected' : '' }}>
                                                    {{ $league_team->team->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Match Name" name="name"
                                            id="match_name" value="{{ $match->name }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Description</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" placeholder="Match Description"
                                            name="description" value="{{ $match->description }}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Start time</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control datetimepicker" name="start_time"
                                            id="start_time" value="{{ $match->start_time }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">End time</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control datetimepicker" name="end_time" id="end_time"
                                            value="{{ $match->end_time }}">
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success" id="submit_button">Save</button>
                                <a href="{{ route('matchs', $match->league_id) }}"
                                    class="btn btn-block btn-primary">Return</a>
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
            $('.datetimepicker').datetimepicker({
                // Formats
                // follow MomentJS docs: https://momentjs.com/docs/#/displaying/format/
                format: 'DD-MM-YYYY hh:mm A',

                // Your Icons
                // as Bootstrap 4 is not using Glyphicons anymore
                icons: {
                    time: 'fa fa-clock-o',
                    date: 'fa fa-calendar',
                    up: 'fa fa-chevron-up',
                    down: 'fa fa-chevron-down',
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-check',
                    clear: 'fa fa-trash',
                    close: 'fa fa-times'
                }
            });
            $("#submit_button").click(function() {
                if (!$("#match_name").val()) {
                    toastr.error('Please input match name', 'error!');
                    return false;
                }
                if (!$("#team1_name").val()) {
                    toastr.error('Please select team1', 'error!');
                    return false;
                }
                if (!$("#team2_name").val()) {
                    toastr.error('Please select team2', 'error!');
                    return false;
                }
                if (!$("#start_time").val()) {
                    toastr.error('Please select start time', 'error!');
                    return false;
                }
                if (!$("#end_time").val()) {
                    toastr.error('Please select end time', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
