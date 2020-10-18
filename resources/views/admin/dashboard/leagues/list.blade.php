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
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_league">Add
                                League</button>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">league Type</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Avatar</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Location</th>
                                        <th class="text-center">Start Time</th>
                                        <th class="text-center">End Time</th>
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
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $league->avatar }}" alt="League avatar" width="40px"
                                                        height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $league->description }}</td>
                                            <td class="text-center">{{ $league->location }}</td>
                                            <td class="text-center">{{ $league->start_time }}</td>
                                            <td class="text-center">{{ $league->end_time }}</td>
                                            <td class="text-center">
                                                <a href="{{ url("leagueTeams/" . $league->id) }}"
                                                    class="btn btn-block btn-success">{{count($league->teams)}} &emsp; Teams</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url("matchs/" . $league->id) }}"
                                                    class="btn btn-block btn-success">{{count($league->matchs)}} &emsp; Matchs</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('/leagues/edit/' . $league->id) }}"
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
            <form method="POST" action="{{ route('leagues.create') }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new league</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="league Name" name="name"
                                    id="league-name" value="{{ old('name') }}" autofocus>
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
                            <label class="col-md-3 col-form-label" for="password-input">Description</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Description" name="description"
                                    value="{{ old('description') }}">
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
                            <label class="col-md-3 col-form-label" for="password-input">Start time</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control datetimepicker" name="start_time"
                                    value="{{ old('start_time') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">End time</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control datetimepicker" name="end_time"
                                    value="{{ old('end_time') }}">
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
                        <button class="btn btn-primary" type="button" id="add_button">Create league</button>
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
            toastr.options.timeOut = 1000;
            toastr.options.extendedTimeOut = 0;

            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this league.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_league").click(function() {
                $("#myModal").modal('show');
            });
            $("#add_button").click(function() {
                if (!$("#league-name").val()) {
                    toastr.error('Please enter league name', 'error!');
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
