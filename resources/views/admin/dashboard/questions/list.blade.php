@extends('admin.dashboard.base')

@section('content')
    <?php $i = 1; ?>
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>All Qustions in {{ $match->name }} Match
                            <button class="btn btn-primary btn-sm btn-pill float-right mr-3" id="add_question">Add
                                question</button>
                            <a class="btn btn-primary btn-sm btn-pill float-right mr-3"
                                href="{{ route('matchs', $match->league_id) }}">Select Match</a>
                        </div>

                        <div class="card-body">
                            <br>
                            <div class="row mb-5">
                                <div class="col-md-6 c-avatar">{{ $match->team1->name }}
                                    <img src="{{ $match->team1->avatar }}" alt="Team1 Avatar" width="40px" height="40px" class="ml-5">
                                </div>
                                <div class="col-md-6  c-avatar">{{ $match->team2->name }}
                                    <img src="{{ $match->team2->avatar }}" alt="Team2 Avatar" width="40px" height="40px" class="ml-5">
                                </div>
                            </div>
                            <table class="table table-responsive-sm table-striped datatable table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Question</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($match->questions as $question)
                                        <tr>
                                            <td class="text-center">{{ $i++ }}</td>
                                            <td class="text-center">
                                                {{ $question->question }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('questions.edit', $question->id) }}"
                                                    class="btn btn-block btn-primary col-md-4">Edit</a>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                                                    class="delete-form mb-0">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-block btn-danger col-md-4">Delete</button>
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
            <form method="POST" action="{{ route('questions.create', $match->id) }}" id="add_form">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add new question</h4>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label" for="password-input">Question</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" placeholder="Question" name="question" id="question"
                                    value="{{ old('question') }}" autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="button" id="add_button">Add Question</button>
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
                var confirm = prompt("Please enter 'yes' if you are going to delete this question.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }
            })
            $("#add_question").click(function() {
                $("#myModal").modal('show');
            });
            $("#add_button").click(function() {
                if (!$("#question").val()) {
                    toastr.error('Please input question', 'error!');
                    return false;
                }
                $("#add_form").submit();
            })
        });

    </script>
@endsection
