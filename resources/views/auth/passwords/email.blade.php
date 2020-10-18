@extends('auth.layouts.base')
@section('page-content')

    <div class="page-content header-clear-medium">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="card card-style">
                <div class="content mb-0">
                    <h1 class="text-center"><i class="fa fa-question-circle fa-3x color-highlight mt-3"></i></h1>
                    <h1 class="pt-3 mt-3 text-center font-900 font-40 text-uppercase">Forgot</h1>
                    <p class="text-center color-highlight font-11">Let's get you back into your account</p>

                    <div class="input-style has-icon input-style-1 input-required">
                        <i class="input-icon fa fa-at color-theme"></i>
                        <span>Email</span>
                        <em>(required)</em>
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <p class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror



                    </div>
                    <button type="submit"
                        class="btn btn-m mt-4 mb-3 btn-full rounded-sm bg-highlight text-uppercase font-900">Send
                        Reset Instructions</button>

                    <p class="text-center mb-3">
                        <a href="{{ route('login') }}" class="color-theme opacity-50 font-12">Back to Login</a>
                    </p>
                </div>
            </div>
            @include('auth.content.footer')
        </form>
    </div>
    <!-- End of Page Content-->
@endsection
