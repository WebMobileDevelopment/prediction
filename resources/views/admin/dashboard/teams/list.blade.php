@extends('admin.dashboard.base')
<style>
    #prev_img {
        width: 40px;
        height: auto;
    }

</style>
@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Teams
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_button">Add
                                team</button>
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
                                            <td class="text-center">{{ $team->short_name }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $team->avatar }}" alt="Top menu active icon" width="40px"
                                                        height="40px">
                                                </div>
                                            </td>
                                            <td>{{ $team->description }}</td>
                                            <td>
                                                <a href="{{ route('teams.edit', $team->id) }}"
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
            <form method="POST" action="{{ route('teams.create') }}" id="submit_form">
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
                            <select class="form-control col-md-9" id="game_types" name="game_id">
                                @foreach ($games as $game)
                                    <option value="{{ $game->id }} {{ old('game_id') == $game->id ? 'selected' : '' }}">
                                        {{ $game->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Name</label>
                            <input class="form-control col-md-9" type="text" placeholder="Team Name" name="name"
                                id="team_name" value="{{ old('name') }}" autofocus>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Country</label>
                            <input class="form-control col-md-9" type="text" placeholder="country" name="short_name"
                                id="short_name" value="{{ old('short_name') }}">
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Description</label>
                            <input class="form-control col-md-9" type="text" placeholder="Description" name="description"
                                value="{{ old('description') }}">
                        </div>
                        <div class="input-group mb- row">
                            <span class="col-md-3">Avatar</span>
                            <div class="img_container col-md-9" id="active-avatar">
                                <img id="prev_img" alt="Select File" title="Select File" src="{{ old('base64_img') }}" style="cursor: pointer" />
                                <input type="file" id="img_selector" style="display: none" />
                                <input type="hidden" id="base64_img" name="base64_img" value="{{ old('base64_img') }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="submit_button">Create team</button>
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
            $("#add_button").click(function() {
                $("#myModal input[name!='_token']").each(function() {
                    $(this).val("");
                });
                $("#myModal img").attr('src', "");
                $("#myModal").modal('show');
            });
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
                if (!$("#base64_img").val()) {
                    toastr.error('Please select avatar image', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
