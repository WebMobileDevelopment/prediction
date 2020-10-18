@extends('auth.layouts.base')
@section('page-content')

    <div class="page-content header-clear-medium">

        <div class="card card-style">
            <div class="d-flex content">
                <div class="flex-grow-1">
                    <div>
                        <h1 class="font-700 mb-1">Jackson Doeson</h1>
                        <p class="mb-0 pb-1 pr-3">
                            Edit your Profile Settings here and apply. This is just a demo page.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="images/empty.png" data-src="images/pictures/faces/4s.png" width="80"
                        class="rounded-circle mt- shadow-xl preload-img">
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mt-0 mb-0">
                <div class="list-group list-custom-large list-icon-0">
                    <a data-toggle-theme data-trigger-switch="switch-a" href="#">
                        <i class="fa font-14 fa-lightbulb rounded-s color-yellow1-dark"></i>
                        <span>Dark View</span>
                        <strong>Turn off the Lights</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input type="checkbox" class="ios-input" id="switch-a">
                            <label class="custom-control-label" for="switch-1"></label>
                        </div>
                        <i class="fa fa-chevron-right opacity-30"></i>
                    </a>
                    <a data-trigger-switch="switch-b" href="#">
                        <i class="fa font-14 fa-envelope rounded-s color-blue2-dark"></i>
                        <span>Newsletter</span>
                        <strong>Get updates via Newsletter?</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input type="checkbox" class="ios-input" id="switch-b">
                            <label class="custom-control-label" for="switch-1"></label>
                        </div>
                        <i class="fa fa-chevron-right opacity-30"></i>
                    </a>
                    <a href="#">
                        <i class="fa font-14 fa-lock rounded-s color-red2-dark"></i>
                        <span>2 Factor</span>
                        <strong>Cannot be Disabled</strong>
                        <div class="custom-control scale-switch ios-switch">
                            <input type="checkbox" class="ios-input" id="switch-c" checked disabled>
                            <label class="custom-control-label" for="switch-1"></label>
                        </div>
                        <i class="fa fa-chevron-right opacity-30"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h2>Basic Information</h2>
                <p class="mb-5">
                    This contains basic profile fields, easily editable, set to disable or pre-populate with useful
                    information.
                </p>
                <div class="input-style input-style-2 has-icon input-required">
                    <i class="input-icon fa fa-user"></i>
                    <span class="color-highlight input-style-1-active">Name</span>
                    <em>(required)</em>
                    <input type="name" class="form-control" value="Jackson Doe">
                </div>
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-at"></i>
                    <span class="color-highlight input-style-1-active">Email Address</span>
                    <em>(required)</em>
                    <input type="email" class="form-control" value="jack.doe@domain.com">
                </div>
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-map-marker"></i>
                    <span class="color-highlight input-style-1-active">Location</span>
                    <em>(required)</em>
                    <input type="text" class="form-control" value="Melbourne, Australia">
                </div>
                <div class="input-style input-style-2 has-icon input-required mt-4">
                    <i class="input-icon fa fa-phone"></i>
                    <span class="color-highlight input-style-1-active">Phone Number</span>
                    <em>(required)</em>
                    <input type="phone" class="form-control" value="+1 234 5678 9134">
                </div>
                <a href="#"
                    class="btn btn-full bg-green1-dark btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900">Save
                    Basic Information</a>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-2">
                <h2>Social Profiles</h2>
                <p>
                    Activate options or set different elements here that are different from basic fields.
                </p>
                <div class="list-group list-custom-small list-icon-0">
                    <a href="#">
                        <i class="fab font-14 fa-facebook-f rounded-s color-facebook"></i>
                        <span>Facebook</span>
                        <span class="badge text-uppercase bg-green1-dark">Connected</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>
                    <a href="#">
                        <i class="fab font-14 fa-twitter rounded-s color-twitter"></i>
                        <span>Twitter</span>
                        <span class="badge text-uppercase bg-green1-dark">Connected</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>
                    <a href="#">
                        <i class="fab font-14 fa-instagram rounded-s color-instagram"></i>
                        <span>Instagram</span>
                        <span class="badge text-uppercase bg-red2-dark">ACCOUNT ERROR</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>
                    <a class="border-0" href="#">
                        <i class="fab font-14 fa-linkedin-in rounded-s color-linkedin"></i>
                        <span>LinkedIn</span>
                        <span class="badge text-uppercase bg-yellow1-dark">PENDING APPROVAL</span>
                        <i class="fa fa-chevron-right disabled"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h2 class="mb-0">Account Security</h2>
                <p class="mb-5">
                    Activate options or set different elements here that are different from basic fields.
                </p>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">Password</span>
                    <em>(required)</em>
                    <input type="password" class="form-control" placeholder="" value="password here">
                </div>
                <div class="input-style input-style-2 input-required">
                    <span class="color-highlight input-style-1-active">Confirm Password</span>
                    <em>(required)</em>
                    <input type="password" class="form-control" placeholder="" value="password here">
                </div>
                <a href="#"
                    class="btn btn-full bg-green1-dark btn-m text-uppercase rounded-sm shadow-l mb-3 mt-4 font-900">Save
                    Password</a>
            </div>
        </div>

        <div class="footer card card-style">
            <a href="#" class="footer-title"><span class="color-highlight">StickyMobile</span></a>
            <p class="footer-text"><span>Made with <i class="fa fa-heart color-highlight font-16 pl-2 pr-2"></i> by
                    Enabled</span><br><br>Powered by the best Mobile Website Developer on Envato Market. Elite Quality.
                Elite Products.</p>
            <div class="text-center mb-3">
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon icon-xs rounded-sm shadow-l mr-1 bg-phone"><i class="fa fa-phone"></i></a>
                <a href="#" data-menu="menu-share" class="icon icon-xs rounded-sm mr-1 shadow-l bg-red2-dark"><i
                        class="fa fa-share-alt"></i></a>
                <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-dark1-light"><i
                        class="fa fa-angle-up"></i></a>
            </div>
            <p class="footer-copyright">Copyright &copy; Enabled <span id="copyright-year">2017</span>. All Rights Reserved.
            </p>
            <p class="footer-links"><a href="#" class="color-highlight">Privacy Policy</a> | <a href="#"
                    class="color-highlight">Terms and Conditions</a> | <a href="#" class="back-to-top color-highlight"> Back
                    to Top</a></p>
            <div class="clear"></div>
        </div>

    </div>
    <!-- End of Page Content-->
@endsection
