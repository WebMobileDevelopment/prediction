@extends('admin.dashboard.base')
@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Leagues
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_button">Add
                                League</button>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Game Type</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Short Name</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Teams</th>
                                        <th class="text-center">Matchs</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leagues as $league)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $league->game->name }}</td>
                                            <td class="text-center">{{ $league->name }}</td>
                                            <td class="text-center">{{ $league->short_name }}</td>
                                            <td class="text-center">{{ $league->description }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('leagueTeams', $league->id) }}"
                                                    class="btn btn-block btn-success">{{ count($league->teams) }} &emsp;
                                                    Teams</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('matchs', $league->id) }}"
                                                    class="btn btn-block btn-success">{{ count($league->matchs) }} &emsp;
                                                    Matchs</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('leagues.edit', $league->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('leagues.destroy', $league->id) }}" method="POST"
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
            <form method="POST" action="{{ route('leagues.create') }}" id="submit_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new league</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Game Type</label>
                            <select class="form-control col-md-9" id="game_types" name="game_id"
                                value="{{ old('game_id') }}">
                                @foreach ($games as $game)
                                    <option value="{{ $game->id }}">{{ $game->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">League Name</label>
                            <input class="form-control col-md-9" type="text" placeholder="League Name" name="name"
                                id="league_name" value="{{ old('name') }}" autofocus>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Short Name</label>
                            <input class="form-control col-md-9" type="text" placeholder="Short name" name="short_name"
                                id="short_name" value="{{ old('short_name') }}" autofocus>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Description</label>
                            <input class="form-control col-md-9" type="text" placeholder="Description" name="description"
                                value="{{ old('description') }}">
                        </div>                       
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="submit_button">Create league</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        var CUSTOM_CROP_OPTIONS = {
            aspectRatio: 1,
        }

    </script>

    <script>
        $(function() {           
            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this league.");
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
                if (!$("#game_types").val()) {
                    toastr.error('Please select game type', 'error!');
                    return false;
                }
                if (!$("#league_name").val()) {
                    toastr.error('Please input league name', 'error!');
                    return false;
                }
                if (!$("#short_name").val()) {
                    toastr.error('Please input league short name', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
