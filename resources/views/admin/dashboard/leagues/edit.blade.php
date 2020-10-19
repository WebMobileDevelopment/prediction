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
                        <div class="card-header"><i class="fa fa-align-justify"></i> Edit {{ $league->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('leagues.update', $league->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Game Type</label>
                                    <select class="form-control col-md-9" id="game_types" name="game_id"
                                        value="{{ $league->game_id }}">
                                        @foreach ($games as $game)
                                            <option value="{{ $game->id }}"
                                                {{ $league->game_id == $game->id ? 'selected' : '' }}>{{ $game->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">League Name</label>
                                    <input class="form-control col-md-9" type="text" placeholder="league Name" name="name"
                                        id="league_name" value="{{ $league->name }}" autofocus>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label" for="password-input">Short Name</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Short name"
                                        name="short_name" id="short_name" value="{{ $league->short_name }}" autofocus>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Description</label>
                                    <input class="form-control col-md-9" type="text" placeholder="Description"
                                        name="description" value="{{ $league->description }}">
                                </div>
                                <button class="btn btn-block btn-success mt-5" id="submit_button">Save</button>
                                <a href="{{ route('leagues') }}" class="btn btn-block btn-primary">Return</a>
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
