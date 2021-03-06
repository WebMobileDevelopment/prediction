@extends('admin.dashboard.base')
@section('content')
    <style>
        #prev_img{
            width: 40px;
            height: auto;
        }
    </style>
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Games
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_button">Add Game</button>
                        </div>

                        <div class="card-body">
                            <!-- /.row-->
                            <br>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Menu Order</th>
                                        <th class="text-center">Menu Icon</th>
                                        <th class="text-center">Description</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">{{ $game->name }}</td>
                                            <td class="text-center">{{ $game->view_order }}</td>
                                            <td class="text-center">
                                                <div class="c-avatar">
                                                    <img src="{{ $game->menu_icon }}" alt="Top menu active icon"
                                                        width="40px" height="40px">
                                                </div>
                                            </td>
                                            <td class="text-center">{{ $game->description }}</td>
                                            <td>
                                                <a href="{{ route('games.edit', $game->id) }}"
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
            <form method="POST" action="{{ route('games.create') }}" id="submit_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new game</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3 row">
                            <span class="col-md-3">Name</span>
                            <input class="form-control col-md-9" type="text" placeholder="Game Name" name="name"
                                id="game_name" value="{{ old('name') }}" autofocus>
                        </div>
                        <div class="input-group mb-3 row">
                            <span class="col-md-3">View Order</span>
                            <input class="form-control col-md-9" type="text" placeholder="View order" name="view_order"
                                id="view_order" value="{{ old('view_order') }}" autofocus>
                        </div>
                        <div class="input-group mb-3 row">
                            <span class="col-md-3">Description</span>
                            <input class="form-control col-md-9" type="text" placeholder="Description" name="description"
                                id="description" value="{{ old('description') }}" autofocus>
                        </div>
                        <div class="input-group mb- row">
                            <span class="col-md-3">Menu icon</span>
                            <div class="img_container col-md-9" id="active-avatar">
                                <img id="prev_img" alt="Select File" title="Select File" src="{{ old('base64_img') }}" style="cursor: pointer" />
                                <input type="file" id="img_selector" style="display: none" />
                                <input type="hidden" id="base64_img" name="base64_img" value="{{ old('base64_img') }}">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="submit_button">Create Game</button>
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
                var confirm = prompt("Please enter 'yes' if you are going to delete this game.");
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
                if (!$("#game_name").val()) {
                    toastr.error('Please enter game name', 'error!');
                    return false;
                }
                if (!$("#base64_img").val()) {
                    toastr.error('Please select menu icon', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
