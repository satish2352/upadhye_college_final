
        <!-- Start Footer Area  -->

                                
                <footer class="eduvibe-footer-one edu-footer footer-style-default">
            <div class="footer-top">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="edu-footer-widget">
                                <div class="logo">
                                    <a href="{{url('/')}}">
                                        <img class="logo-light" src="{{ asset('website/assets/images/logo/LOGOfinal.png')}}" alt="Site Logo">
                                    </a>
                                </div>
                                <p class="description">Upadhye Best science colleges in Nashik Today Nashik has become an industrial center and in the last six decades the eternal Godavari has silently watched a great change.</p>
                                <ul class="social-share">
                                    <li><a href="{{ $website_contact_details[0]['twitter_link'] }}"><i class="icon-Twitter"></i></a></li>
                                    <li><a href="{{ $website_contact_details[0]['facebook_link'] }}"><i class="icon-Fb"></i></a></li>
                                    <li><a href="{{ $website_contact_details[0]['youtube_link'] }}"><i class="icon-youtube"></i></a></li>
                                    <li><a href="{{ $website_contact_details[0]['instagram_link'] }}"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget explore-widget">
                                <h5 class="widget-title">Explore</h5>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="{{url('/about')}}"><i class="icon-Double-arrow"></i>About Us</a></li>
                                        <li><a href="{{url('/academic')}}"><i class="icon-Double-arrow"></i>Academics</a></li>
                                        <li><a href="{{url('/achiever')}}"><i class="icon-Double-arrow"></i>Achiever</a></li>
                                        <li><a href="{{url('/campus')}}"><i class="icon-Double-arrow"></i>Campus</a></li>
                                        {{-- <li><a href="privacy-policy.html"><i class="icon-Double-arrow"></i>Privacy Policy</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget quick-link-widget">
                                <h5 class="widget-title">Our Courses</h5>
                                <div class="inner">
                                    <ul class="footer-link link-hover">
                                        <li><a href="{{url('/science')}}"><i class="icon-Double-arrow"></i>Science</a></li>
                                        <li><a href="{{url('/engineering')}}"><i class="icon-Double-arrow"></i>Engineering</a></li>
                                        <li><a href="{{url('/medical')}}"><i class="icon-Double-arrow"></i>Medical</a></li>
                                        {{-- <li><a href="faq.html"><i class="icon-Double-arrow"></i>FAQ</a></li>
                                        <li><a href="course-style-3.html"><i class="icon-Double-arrow"></i>Popular Courses</a></li>
                                        <li><a href="purchase-guide.html"><i class="icon-Double-arrow"></i>Terms & Conditions</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="edu-footer-widget">
                                <h5 class="widget-title">Contact Info</h5>
                                <div class="inner">
                                    <div class="widget-information">
                                        <ul class="information-list">
                                            <li><i class="icon-map-pin-line"></i>{{ $website_contact_details[0]['address'] }}
                                            </li>
                                            <li><i class="icon-phone-fill"></i><a href="tel::{{ $website_contact_details[0]['contact_one'] }}">{{ $website_contact_details[0]['contact_one'] }}</a></li>
                                            <li><i class="icon-phone-fill"></i><a href="tel::{{ $website_contact_details[0]['contact_two'] }}">{{ $website_contact_details[0]['contact_two'] }}</a></li>
                                            <li><i class="icon-phone-fill"></i><a href="tel::{{ $website_contact_details[0]['contact_three'] }}">{{ $website_contact_details[0]['contact_three'] }}</a></li>
                                            <li><i class="icon-mail-line-2"></i><a target="_blank" href="mailto:{{ $website_contact_details[0]['mail_id'] }}">{{ $website_contact_details[0]['mail_id'] }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shape-dot-wrapper shape-wrapper d-md-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="{{ asset('website/assets/images/shapes/shape-21-01.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="{{ asset('website/assets/images/shapes/shape-35.png')}}" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area copyright-default">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner text-center">
                                <p class="copyright__text">Copyright <span class="dynamic-year"></span><!-- /.dynamic-year --> 
                                    | Upadhye Classes Designed by 
                                    <a href="https://www.sumagoinfotech.com/index1.php" target="_blank">
                                        <img src="{{ asset('website/assets/images/logo/red-heart.png')}}" className="img-fluid" style="width:20px " alt="" />
                                      </a>
                                      From Nashik 
                                      {{-- <a to="https://sumagoinfotech.com/" class="cursor" target="_blank">
                                    <img src="{{ asset('website/assets/images/logo_sm.png')}}" className="img-fluid " alt="" style="width:18px" >
                                  </a> --}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area  -->
    </div>
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('website/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('website/assets/js/vendor/jquery.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/sal.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/backtotop.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/magnifypopup.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/slick.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/countdown.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/odometer.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/isotop.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/imageloaded.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/lightbox.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/wow.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/paralax.min.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/paralax-scroll.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{ asset('website/assets/js/vendor/tilt.jquery.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{ asset('website/assets/js/main.js')}}"></script>
    
</body>


<!-- Mirrored from eduvibe.html.devsvibe.com/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Dec 2023 09:49:33 GMT -->
</html>