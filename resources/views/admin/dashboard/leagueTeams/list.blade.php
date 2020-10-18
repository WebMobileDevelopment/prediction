@extends('admin.dashboard.base')
@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Teams in {{ $league->name }} League
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_team">Add team</button>
                            <a class="btn btn-primary btn-sm btn-pill float-right mr-3" href="{{ route('leagues') }}">Select
                                League</a>
                        </div>

                        <div class="card-body">
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Avatar</th>
                                        <th class="text-center">Description</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($league->teams as $team)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $team->team->name }}</td>
                                            <td class="text-center">{{ $team->team->country }}</td>
                                            <td class="text-center">{{ $team->team->location }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $team->team->avatar }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $team->team->description }}</td>
                                            <td class="text-center">
                                                <form
                                                    action="{{ route('leagueTeams.destroy', ['league_id' => $league->id, 'leagueTeam' => $team->id]) }}"
                                                    method="POST" class="delete-form mb-0">
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
            <form method="POST" action="{{ route('leagueTeams.create', $league->id) }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new team</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Game Type</label>
                            <div class="col-md-9">
                                <select class="form-control" id="team-name" name="team_id" value="{{ old('team_id') }}">
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="add_button">Add Team</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this team.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_team").click(function() {
                $("#myModal").modal('show');
            });
            $("#add_button").click(function() {
                if (!$("#team-name").val()) {
                    toastr.error('Please select team name', 'error!');
                    return false;
                }
                $("#add_form").submit();
            })
        });

    </script>
@endsection
