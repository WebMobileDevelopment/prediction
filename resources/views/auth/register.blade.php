@extends('auth.layouts.base')
@section('page-content')

    <div class="page-content header-clear-medium">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center font-900 font-40 text-uppercase mb-0">Register</h1>
                    <p class="text-center color-highlight font-11">Don't have an account? Register here.</p>

                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-user color-theme"></i>
                        <span>Username</span>
                        <em>(required)</em>
                        <input type="name" name="name" value="{{ old('name') }}" placeholder="Username">
                        @if ($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-at color-theme"></i>
                        <span>Email</span>
                        <em>(required)</em>
                        <input type="email" name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-lock color-theme"></i>
                        <span>Password</span>
                        <em>(required)</em>
                        <input type="password" name="password" placeholder="Choose a Password">
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    <div class="input-style has-icon input-style-1 input-required mb-4">
                        <i class="input-icon fa fa-lock color-theme"></i>
                        <span>Password</span>
                        <em>(required)</em>
                        <input type="password" name="password_confirmation" placeholder="Confirm your Password">

                        @if ($errors->has('password_confirmation'))
                            <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                        @endif
                    </div>

                    <button class="btn btn-m btn-full rounded-s shadow-l bg-green1-dark text-uppercase font-900"
                        type="submit">Create account</button>

                    <div class="divider"></div>

                    <p class="text-center">
                        <a href="{{ route('login') }}" class="color-theme opacity-50 font-12">Already Registered? Sign in
                            Here</a>
                    </p>

                    <a href="#"
                        class="btn btn-icon btn-m btn-full rounded-s shadow-l bg-facebook text-uppercase font-900 text-left"><i
                            class="fab fa-facebook-f text-center"></i>Register with Facebook</a>
                    <a href="#"
                        class="btn btn-icon btn-m mt-2 mb-4 btn-full rounded-s shadow-l bg-twitter text-uppercase font-900 text-left"><i
                            class="fab fa-twitter text-center"></i>Register with Twitter</a>

                </div>
            </div>

            @include('auth.content.footer')
        </form>
    </div>
    <!-- End of Page Content-->
@endsection
