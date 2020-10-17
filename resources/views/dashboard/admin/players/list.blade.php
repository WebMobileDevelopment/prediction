@extends('dashboard.base')
<link rel="stylesheet" href="{{ URL::asset('css/cropper_style.css') }}" />

@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Players
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_player">Add Player</button>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Team Name</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Nationality</th>
                                        <th class="text-center">Age</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Avatar</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players as $player)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $player->team->name }}</td>
                                            <td class="text-center">{{ $player->name }}</td>
                                            <td class="text-center">{{ $player->country }}</td>
                                            <td class="text-center">{{ $player->nationality }}</td>
                                            <td class="text-center">{{ $player->age }}</td>
                                            <td class="text-center">{{ $player->description }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $player->avatar }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ url('/players/edit/' . $player->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('players.destroy', $player->id) }}" method="POST"
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
            <form method="POST" action="{{ route('players.create') }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new player</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="player Name" name="name"
                                    id="player-name" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">team Name</label>
                            <div class="col-md-9">
                                <select class="form-control" id="team_types" name="team_id" value="{{ old('team_id') }}">
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
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
                            <label class="col-md-3 col-form-label" for="password-input">Nationality</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Nationality" name="nationality"
                                    value="{{ old('nationality') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Age</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Age" name="age"
                                    value="{{ old('age') }}">
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
                        <button class="btn btn-primary" type="button" id="add_button">Create player</button>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
        integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="{{ asset('js/cropper.js') }}"></script>
    <script src="{{ asset('js/cropper_script.js') }}"></script>
    <script>
        $(function() {

            toastr.options.timeOut = 1000;
            toastr.options.extendedTimeOut = 0;

            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this player.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_player").click(function() {
                $("#myModal").modal('show');
            });
            $("#add_button").click(function() {
                if (!$("#player-name").val()) {
                    toastr.error('Please enter player name', 'error!');
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
