@extends('front.layouts.auth.base')
@section('page-content')

    <div class="page-content header-clear-medium">
        <div class="card card-style bg-18" data-card-height="300">
            <div class="card-center text-center">
                <i class="fa fa-trophy color-yellow1-dark fa-6x"></i>
                <h1 class="font-36 color-white pt-3">Course Rewards</h1>
                <p class="boxed-text-xl color-white opacity-70 mb-0">For all the courses you read you get an awesome badge
                    to brag with! The more courses, the more badges and perks!</p>
            </div>
            <div class="card-overlay bg-black opacity-70"></div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h3>Your Progress</h3>
                <p>
                    Complete all the rewards to unlock a special discount on your next years subscription! Your current
                    progress is shown below.
                </p>
                <div class="divider"></div>
                <div class="row mb-0">
                    <div class="col-4 text-center">
                        <h1 class="font-32"><i class="fa fa-check-circle color-green1-dark"></i></h1>
                        <h5 class="font-14">Account<br>Setup</h5>
                    </div>
                    <div class="col-4 text-center">
                        <h1 class="font-32">65%</h1>
                        <h5 class="font-14 line-height-s font-600 pt-2">Achievement<br>Completed</h5>
                    </div>
                    <div class="col-4 text-center">
                        <h1 class="font-32">51</h1>
                        <h5 class="font-14 line-height-s font-600 pt-2">Reward<br>Points</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style mb-2">
            <div class="content">
                <div class="d-flex">
                    <div class="align-self-center">
                        <i class="fa fa-heart fa-3x text-center color-red2-dark" style="width:40px"></i>
                    </div>
                    <div class="align-self-center px-3">
                        <h4 class="mb-0">Book Lover</h4>
                        <p>Unlocked after reading 15 chapters</p>
                    </div>
                    <div class="align-self-center ml-auto">
                        <span class="badge bg-green1-dark px-2 py-2 font-10">UNLOCKED</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style mb-2">
            <div class="content">
                <div class="d-flex">
                    <div class="align-self-center">
                        <i class="fa fa-bolt fa-3x text-center color-yellow1-dark" style="width:40px"></i>
                    </div>
                    <div class="align-self-center px-3">
                        <h4 class="mb-0">Speed Reader</h4>
                        <p>Read an Entire course in 1 day or less</p>
                    </div>
                    <div class="align-self-center ml-auto">
                        <span class="badge bg-blue2-dark px-2 py-2 font-10">IN PROGRESS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style mb-2">
            <div class="content">
                <div class="d-flex">
                    <div class="align-self-center">
                        <i class="fa fa-bug fa-3x text-center color-green1-dark" style="width:40px"></i>
                    </div>
                    <div class="align-self-center px-3">
                        <h4 class="mb-0">Correct a Course</h4>
                        <p>Report a bug in a Course</p>
                    </div>
                    <div class="align-self-center ml-auto">
                        <span class="badge bg-red2-dark px-2 py-2 font-10">0/1 - COMPLETE</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-style">
            <div class="content">
                <div class="d-flex">
                    <div class="align-self-center">
                        <i class="fa fa-share-alt fa-3x text-center color-teal-dark" style="width:40px"></i>
                    </div>
                    <div class="align-self-center px-3">
                        <h4 class="mb-0">Refer 5 Friends</h4>
                        <p>Bring 5 Friends to Courses</p>
                    </div>
                    <div class="align-self-center ml-auto">
                        <span class="badge bg-red2-dark px-2 py-2 font-10">4/5 - COMPLETE</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style bg-14" data-card-height="300">
            <div class="card-center pl-3">
                <h1 class="color-white font-28 mb-0">Subscribe for</h1>
                <h1 class="color-white font-31">to Unlimted</h1>
                <h1 class="color-white font-20 mt-n2">Books and Courses</h1>
                <a href="#" class="btn btn-m rounded-sm bg-highlight color-white mt-3 text-uppercase font-800">Start your
                    Trial Now</a>
                <p class="mb-0 color-white opacity-60 font-11 mt-2">30 Day Free Trial then 9.99 / month</p>
            </div>
            <div class="card-overlay bg-black opacity-60"></div>
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
