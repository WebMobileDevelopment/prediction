@extends('admin.dashboard.base')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>{{ __('Users') }}</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-striped datatable">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>E-mail</th>
                                        <th>Roles</th>
                                        <th>Email verified at</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->menuroles }}</td>
                                            <td>{{ $user->email_verified_at }}</td>
                                            <td>
                                                <a href="{{ route('users', $user->id) }}"
                                                    class="btn btn-block btn-primary">Details</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-block btn-primary">Edit</a>
                                            </td>
                                            <td>
                                                @if ($you->id !== $user->id)
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                        class="delete-form">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-block btn-danger">Delete</button>
                                                    </form>
                                                @endif
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

@endsection
@section('javascript')
    <script>
        $(function() {
            $(".delete-form").submit(function() {
                var confirm = prompt("Please enter 'yes' if you are going to delete this user.");
                if (confirm === 'yes') {
                    return true;
                } else {
                    return false; // will halt submission
                }

            })
        });

    </script>
@endsection
