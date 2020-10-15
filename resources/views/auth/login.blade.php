@extends('front.layouts.auth.base')
@section('page-content')

    <div class="page-content header-clear-medium">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card card-style">
                <div class="content mt-4 mb-0">
                    <h1 class="text-center font-900 font-40 text-uppercase mb-0">Login</h1>
                    <p class="bottom-0 text-center color-highlight font-11">Let's get you logged in</p>

                    <div class="input-style has-icon input-style-1 input-required pb-1">
                        <i class="input-icon fa fa-user color-theme"></i>
                        <span>Email</span> <em>(required)</em>
                        <input type="email" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"
                            required autofocus>
                        @if ($errors->has('email'))
                            <p class="text-danger mb-2">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="input-style has-icon input-style-1 input-required pb-1">
                        <i class="input-icon fa fa-lock color-theme"></i>
                        <span>Password</span> <em>(required)</em>
                        <input type="password" placeholder="{{ __('Password') }}" name="password" required>
                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                    
                    <button class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark text-uppercase font-900"
                        type="submit">{{ __('Login') }}</button>

                    <div class="divider"></div>

                    <a href="#"
                        class="btn btn-icon btn-m btn-full shadow-l bg-facebook text-uppercase font-900 text-left"><i
                            class="fab fa-facebook-f text-center"></i>Login with Facebook</a>
                    <a href="#"
                        class="btn btn-icon btn-m mt-2 btn-full shadow-l bg-twitter text-uppercase font-900 text-left"><i
                            class="fab fa-twitter text-center"></i>Login with Twitter</a>

                    <div class="divider mt-4 mb-3"></div>

                    <div class="d-flex">
                        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-left"><a
                                href="{{ route('register') }}" class="color-theme">Create Account</a></div>
                        <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-right"><a
                                href="{{ route('password.request') }}" class="color-theme">Forgot Credentials</a></div>
                    </div>
                </div>
            </div>
            @include('auth.footer')
        </form>
    </div>
    <!-- End of Page Content-->
@endsection
