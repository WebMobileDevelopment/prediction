@extends('admin.dashboard.base')
@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Teams
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_team">Add team</button>
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
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Avatar</th>
                                        <th class="text-center">Description</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $team->game->name }}</td>
                                            <td class="text-center">{{ $team->name }}</td>
                                            <td class="text-center">{{ $team->country }}</td>
                                            <td class="text-center">{{ $team->location }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $team->avatar }}" alt="Top menu active icon" width="40px"
                                                        height="40px">
                                                </div>
                                            </td>
                                            <td>{{ $team->description }}</td>
                                            <td>
                                                <a href="{{ url('/teams/edit/' . $team->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST"
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
            <form method="POST" action="{{ route('teams.create') }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new team</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Team Name" name="name" id="team-name"
                                    value="{{ old('name') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Game Type</label>
                            <div class="col-md-9">
                                <select class="form-control" id="game_types" name="game_id" value="{{ old('game_id') }}">
                                    @foreach ($games as $game)
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Country</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="country" name="country"
                                    value="{{ old('country') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Location</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Location" name="location"
                                    value="{{ old('location') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Description</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Description" name="description"
                                    value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Avatar</label>
                            <div class="img_container col-md-9" id="active-avatar">
                                @include('element.cropper.content')
                            </div>
                        </div>
                        @include('element.cropper.footer')
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="add_button">Create team</button>
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
                    toastr.error('Please enter team name', 'error!');
                    return false;
                }
                if (!$(".img_source").val()) {
                    toastr.error('Please add avatar image.', 'error!');
                    return;
                }
                $("#add_form").submit();
            })
        });

    </script>
@endsection
