@extends('admin.dashboard.base')
@section('content')
    <style>
        .input-group-prepend,
        .input-group-text {
            width: 100px;
        }

        #update_form .text-center img {
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
                            <form method="POST" action="{{ route('games.update', $game->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Name</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Name" name="name" id="game-name"
                                        value="{{ $game->name }}" autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">View order</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="View order" name="view_order"
                                        value="{{ $game->view_order }}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Description</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Description" name="description"
                                        value="{{ $game->description }}">
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        Active avatar
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row text-center">
                                            <div class="col-md-6">Origin</div>
                                            <div class="col-md-6">New</div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-6"><img src="{{ $game->active_avatar }}"></div>
                                            <div class="col-md-6">
                                                <div class="img_container" id="active-avatar">
                                                    @include('element.cropper.content')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        Inactive avatar
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row text-center">
                                            <div class="col-md-6">Origin</div>
                                            <div class="col-md-6">New</div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-md-6"><img src="{{ $game->inactive_avatar }}"></div>
                                            <div class="col-md-6">
                                                <div class="img_container" id="inactive-avatar">
                                                    @include('element.cropper.content')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @include('element.cropper.footer')


                                <button class="btn btn-block btn-success" id="save_button">Save</button>
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
            $("#save_button").click(function() {
                if (!$("#game-name").val()) {
                    toastr.error('Please enter game name', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
