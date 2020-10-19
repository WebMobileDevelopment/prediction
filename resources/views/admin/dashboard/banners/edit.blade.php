@extends('admin.dashboard.base')
@section('content')
    <style>
        .input-group-prepend,
        .input-group-text {
            width: 100px;
        }

        #prev_img {
            width: 100%;
        }

    </style>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Edit {{ $banner->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('banners.update', $banner->id) }}" id="submit_form">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Title</span>
                                    <input class="form-control col-md-9" type="text" placeholder="Name" name="title"
                                        id="banner_title" value="{{ $banner->title }}" autofocus>
                                </div>                                
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Description</span>
                                    <input class="form-control col-md-9" type="text" placeholder="Description"
                                        name="description" value="{{ $banner->description }}">
                                </div>
                                <div class="input-group mb-3 row">
                                    <span class="col-md-3">Banner Image</span>
                                    <div class="img_container col-md-9" id="active-avatar">
                                        <img id="prev_img" alt="Select File" title="Select File"
                                            src="{{ $banner->base64_img }}" style="cursor: pointer" />
                                        <input type="file" id="img_selector" style="display: none" />
                                        <input type="hidden" id="base64_img" name="base64_img"
                                            value="{{ $banner->base64_img }}">
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success mt-5" id="submit_button">Save</button>
                                <a href="{{ route('banners') }}" class="btn btn-block btn-primary">Return</a>
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
                if (!$("#base64_img").val()) {
                    toastr.error('Please select banner image.', 'error!');
                    return false;
                }
                $("#submit_form").submit();
            })
        });

    </script>
@endsection
