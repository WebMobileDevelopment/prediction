@extends('dashboard.authBase')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon">
                                                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-user"></use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="text" placeholder="{{ __('E-Mail Address') }}"
                                        name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <svg class="c-icon">
                                                <use xlink:href="assets/icons/coreui/free-symbol-defs.svg#cui-lock-locked">
                                                </use>
                                            </svg>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" placeholder="{{ __('Password') }}"
                                        name="password" required>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-success px-4"
                                            type="submit">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-12 text-center">
                                <a href="{{ route('password.request') }}"
                                    class="btn btn-link px-0">{{ __('Forgot Your Password?') }}</a>
                            </div>
                            <div class="mt-3 text-center"> Don't you have account? Please Sign up! </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-block btn-primary active mt-3">{{ __('Register') }}</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('javascript')
    <script>
        // $(function() {
        //     toastr.options.timeOut = 0;
        //     toastr.options.extendedTimeOut = 0;
        //     toastr.error('I do not think that word means what you think it means.', 'Inconceivable!');
        //     toastr.success('Have fun storming the castle!', 'Miracle Max Says');
        // })

    </script>
@endsection
