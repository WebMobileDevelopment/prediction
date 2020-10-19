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
                            <i class="fa fa-align-justify"></i> Edit {{ $game->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('games.update', $game->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Name</span>
                                    <input class="form-control col-md-9" type="text" placeholder="Name" name="name"
                                        id="game_name" value="{{ $game->name }}" autofocus>
                                </div>
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">View Order</span>
                                    <input class="form-control col-md-9" type="text" placeholder="View order"
                                        name="view_order" value="{{ $game->view_order }}">
                                </div>
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Description</span>
                                    <input class="form-control col-md-9" type="text" placeholder="Description"
                                        name="description" value="{{ $game->description }}">
                                </div>
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Menu icon</span>
                                    <div class="img_container col-md-9" id="active-avatar">
                                        <img id="prev_img" alt="Select File" title="Select File"
                                            src="{{ $game->menu_icon }}" style="cursor: pointer" />
                                        <input type="file" id="img_selector" style="display: none" />
                                        <input type="hidden" id="base64_img" name="base64_img"
                                            value="{{ $game->menu_icon }}">
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success mt-5" id="submit_button">Save</button>
                                <a href="{{ route('games') }}" class="btn btn-block btn-primary">Return</a>
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
