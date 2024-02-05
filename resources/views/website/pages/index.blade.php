@extends('website.layout.master')
@section('content')
<section>
      <style>
    .edu-card {
        height: 100%; /* Set a fixed height for the card */
    }

    /*.thumbnail {*/
    /*    position: relative;*/
    /*    overflow: hidden;*/
        height: 200px; /* Set a fixed height for the thumbnail/image */
    /*}*/

    /*.thumbnail img {*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    object-fit: cover;*/
    /*}*/

    .content {
        padding: 15px; /* Add padding to the content for better spacing */
    }
    #imgSize{
        object-fit: contain;
    }
/*.thumbnail img {*/
/*    width: 100%;*/
/*    height: 100%;*/
/*    object-fit: scale-down;*/
/*}*/

@media (max-width: 767px) {
     .thumbnail {
        position: relative;
        overflow: hidden;
        height: 200px;  
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: scale-down;
}

</style>


        <!-- Start Sldier Area  -->
        {{-- <div class="slider-area banner-style-3 bg-image">
            <div class="d-flex align-items-center height-940">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6">
                            <div class="inner">
                                <div class="content text-start">
                                    <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Better Learning Future With Us</span>
                                    <h1 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Education Is About Academic Excellence</h1>
                                    <p class="description" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">Sed eu volutpat arcu, a tincidunt nulla quam, feugiat sit amet ipsum a, dapibus porta velit.</p>
                                    <a class="edu-btn" href="#" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">Get Started Today <i class="icon-arrow-right-line-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-image">
                                <div class="banner-main-image">
                                    <img class="img-01" data-sal-delay="150" data-sal="fade" data-sal-duration="800" src="{{ asset('website/assets/images/banner/banner-03/Group_1.png')}}" alt="Banner Images" />
                                </div>
                                <img class="img-02" data-sal-delay="150" data-sal="fade" data-sal-duration="800" src="{{ asset('website/assets/images/banner/banner-03/Group_3.png')}}" alt="Banner Images" />
                                <img class="img-03" data-sal-delay="150" data-sal="fade" data-sal-duration="800" src="{{ asset('website/assets/images/banner/banner-03/Group_4.png')}}" alt="Banner Images" />
                            </div>
                        </div>
                    </div>
                    <div class="shape-wrapper">
                        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                            <div class="shape-image shape-image-1">
                                <img src="{{ asset('website/assets/images/shapes/shape-11-03.png')}}" alt="Shape Thumb" />
                            </div>
                            <div class="shape-image shape-image-2">
                                <img src="{{ asset('website/assets/images/shapes/shape-01-02.png')}}" alt="Shape Thumb" />
                            </div>
                            <div class="shape-image shape-image-3">
                                <img src="{{ asset('website/assets/images/shapes/shape-13-06-07.png')}}" alt="Shap
                                e Thumb" />
                            </div>
                            <div class="shape-image shape-image-4">
                                <img src="{{ asset('website/assets/images/shapes/shape-26.png')}}" alt="Shape Thumb" />
                            </div>
                            <div class="shape-image shape-image-5">
                                <img src="{{ asset('website/assets/images/shapes/shape-05-01.png')}}" alt="Shape Thumb" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Sldier Area  -->

        {{-- new slider  --}}
       
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              @foreach($dataSlider as $key => $slider)
    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
        <img src="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $slider->image }}" class="d-block w-100" alt="{{ $slider->rank_no }}">
    </div>
@endforeach


              {{--<div class="carousel-item">
                <img src="{{ asset('website/assets/images/banner/banner-03/BANNER2.jpg')}}" class="d-block w-100" alt="...">
              </div>--}}
              {{-- <div class="carousel-item">
                <img src="{{ asset('website/assets/images/banner/banner-03/BANNER1.png')}}" class="d-block w-100" alt="...">
              </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        {{-- end slider --}}

         <!-- Start Video Area  -->
  <div class="edu-workshop-area eduvibe-home-three-video workshop-style-1 edu-section-gap bg-image bg11">
    <div class="container eduvibe-animated-shape">
        <div class="row gy-lg-0 gy-5 row--60 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="workshop-inner">
                    <div class="section-title text-white" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        {{-- <span class="pre-title">Greeting</span> --}}
                        <h3 class="title" style="color: #404197">Welcome</h3>
                    </div>
                    <p class="description" style="color: #404197" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">We welcome you to Upadhye College, a place where academic excellence meets vibrant campus life. We are a community of passionate learners, dedicated faculty, and supportive staff who are committed to helping you reach your full potential.</p>
                    <div class="read-more-btn" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        {{-- <a class="edu-btn btn-white" href="event-list.html">More Upcoming Workshop<i class="icon-arrow-right-line-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="thumbnail video-popup-wrapper">
                    <img class="radius-small w-100" src="{{ asset('website/assets/images/videopopup/Group_5.png')}}" alt="About Image">
                    {{-- <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation color-secondary size-60">
                        <span class="play-icon"></span>
                    </a> --}}
                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-09-01.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('website/assets/images/shapes/shape-04-05.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('website/assets/images/shapes/shape-13-02.png')}}" alt="Shape Thumb" />
            </div>
        </div>
    </div>
</div>
        <!-- End Video Area  -->

{{--start Features --}}
        <div class="sercice-area eduvibe-service-five service-wrapper-5 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Features</span>
                            <h3 class="title">Salient Features Of The College</h3>
                        </div>
                    </div>
                </div>

                <div class="row g-5 mt--25">

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/ENVIRNOMENT.png')}}" alt="Icons Images">
                                    {{-- <i class="fa-solid fa-seedling " style="color: #404197;"></i> --}}
                                    
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Disciplined environment</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/ENCOURANGE.png')}}" alt="Icons Images">
                                    {{-- <i class="fi fi-sr-leaf-heart"></i> --}}
                                    {{-- <i class="icon-student-read"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Encouragement to talent of the students</a></h6>
                                    <p class="description">24 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/Individual_guidance.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Pencil"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Individual guidance</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/ENTERPERNOUR.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Class"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Vocational and Entrepreneurship guidance</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/ONLINE_ADMISION.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Setting"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Online admission (Computerized admission)</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/activities.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Mind"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Various forums for curricular and extracurricular activities</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/CARRERE.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Headphone"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Career Counseling cell</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <img src="{{ asset('website/assets/images/icons/NetResoCentre.png')}}" alt="Icons Images">
                                    {{-- <i class="icon-Microscope"></i> --}}
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Network Resource Centre</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-5">
                            <div class="inner">
                                <div class="icon">
                                    <i class="icon-Fitness"></i>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Health & Fitness</a></h6>
                                    <p class="description">39 Course</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-19-02.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-21.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
{{-- end Features  --}}

{{--  --}}

    
{{--girls hostel  --}}
        <div class="home-three-about edu-about-area about-style-4 bg-color-white edu-section-gapBottom">
            <div class="container eduvibe-animated-shape">
                <div class="row g-lg-5 g-md-5 g-sm-5">
                    <div class="col-lg-12 col-xl-6">
                        <div class="gallery-wrapper">
                            <img class="image-1" src="{{ asset('website/assets/images/about/about-05/girlsactivety.png')}}" alt="About Images">
                            <img class="image-2" src="{{ asset('website/assets/images/about/about-05/girl.png')}}" alt="About Images">
                            <img class="image-3" data-parallax='{"x": 0, "y": -120}' src="{{ asset('website/assets/images/about/about-05/girls.png')}}" alt="About Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="inner mt_mobile--40">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Hostel Facillities</span>
                                <h3 class="title">Girl’s Hostel</h3>
                            </div>
                            <div class="feature-style-6 mt--40">
                                <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="icon">
                                        <img src="{{ asset('website/assets/images/icons/student.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Highly secure separate girls' hostel</h6>
                                        {{-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.</p> --}}
                                    </div>
                                </div>

                                <div class="edu-feature-list color-variation-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="icon">
                                        <img src="{{ asset('website/assets/images/icons/book.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Study rooms</h6>
                                        {{-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.</p> --}}
                                    </div>
                                </div>

                                <div class="edu-feature-list color-variation-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="icon">
                                        <img src="{{ asset('website/assets/images/icons/apartment.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Special attention to residential facilities</h6>
                                        {{-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.</p> --}}
                                    </div>
                                </div>
                                <div class="edu-feature-list color-variation-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="icon">
                                        <img src="{{ asset('website/assets/images/icons/iftar.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title">Nutritious and well-balanced meals are provided, catering to diverse dietary needs</h6>
                                        {{-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.</p> --}}
                                    </div>
                                </div>
                                <div class="edu-feature-list color-variation-3" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="icon">
                                        <img src="{{ asset('website/assets/images/icons/group.png')}}" alt="Icons Images">
                                    </div>
                                    <div class="content">
                                        <h6 class="title"> Regular cultural and recreational activities are organized to foster a strong sense of community and belonging among residents</h6>
                                        {{-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmoded tempor incididunt dolore magna aliqua.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="read-more-btn mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="{{route('about')}}">Know About Us <i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1"><img src="{{ asset('website/assets/images/shapes/shape-03-08.png')}}" alt="Shape Thumb" /></div>
                    <div class="shape-image shape-image-2"><img src="{{ asset('website/assets/images/shapes/shape-27.png')}}" alt="Shape Thumb" /></div>
                </div>
            </div>
        </div>
{{-- /girls hostel --}}

        <div class="edu-counterup-and-course-area">
            <div class="container">
                <div class="counterup-style-2 bg-color-primary radius-small ptb--80 ">
                    <div class="row g-5">
                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-Bag"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="449">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Students Enrolled</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-trophy"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="378">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Winning Award</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-Open-book"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="289">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Academic Programs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->

                        <!-- Start Single Counter  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 line-separator">
                            <div class="edu-counterup-2 text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="icon-presentation"></i>
                                    </div>
                                    <div class="content">
                                        <h3 class="counter"><span class="odometer" data-count="235">00</span>
                                            <span class="after-icon">+</span>
                                        </h3>
                                        <span class="subtitle">Online Instructor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Counter  -->
                    </div>
                </div>
            </div>
            <div class="edu-course-area eduvibe-home-three-course counterup-overlay-top bg-image edu-section-gapTop edu-section-gapBottom">
                <div class="container eduvibe-animated-shape">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Popular Courses</span>
                                <h3 class="title">Our Popular Courses</h3>
                            </div>
                        </div>
                    </div>

                   
                        <!-- Start Single Card  -->
                    <div class="row g-5 mt--25">
                        <!-- Start Single Card  -->
                        <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a href="{{route('engg')}}">
                            <div class="edu-card card-type-1 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                            <img class="w-100" src="{{ asset('website/assets/images/course/course-01/neet.jpg')}}" alt="Course Meta">
                                        <div class="top-position status-group left-top">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <ul class="edu-meta meta-01">
                                            
                                            <li><i class="icon-time-line"></i>2 years intensive coaching</li>
                                        </ul>
                                        <h6 class="title">Medicine:NEET & MHT-CET Theory+Entrance
                                        </h6>
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span class="rating-count">(18 Review)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{route('science')}}">
                                <div class="edu-card card-type-1 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                            <img class="w-100" src="{{ asset('website/assets/images/course/course-01/jee.jpg')}}" alt="Course Meta">
                                        <div class="top-position status-group left-top">
                                        </div>                                     
                                    </div>
                                    <div class="content">
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-time-line"></i>2 years intensive coaching</li>
                                        </ul>
                                        <h6 class="title">Engineering:JEE-Mains & MHT-CET-Theory+Entrance
                                        </h6>
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span class="rating-count">(38 Review)</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="col-12 col-sm-12 col-xl-4 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <a href="{{route('science')}}">
                            <div class="edu-card card-type-1 bg-white radius-small">
                                <div class="inner">
                                    <div class="thumbnail">
                                            <img class="w-100" src="{{ asset('website/assets/images/course/course-01/jee_mains_advance.jpg')}}" alt="Course Meta">
                                        
                                        
                                       
                                    </div>
                                    <div class="content">
                                        <ul class="edu-meta meta-01">
                                            {{-- <li><i class="icon-file-list-4-line"></i>80 Lessons</li>
                                            <li><i class="icon-time-line"></i>23h 13m 41s</li> --}}
                                            <li><i class="icon-time-line"></i>2 years intensive programme</li>
                                        </ul>
                                        <h6 class="title">Engineering:JEE-Advanced(IIT-JEE)-Theory+Entrance
                                        </h6>
                                        <div class="edu-rating rating-default">
                                            <div class="rating">
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                                <i class="icon-Star"></i>
                                            </div>
                                            <span class="rating-count">(28 Review)</span>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div></a>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                      

                        <!-- End Single Card  -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="load-more-btn mt--60 text-center">
                                <a class="edu-btn" href="{{route('courses')}}">View All Courses<i
                                        class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="{{ asset('website/assets/images/shapes/shape-07.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-2">
                            <img src="{{ asset('website/assets/images/shapes/shape-04.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="{{ asset('website/assets/images/shapes/shape-28.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="{{ asset('website/assets/images/shapes/shape-03-09.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-5">
                            <img src="{{ asset('website/assets/images/shapes/shape-15-03.png')}}" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counterup Area  -->

        <!-- Start Accordion Area  -->
        {{-- <div class="edu-accordion-area eduvibe-home-three-accordion accordion-shape-1 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-6 gallery-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="{{ asset('website/assets/images/about/about-02/accordion-gallery-01.jpg')}}" alt="Shape Images">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mt--35 mt_sm--15">
                                <div class="thumbnail" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="{{ asset('website/assets/images/about/about-02/accordion-gallery-02.jpg')}}" alt="Shape Images">
                                </div>
                                <div class="thumbnail mt--15" data-sal-delay="150" data-sal="fade" data-sal-duration="800">
                                    <img class="radius-small w-100" src="{{ asset('website/assets/images/about/about-02/accordion-gallery-03.jpg')}}" alt="Shape Images">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="accordion-style-1">
                            <div class="section-title text-start mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">About Us</span>
                                <h3 class="title">Get Every General Answers From Here</h3>
                            </div>

                            <div class="edu-accordion edu-accordion-01" id="accordionExample1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingOne">
                                        <button class="edu-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What does it take become an author?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingTwo">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How to Change my Password easily?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingThree">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How to Change my Plan using PayPal?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>

                                <div class="edu-accordion-item">
                                    <div class="edu-accordion-header" id="headingFour">
                                        <button class="edu-accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How long it take to create a video course?
                                        </button>
                                    </div>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
                                        <div class="edu-accordion-body">
                                            Learning management system, combines a wide range of features to present
                                            a class setting without having the students come into a physical
                                            classroom. It all depends on the WordPress LMS plugin you go with, but
                                            in general.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape shape-1"><span class="shape-dot"></span></div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-11-04.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-25-01.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Accordion Area  -->

      
        {{-- <div class="eduvibe-home-three-testimonial edu-testimonial-area testimonial-four-wrapper edu-section-gap bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8">
                        <div class="testimonial-activation pr--55 pr_lg--0 pr_md--0 pr_sm--0">

                            <!-- Start Tastimonial Card  -->
                            <div class="testimonial-card-box variation-2">
                                <div class="eduvibe-testimonial-three inner testimonial-card-activation-1 slick-arrow-style-2">
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Lorem ipsum dolor sit amet, consectetur dloril adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-04.png')}}" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">Michle A. Smith</h6>
                                                <span class="designation">Web Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-01.png')}}" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">David M. Bard</h6>
                                                <span class="designation">Laravel Developer</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-card">
                                        <div class="rating">
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                            <i class="on icon-Star"></i>
                                        </div>
                                        <p class="description">“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum finibus bonorum.”</p>
                                        <div class="client-info">
                                            <div class="thumbnail">
                                                <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-03.png')}}" alt="Client Images">
                                            </div>
                                            <div class="content">
                                                <h6 class="title">Lorraine D. Raines</h6>
                                                <span class="designation">WordPress Expert</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tastimonial Card  -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="testimonial-four-right-content">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Testimonials</span>
                                <h3 class="title">Students Feedback</h3>
                            </div>
                            <p class="description mt--25 mb--25" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, venenatis
                                dictum et nec.</p>
                            <h6 class="subtitle" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">People Love To Learn With Us</h6>

                            <div class="row g-5">
                                <!-- Start Single Feature  -->
                                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="feature-style-3">
                                        <div class="feature-content">
                                            <h6 class="feature-title">90%</h6>
                                            <p class="feature-description">Students Complete Course Successfully </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature  -->

                                <!-- Start Single Feature  -->
                                <div class="col-lg-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <div class="feature-style-3">
                                        <div class="feature-content">
                                            <h6 class="feature-title">9/10</h6>
                                            <p class="feature-description">Users reported better learning outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature  -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-04-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-08.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-19-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('website/assets/images/shapes/shape-16-01.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div> --}}


  {{--cummittee  --}}
  <div class="edu-elements-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Skilled Committee</span>
                    <h3 class="title">About Committee </h3>
                </div>
            </div>
        </div>
        <div class="row row--20">

            <!-- Start Instructor Grid  -->
            @foreach ($serviceDetailsData as $key => $comitee)
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ Config::get('DocumentConstant.SERVICES_VIEW') }}{{$comitee->image}}" alt="{{$comitee->image}}')}}">
                                </a>
                            </div>
                            <!--<div class="team-share-info">-->
                            <!--    <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>-->
                            <!--    <a class="facebook" href="#"><i class="icon-Fb"></i></a>-->
                            <!--    <a class="twitter" href="#"><i class="icon-Twitter"></i></a>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="edu-instructor-info">
                        <h5 class="title"><a href="instructor-profile.html">{{$comitee->name}}</a></h5>
                        <span class="desc">{{$comitee->role}}</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Instructor Grid  -->


            <!-- Start Instructor Grid  -->
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-1">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-7.jpg')}}" alt="team images">
                                </a>
                            </div>
                            <div class="team-share-info">
                                <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="edu-instructor-info">
                        <h5 class="title"><a href="instructor-profile.html">Samuel Smith</a></h5>
                        <span class="desc">SEO Expert</span>
                    </div>
                </div>
            </div> --}}
            <!-- End Instructor Grid  -->

            <!-- Start Instructor Grid  -->
            {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="500" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-instructor-grid edu-instructor-1">
                    <div class="edu-instructor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="instructor-profile.html">
                                    <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-8.jpg')}}" alt="team images">
                                </a>
                            </div>
                            <div class="team-share-info">
                                <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="edu-instructor-info">
                        <h5 class="title"><a href="instructor-profile.html">Jhamina Diva</a></h5>
                        <span class="desc">Digital Marketer</span>
                    </div>
                </div>
            </div> --}}
            <!-- End Instructor Grid  -->

        </div>
    </div>
</div>
{{-- /cummitee --}}

        <!-- Start Event Area  -->
        {{-- <div class="eduvibe-home-three-event edu-event-area bg-color-white edu-section-gap">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Upcomming Event</span>
                            <h3 class="title">College Campus Life</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Event Grid   -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_1.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_2.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_3.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_4.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                {{-- class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}} 
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_5.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_6.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_7.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_8.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top"> --}}
                                        {{-- <span class="eduvibe-status status-06">04 Dec 2023</span> --}}
                                    {{-- </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta"> --}}
                                        {{-- <li><i class="icon-map-pin-line"></i>Alpaca Way Anaheim, CA 92805</li> --}}
                                    {{-- </ul> --}}
                                    {{-- <h5 class="title"><a href="event-details.html">Innovation & Technological Entrepreneurship Team</a> --}}
                                    {{-- </h5>
                                    <div class="read-more-btn"> --}}
                                        {{-- <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a> --}}
                                    {{-- </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
                  
                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/event-02.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-06">30th Oct 2023</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-map-pin-line"></i>Ritter Avenue Detroit, MI 48226</li>
                                    </ul>
                                    <h5 class="title"><a href="event-details.html">Virtual Spring Part-time Jobs Fair for Student</a></h5>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->

                    <!-- Start Event Grid   -->
                    {{-- <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-event event-grid-1 bg-shade radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="event-details.html">
                                        <img src="{{ asset('website/assets/images/event/event-02/event-03.jpg')}}" alt="Event Images">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-06">18th Sep 2023</span>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="event-meta">
                                        <li><i class="icon-map-pin-line"></i>Stout Street York, PA 17401</li>
                                    </ul>
                                    <h5 class="title"><a href="event-details.html">Explorations of Regional Chief Executive Network</a>
                                    </h5>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent" href="course-details.html">Get Ticket<i
                                                class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End Event Grid   -->
    {{-- </div> --}} 
{{-- college campus photo --}}
<div class="edu-gallery-grid-area masonary-wrapper-activation edu-section-gap bg-image bg-image--25 overflow-hidden">
    <div class="wrapper">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Upcomming Event</span>
                            <h3 class="title">College Campus Life</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    {{-- <div class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end"> --}}
                        {{-- <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Trending</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Popularity</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Featured</span></button> --}}
                    {{-- </div> --}}
                </div>
            </div>

            <div class="row g-5 mt--5">
                <div class="col-12">
                    <div class="gallery-grid-wrapper grid-metro3 mesonry-list overflow-hidden" id="animated-thumbnials">
                        <div class="resizer"></div>

                        <!-- Start Gallery Grid  -->
                        @foreach($galleryDetailsData as $key=> $gallery)
                        <a href="{{ Config::get('DocumentConstant.SLIDER_VIEW') }}{{ $gallery->image }}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ Config::get('DocumentConstant.GALLERY_VIEW') }}{{ $gallery->image }}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        @endforeach
                        <!-- End Gallery Grid  -->

                       {{--<!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_1.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--2 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_1.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_2.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--2 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_2.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_3.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_3.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_4.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_4.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_5.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--2 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_5.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_6.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_6.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_7.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--2">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_7.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->

                        <!-- Start Gallery Grid  -->
                        <a href="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_8.jpg')}}" class="edu-gallery-grid-item grid-metro-item cat--1 cat--3">
                            <div class="edu-gallery-grid">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <img class="w-100" src="{{ asset('website/assets/images/event/event-02/CAMPUS_LIFE_8.jpg')}}" alt="Portfolio Images">
                                    </div>
                                </div>

                                <div class="zoom-icon">
                                    <i class="icon-zoom-in-line"></i>
                                </div>
                                <div class="hover-action">
                                    <div class="hover-content">
                                        <div class="hover-text">
                                            <h6 class="title">Utiliz Enim Ninim Veniam Quis Exercitation</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </a>
                        <!-- End Gallery Grid  -->--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--/end college campus photo  --}}
                {{-- <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-15.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-13-05.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('website/assets/images/shapes/shape-05-01.png')}}" alt="Shape Thumb" />
                    </div>
                </div> --}}
            </div>
        </div>
        <!-- End Event Area  -->

        <!-- Start Newsletter Area  -->
        <div class="eduvibe-home-three-newsletter edu-newsletter-area newsletter-style-4 edu-section-gap bg-image">
            <div class="container eduvibe-animated-shape">
               <div class="row">
                    <div class="col-lg-12">
                        <div class="inner text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Subscribe Newsletter</span>
                                <h3 class="title">Get Every Latest News</h3>
                            </div>
                            <div class="newsletter-form newsletter-form-style-1 mt--60 mt_md--30 mt_sm--30 position-relative">
                                <form action="{{ route('subscriber') }}" method="POST">
                                    @csrf
                                    <div class="input-box text-start">
                                        <input class="large-input-box" type="email" name="email" placeholder="Enter your mail address">
                                        <div class="mail-icon">
                                            <i class="icon-mail-open-line"></i>
                                        </div>
                                        <button type="submit" class="edu-btn">Subscribe<i class="icon-arrow-right-line-right"></i></button>
                                    </div>
                                </form>
                                @if (Session::get('status') == 'success')

                                       <center> <div class="col-8 grid-margin">
                                            <div class="alert alert-success alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                <strong>Success!</strong> {{ Session::get('msg') }}
                                            </div>
                                        </div></center>

                                        @endif

                                        @if (Session::get('status') == 'errors')
                                        <center><div class="col-8 grid-margin">
                                            <div class="alert alert-danger alert-dismissible">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                                <strong>Danger!</strong> {!! session('msg') !!}
                                            </div>
                                        </div></center>
                                        @endif

                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-04-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-15-04.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-13-07.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('website/assets/images/shapes/shape-02-05.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Newsletter Area  -->
 </section>
        @endsection
