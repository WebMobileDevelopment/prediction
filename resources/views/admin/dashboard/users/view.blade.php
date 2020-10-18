@extends('admin.dashboard.base')
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>User Details</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-left">Field</th>
                                        <th class="text-left">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Name</td>
                                        <td class="text-left">{{ $user->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">E-mail</td>
                                        <td class="text-left">{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Phone</td>
                                        <td class="text-left">{{ $user->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Address</td>
                                        <td class="text-left">{{ $user->address }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Role</td>
                                        <td class="text-left">{{ $user->menuroles }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Created At</td>
                                        <td class="text-left">{{ $user->created_at }}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i>Bank Details</div>
                        <div class="card-body">
                            <table class="table table-responsive-sm table-hover table-outline mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-left">Field</th>
                                        <th class="text-left">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Bank Name</td>
                                        <td class="text-left">{{ $user->bank_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Bank City</td>
                                        <td class="text-left">{{ $user->bank_city }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Holder Name</td>
                                        <td class="text-left">{{ $user->account_holder_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Account Number</td>
                                        <td class="text-left">{{ $user->account_number }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">IFSC Code</td>
                                        <td class="text-left">{{ $user->ifsc_code }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('users.index') }}"
                                class="btn btn-block btn-primary mt-5">{{ __('Return') }}</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection