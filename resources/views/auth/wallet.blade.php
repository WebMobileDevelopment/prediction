@extends('front.layouts.auth.base')
@section('page-content')


    <div class="page-content header-clear-medium">

        <div data-card-height="230" class="card card-style rounded-m shadow-xl preload-img"
            data-src="images/pictures/18w.jpg">
            <div class="card-top mt-4 ml-3">
                <h1 class="color-white mb-0 mb-n2">Karla Black</h1>
                <p class="bottom-0 color-white opacity-50 under-heading font-12">1234 5678 9012 3456</p>
            </div>
            <div class="card-top mt-4 mr-3">
                <a href="#"
                    class="mt-1 float-right text-uppercase font-900 font-11 btn btn-s rounded-s shadow-l bg-highlight">Add
                    Funds</a>
            </div>
            <div class="card-bottom text-center">
                <h1 class="color-white fa-4x">$8.178</h1>
                <p class="color-white opacity-70 font-11">Remaining Account Ballance</p>
            </div>
            <div class="card-bottom">
                <p class="ml-3 font-8 font-500 opacity-50 color-white">Exp: 10/22</p>
            </div>
            <div class="card-bottom">
                <p class="text-right mr-3 font-8 font-500 opacity-50 color-white"><i
                        class="fa fa-wifi font-10 rotate-90"></i></p>
            </div>
            <div class="card-overlay bg-black opacity-70"></div>
        </div>

        <div class="card card-style bg-theme pb-0">
            <div class="content content-full">
                <div class="tab-controls tabs-round tab-animated tabs-medium shadow-xl" data-tab-items="3"
                    data-tab-active="bg-blue2-dark color-white">
                    <a href="#" data-tab-active data-tab="tab-1">History</a>
                    <a href="#" data-tab="tab-2">Overview</a>
                    <a href="#" data-tab="tab-3">Notifications</a>
                </div>
                <div class="clearfix mb-3"></div>
            </div>
            <div class="tab-content" id="tab-1">
                <div class="mx-3 list-group list-custom-large">
                    <a href="#" class="mt-n3">
                        <i class="fab fa-apple rounded-xl shadow-xl bg-gray2-dark"></i>
                        <span>Apple Music</span>
                        <strong>Monthly Subscription</strong>
                        <span class="badge bg-red2-light font-11">25.00 USD</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-user rounded-xl shadow-xl bg-blue2-dark"></i>
                        <span class="left-10">Affiliate Earnings</span>
                        <strong class="left-10">Comission Payment Salary</strong>
                        <span class="badge bg-green1-dark font-11">99.00 USD</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-spotify rounded-xl shadow-xl bg-dark2-dark"></i>
                        <span class="left-10">Spotify Premium</span>
                        <strong class="left-10">Monthly Subscription</strong>
                        <span class="badge bg-red2-light font-11">25.00 USD</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-heart rounded-xl shadow-xl bg-red2-dark"></i>
                        <span class="left-10">Gym Membership</span>
                        <strong class="left-10">Monthly Subsciption</strong>
                        <span class="badge bg-red2-light font-11">15.00 USD</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#">
                        <i class="fa fa-dollar-sign rounded-xl shadow-xl bg-green1-dark"></i>
                        <span class="left-10">Bank Added Funds</span>
                        <strong class="left-10">Manual Payment Adusted</strong>
                        <span class="badge bg-green1-dark font-11">1500.00 USD</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>


            <div class="tab-content" id="tab-2">
                <p class="content mt-0">
                    A graphical view of your wallet. The expenses, incomes and available funds in your account.
                    These are created using the powerful charts.js plugin.
                </p>
                <div class="divider divider-margins"></div>
                <div class="chart-container mb-4" style="height:300px;">
                    <canvas class="chart" id="wallet-chart" />
                </div>
            </div>

            <div class="tab-content" id="tab-3">
                <p class="content mt-0">
                    Information regarding services provided by your wallet or other useful information that can go here.
                    Simple to use and edit.
                </p>
                <div class="divider divider-margins"></div>
                <div class="alert mr-3 ml-3 mb-5 rounded-s shadow-xl bg-green1-dark" role="alert">
                    <span class="alert-icon"><i class="fa fa-check font-18"></i></span>
                    <h4 class="text-uppercase color-white">Transfer Complete</h4>
                    <strong class="alert-icon-text">You received $200 from John Doe.</strong>
                </div>
                <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-blue2-dark" role="alert">
                    <span><i class="fa fa-upload"></i></span>
                    <strong>Send $100 to Karla</strong>
                    <strong class="float-right opacity-50">Processing</strong>
                </div>
                <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-green1-dark" role="alert">
                    <span><i class="fa fa-upload"></i></span>
                    <strong>Send 14.99 to John</strong>
                    <strong class="float-right opacity-50">Success</strong>
                </div>
                <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-yellow1-dark" role="alert">
                    <span><i class="fa fa-download"></i></span>
                    <strong>Receive $500 from Joe</strong>
                    <strong class="float-right opacity-50">Error</strong>
                </div>
                <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-red2-dark" role="alert">
                    <span><i class="fa fa-user"></i></span>
                    <strong>Withdraw $500 to Card</strong>
                    <strong class="float-right opacity-50">Failed</strong>
                </div>

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
