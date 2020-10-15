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
                        <input type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}"
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
            <div class="footer card card-style">
                <a href="#" class="footer-title"><span class="color-highlight">Games Predictions</span></a>
                <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> by
                        Enabled</span><br><br>Powered by the best Mobile Website Developer on Envato Market. Elite
                    Quality. Elite Products.</p>
                <div class="text-center mb-3">
                    <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
                    <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red2-dark"><i
                            class="fa fa-share-alt"></i></a>
                    <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark1-light"><i
                            class="fa fa-angle-up"></i></a>
                </div>
                <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights
                    Reserved.</p>
                <p class="footer-links"><a href="#" class="color-highlight">Privacy Policy</a> | <a href="#"
                        class="color-highlight">Terms and Conditions</a> | <a href="#" class="back-to-top color-highlight">
                        Back
                        to Top</a></p>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <!-- End of Page Content-->
@endsection
