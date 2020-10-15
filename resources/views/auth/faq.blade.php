@extends('front.layouts.auth.base')
@section('page-content')

    <div class="page-content header-clear-medium">

        <div class="card card-style preload-img" data-src="images/pictures/27t.jpg" data-card-height="350">
            <div class="card-center text-center">
                <i class="fa fa-search fa-5x color-white"></i>
                <h1 class="color-white mt-4">Knowledge Base</h1>
                <p class="color-white font-12 mt-n2 mb-5">Seach for all you need in 1 page.</p>
                <div class="mr-4 ml-4">
                    <div class="search-box bg-dark rounded-m bottom-0">
                        <i class="fa fa-search ml-2"></i>
                        <input type="text" class="border-0" placeholder="Search here.. - try the word demo " data-search>
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </div>

        <div class="card card-style search-results disabled-search-list">
            <div class="content pt-0 pb-0">
                <div class="list-group list-custom-large">
                    <a href="#" data-filter-item data-filter-name="all demo smartphone apple iphone">
                        <i class="fab fa-apple color-gray2-dark"></i>
                        <span>Apple</span>
                        <strong>Works on iOS 10 and Higher</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo smartphone apple iphone">
                        <i class="fab fa-android color-green1-dark"></i>
                        <span>Android</span>
                        <strong>Works on Android 5.1.1 and Higher</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo code css3 css">
                        <i class="fab fa-css3 color-blue2-dark font-17"></i>
                        <span>CSS3 </span>
                        <strong>Beautiful Design. Simple Code.</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo code html5 html">
                        <i class="fab fa-html5 color-orange-dark"></i>
                        <span>HTML5 </span>
                        <strong>Powerful and Universally Compatible</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo support help">
                        <i class="fa fa-life-ring color-red2-dark font-17"></i>
                        <span>Support </span>
                        <strong>Elite Quality, 24/7 Support for Buyers</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo code js jquery java javascript">
                        <i class="fab fa-js color-yellow2-dark font-17"></i>
                        <span>JavaScript </span>
                        <strong>Clean Code, Easy to Use and Modify</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="#" data-filter-item data-filter-name="all demo support elite help documentation">
                        <i class="fa fa-file color-gray2-dark font-17"></i>
                        <span>Documentation </span>
                        <strong>Every Feature and Aspect Covered.</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-2">
                <h3>Frequent Questions</h3>
                <p class="color-highlight font-12 mt-n2 mb-2">Really, we get asked this often.</p>
                <p>
                    We get asked these questions a lot, so we made this small section to help you out identifying what you
                    need faster.
                </p>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-1" class="font-600">Is this a PWA?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-1">
                            <label class="custom-control-label" for="question-1"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-1" class="switch-is-unchecked">
                    <p class="pb-3">
                        Yes. Our item is a PWA. We have a servier worker and a manifest.json file ready and prepared for you
                        to use the item offline.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-2" class="font-600">Is this a Cordova App?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-2">
                            <label class="custom-control-label" for="question-2"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-2" class="switch-is-unchecked">
                    <p class="pb-3">
                        No, but we have a ready built version in our portfolio and you can convert it to Cordova yourself.
                        It's really simple.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-3" class="font-600">Is this a Cordova App?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-3">
                            <label class="custom-control-label" for="question-3"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-3" class="switch-is-unchecked">
                    <p class="pb-3">
                        No, but we have a ready built version in our portfolio and you can convert it to Cordova yourself.
                        It's really simple.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-4" class="font-600">Is this a WordPres Theme?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-4">
                            <label class="custom-control-label" for="question-4"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-4" class="switch-is-unchecked">
                    <p>
                        No. Our item is a HTML, CSS3 and JS Site Template. You can however convert it to a WordPress Theme.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-5" class="font-600">Is this built with Boostrap?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-5">
                            <label class="custom-control-label" for="question-5"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-5" class="switch-is-unchecked">
                    <p class="pb-3">
                        Yes! We include 2 versions, one built with Boostrap, and a much more flexible and powerful custom
                        AJAX version.
                    </p>
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
