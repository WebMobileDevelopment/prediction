@extends('admin.dashboard.base')
@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Matchs in {{ $league->name }} League
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_button">Add
                                match</button>
                            <a class="btn btn-primary btn-sm btn-pill float-right mr-3" href="{{ route('leagues') }}">Select
                                League</a>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Team1</th>
                                        <th class="text-center">Team2</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Start time</th>
                                        <th class="text-center">End time</th>
                                        <th class="text-center">Questions</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($league->matchs as $match)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $match->name }}</td>
                                            <td class="text-center">
                                                {{ $match->team1->name }}
                                                <div class="c-avatar">
                                                    <img src="{{ $match->team1->avatar }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                {{ $match->team2->name }}
                                                <div class="c-avatar">
                                                    <img src="{{ $match->team2->avatar }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $match->description }}</td>
                                            <td class="text-center">{{ $match->start_time }}</td>
                                            <td class="text-center">{{ $match->end_time }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('questions', $match->id) }}"
                                                    class="btn btn-block btn-success">{{ count($match->questions) }} &emsp;
                                                    Questions</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('matchs.edit', $match->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('matchs.destroy', $match->id) }}" method="POST"
                                                    class="delete-form mb-0">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form method="POST" action="{{ route('matchs.create', $league->id) }}" id="submit_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new match</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Team1</label>
                            <div class="col-md-9">
                                <select class="form-control" id="team1_name" name="team1_id">
                                    @foreach ($league_teams as $league_team)
                                        <option value="{{ $league_team->team_id }}"
                                            {{ !is_null(old('team1_id')) && old('team1_id') == $league_team->team_id ? 'selected' : '' }}>
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
                                            {{ !is_null(old('team2_id')) && old('team2_id') == $league_team->team_id ? 'selected' : '' }}>
                                            {{ $league_team->team->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Match Name" name="name" id="match_name"
                                    value="{{ old('name') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Description</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Match Description" name="description"
                                    value="{{ old('description') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Start time</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control datetimepicker" name="start_time" id="start_time"
                                    value="{{ old('start_time') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">End time</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control datetimepicker" name="end_time" id="end_time"
                                    value="{{ old('end_time') }}">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="submit_button">Add Match</button>
                    </div>
                </div>
            </form>
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
            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this match.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_button").click(function() {
                $("#myModal").modal('show');
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
