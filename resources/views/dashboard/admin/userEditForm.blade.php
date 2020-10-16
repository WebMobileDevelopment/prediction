@extends('dashboard.base')

@section('content')

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-5 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> {{ __('Edit') }} {{ $user->name }}</div>
                        <div class="card-body">
                            <br>
                            <form method="POST" action="/users/{{ $user->id }}">
                                @csrf
                                @method('PUT')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon c-icon-sm">
                                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('Name') }}" name="name"
                                        value="{{ $user->name }}" required autofocus>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}"
                                        name="email" value="{{ $user->email }}" required>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon c-icon-sm">
                                                <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-phone"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('Phone Number') }}"
                                        name="phone" value="{{ $user->phone }}">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon c-icon-sm">
                                                <use
                                                    xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-address-book">
                                                </use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('Address') }}" name="address"
                                        value="{{ $user->address }}">
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Role</label>
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-3">
                                            <input class="form-check-input" id="inline-radio1" type="radio" value="user"
                                                name="menuroles" {{ $user->menuroles == 'user' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inline-radio1">User</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" id="inline-radio2" type="radio"
                                                value="user,admin" name="menuroles"
                                                {{ $user->menuroles == 'user,admin' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="inline-radio2">Admin</label>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-block btn-success" type="submit">{{ __('Save') }}</button>
                                <a href="{{ route('users.index') }}"
                                    class="btn btn-block btn-primary">{{ __('Return') }}</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')

@endsection
