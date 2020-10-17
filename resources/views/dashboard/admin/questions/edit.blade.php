@extends('dashboard.base')
<link rel="stylesheet" href="{{ URL::asset('css/cropper_style.css') }}" />

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
                            <i class="fa fa-align-justify"></i> Edit Question</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="{{ route('questions.update', $question->id) }}" id="update_form">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Question</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Question String" name="question"
                                        id="question-name" value="{{ $question->question }}" autofocus>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-block btn-success" id="save_button">Save</button>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('questions', $question->id) }}"
                                            class="btn btn-block btn-primary">Return</a>
                                    </div>
                                </div>
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
            toastr.options.timeOut = 1000;
            toastr.options.extendedTimeOut = 0;

            $("#save_button").click(function() {
                if (!$("#question-name").val()) {
                    toastr.error('Please enter question string', 'error!');
                    return false;
                }
                $("#update_form").submit();
            })
        });

    </script>
@endsection
