@extends('front.layouts.auth.base')
@section('page-content')

    <div class="page-content header-clear-medium">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card card-style preload-img" data-src="images/pictures/8w.jpg" data-card-height="130">
                <div class="card-center ml-3">
                    <h1 class="color-white mb-0">Get in Touch</h1>
                    <p class="color-white mt-n1 mb-0">We're always here for you!</p>
                </div>
                <div class="card-center mr-3">
                    <a href="{{ route('home') }}" data-back-button
                        class="btn btn-m float-right rounded-xl shadow-xl text-uppercase font-800 bg-highlight">Back
                        Home</a>
                </div>
                <div class="card-overlay bg-black opacity-80"></div>
            </div>

            <div class="formValidationError bg-red2-dark content rounded-sm shadow-xl" id="contactNameFieldError">
                <p class="text-center text-uppercase p-2 color-white font-900 ">Name is required!</p>
            </div>
            <div class="formValidationError bg-red2-dark content rounded-sm shadow-xl" id="contactEmailFieldError">
                <p class="text-center text-uppercase p-2 color-white font-900">Mail address required!</p>
            </div>
            <div class="formValidationError bg-red2-dark content rounded-sm shadow-xl" id="contactEmailFieldError2">
                <p class="text-center text-uppercase p-2 color-white font-900">Mail address must be valid!</p>
            </div>
            <div class="formValidationError bg-red2-dark content rounded-sm shadow-xl" id="contactMessageTextareaError">
                <p class="text-center text-uppercase p-2 color-white font-900">Message field is empty!</p>
            </div>

            <div class="formSuccessMessageWrap card card-style">
                <div class="shadow-l rounded-m bg-gradient-green1 mr-n1 ml-n1 mb-n1 ">
                    <h1 class="color-white text-center pt-4"><i
                            class="fa fa-check-circle fa-3x shadow-s scale-box rounded-circle"></i></h1>
                    <h2 class="color-white bold text-center pt-3">Message Sent</h2>
                    <p class="color-white pb-4 text-center mt-n2 mb-0">We'll get back to you shortly.</p>
                </div>
            </div>
        </form>
        <div class="formSuccessMessageWrap card card-style">
            <div class="content text-center">
                <h2>Meanwhile, let's get social!</h2>
                <p class="boxed-text-xl">
                    Here are our social media platforms! Follow us for the latest updates or just say hello!
                </p>
                <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-instagram ml-3 mr-3"><i
                        class="fab fa-instagram"></i></a>
                <a href="#" class="icon icon-xl shadow-xl rounded-xl bg-twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="card card-style contact-form">
            <div class="content">
                <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                    <fieldset>
                        <div class="form-field form-name">
                            <label class="contactNameField color-theme"
                                for="contactNameField">Name:<span>(required)</span></label>
                            <input type="text" name="contactNameField" value=""
                                class="contactField round-small requiredField" id="contactNameField" />
                        </div>
                        <div class="form-field form-email">
                            <label class="contactEmailField color-theme"
                                for="contactEmailField">Email:<span>(required)</span></label>
                            <input type="text" name="contactEmailField" value=""
                                class="contactField round-small requiredField requiredEmailField" id="contactEmailField" />
                        </div>
                        <div class="form-field form-text">
                            <label class="contactMessageTextarea color-theme"
                                for="contactMessageTextarea">Message:<span>(required)</span></label>
                            <textarea name="contactMessageTextarea" class="contactTextarea round-small requiredField"
                                id="contactMessageTextarea"></textarea>
                        </div>
                        <div class="form-button">
                            <input type="submit"
                                class="btn bg-highlight text-uppercase font-900 btn-m btn-full rounded-sm  shadow-xl contactSubmitButton"
                                value="Send Message" data-formId="contactForm" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="card card-style">
            <div class="responsive-iframe">
                <iframe
                    src='https://maps.google.com/?ie=UTF8&amp;ll=47.595131,-122.330414&amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed'
                    frameborder='0' allowfullscreen></iframe>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-0">
                <h3 class="font-700">Postal Information</h3>
                <p class="pb-0 mb-0">PO Box 22161 Street Collins East</p>
                <p class="pb-0 mb-0">PO Box 16122 Collins Street West</p>
                <p class="pb-0">Victoria 8007 Australia</p>

                <div class="divider"></div>

                <h3 class="font-700">Envato Headquarters</h3>
                <p class="pb-0 mb-0">121 King Street, Melbourne</p>
                <p class="pb-0 mb-0">PO Box 16122 Collins Street West</p>
                <p class="pb-0">Victoria 3000 Australia</p>

                <div class="list-group list-custom-small">
                    <a href="tel:+1 234 567 890">
                        <i class="fa font-14 fa-phone color-phone"></i>
                        <span>+1 234 567 8900</span>
                        <span class="badge bg-red2-dark">TAO TO CALL</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="mailto:mail@domain.com">
                        <i class="fa font-14 fa-envelope color-mail"></i>
                        <span>mail@domain.com</span>
                        <span class="badge bg-red2-dark">TAO TO MAIL</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="https://www.facebook.com/enabled.labs/">
                        <i class="fab font-14 fa-facebook color-facebook"></i>
                        <span>enabled.labs</span>
                        <i class="fa fa-link"></i>
                    </a>
                    <a href="https://twitter.com/iEnabled">
                        <i class="fab font-14 fa-twitter-square color-twitter"></i>
                        <span>@iEnabled</span>
                        <i class="fa fa-link"></i>
                    </a>
                    <a href="#" class="border-0">
                        <i class="fab font-14 fa-linkedin color-linkedin"></i>
                        <span>@Enabled</span>
                        <i class="fa fa-link"></i>
                    </a>

                </div>
            </div>
        </div>

        <div class="footer card card-style">
            <a href="#" class="footer-title"><span class="color-highlight">Games Predictions</span></a>
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
