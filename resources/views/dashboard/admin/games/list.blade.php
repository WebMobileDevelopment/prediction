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
                            <i class="fa fa-align-justify"></i>All Games
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_game">Add Game</button>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Name</th>
                                        <th class="text-center">Menu Order</th>
                                        <th class="text-center">Acitve Icon</th>
                                        <th class="text-center">Inacitve Icon</th>
                                        <th>Description</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td>{{ $game->name }}</td>
                                            <td class="text-center">{{ $game->view_order }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $game->active_avatar }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $game->inactive_avatar }}" alt="Top menu inactive icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td>{{ $game->description }}</td>
                                            <td>
                                                <a href="{{ url('/games/edit/' . $game->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('games.destroy', $game->id) }}" method="POST"
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
            <form method="POST" action="{{ route('games.create') }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new game</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon c-icon-sm">
                                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                    </svg>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Game Name" name="name" id="game-name"
                                value="{{ old('name') }}" autofocus>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <svg class="c-icon c-icon-sm">
                                        <use xlink:href="/assets/icons/spreadsheet.svg"></use>
                                    </svg>
                                </span>
                            </div>
                            <input class="form-control" type="" placeholder="Description" name="description"
                                value="{{ old('description') }}">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend  mr-2">
                                <span class="input-group-text">
                                    Active avatar
                                </span>
                            </div>
                            <div class="img_container" id="active-avatar">
                                @include('element.cropper.content')
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend  mr-2">
                                <span class="input-group-text">
                                    Inactive avatar
                                </span>
                            </div>
                            <div class="img_container" id="active-avatar1">
                                @include('element.cropper.content')
                            </div>
                        </div>
                        @include('element.cropper.footer')
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="add_button">Create Game</button>
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

            var avatar_errs = [
                'Please add active avatar image.',
                'Please add inactive avatar image.',
            ]



            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this game.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_game").click(function() {
                $("#myModal").modal('show');
            });
            $("#add_button").click(function() {
                if (!$("#game-name").val()) {
                    toastr.error('Please enter game name', 'error!');
                    return false;
                }
                var imgs = $(".img_source").map(function(index) {
                    return !$(this).val();
                });
                for (i = 0; i < 2; i++) {
                    if (imgs[i]) {
                        toastr.error(avatar_errs[i], 'error!');
                        return;
                    }
                }
                $("#add_form").submit();
            })
        });

    </script>
@endsection
