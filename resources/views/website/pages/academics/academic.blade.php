@extends('website.layout.master')
 @section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Academics</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Academics</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                <div class="shape-image shape-image-1">
                    <img src="{{ asset('website/assets/images/shapes/shape-11-07.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-2">
                    <img src="{{ asset('website/assets/images/shapes/shape-01-02.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-3">
                    <img src="{{ asset('website/assets/images/shapes/shape-03.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-4">
                    <img src="{{ asset('website/assets/images/shapes/shape-13-12.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-5">
                    <img src="{{ asset('website/assets/images/shapes/shape-36.png')}}" alt="Shape Thumb" />
                </div>
                <div class="shape-image shape-image-6">
                    <img src="{{ asset('website/assets/images/shapes/shape-05-07.png')}}" alt="Shape Thumb" />
                </div>
            </div>
        </div>
    </div>
</div>


{{-- start --}}
<div class="home-three-about edu-about-area about-style-4 bg-color-white edu-section-gapBottom">
    <div class="container eduvibe-animated-shape">
        <div class="row g-lg-5 g-md-5 g-sm-5">
            {{-- <div class="col-lg-12 col-xl-6">
                <div class="gallery-wrapper">
                    <img class="image-1" src="assets/images/about/about-05/about-group-01.jpg" alt="About Images">
                    <img class="image-2" src="assets/images/about/about-05/about-group-02.jpg" alt="About Images">
                    <img class="image-3" data-parallax='{"x": 0, "y": -120}' src="assets/images/about/about-05/about-group-03.jpg" alt="About Images">
                </div>
            </div> --}}
            <div class="col-lg-12 col-xl-12">
                <div class="inner mt_mobile--40">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <center><span class="pre-title">Who We Are</span>
                        <h3 class="title">Objectives</h3></center>
                    </div>
                    <div class="feature-style-6 mt--40">
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/degree.png')}}" width="50px" alt="Icons Images">

                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To admit students to different academic degree courses from a cross-section of society and give them exposure to an environment conducive to studying and getting a relevant degree.</p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/infrastructure.png')}}" width="50px" alt="Icons Images">
                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To make available basic infrastructural and learning facilities to the students and staff to help them excel in relevant examinations.</p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/coach.png')}}" width="50px" alt="Icons Images">

                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To provide special facilities like remedial coaching to students, preparation for competitive examinations, and language skill development, soft skills development etc.
                                </p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/graduated.png')}}" width="50px" alt="Icons Images">
                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To help students and staff face dynamic competition.

                                </p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/book.png')}}" alt="Icons Images">
                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To create awareness about global ecology, societal bonus, dignity of labor etc. through EVS Sports and other extracurricular activities.
                                </p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/leadership.png')}}" width="50px" alt="Icons Images">
                                {{-- <img src="assets/images/icons/book.png" alt="Icons Images"> --}}
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To inculcate leadership qualities with a sense of social and national responsibility in students and staff.</p>
                            </div>
                        </div>
                        <div class="edu-feature-list color-variation-1" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="icon">
                                <img src="{{ asset('website/assets/images/icons/meditation.png')}}" alt="Icons Images">
                            </div>
                            <div class="content">
                                {{-- <h6 class="title">Industry Expert Instructor</h6> --}}
                                <p class="description">To encourage and conduct special activities like Seminars, workshops, Meditation, and Stress management techniques, presentations, Quizzes. Group discussion, Excursion etc. to help students and staff, develop a comprehensive personality.
                                </p>
                            </div>
                        </div>   
                    </div>
                    {{-- <div class="read-more-btn mt--30" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="edu-btn" href="about-us-1.html">Know About Us <i class="icon-arrow-right-line-right"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1"><img src="{{ asset('website/assets/images/shapes/shape-03-08.png')}}" alt="Shape Thumb" /></div>
            <div class="shape-image shape-image-2"><img src="{{ asset('website/assets/images/shapes/shape-27.png')}}" alt="Shape Thumb" /></div>
        </div>
    </div>
</div>
{{-- end --}}
{{-- start --}}
<div class="eduvibe-about-three-mission edu-mission-vision-area edu-section-gap border-bottom-1 bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="thumbnail mb--50">
                    <div class="shape-image image-1">
                        <img src="{{ asset('website/assets/images/mission/Frame_7.jpg')}}" data-parallax='{"x": 0, "y": 80}' alt="Gallery Images">
                    </div>
                    <div class="shape-image image-2">
                        <img src="{{ asset('website/assets/images/mission/Frame_8.jpg')}}" data-parallax='{"x": 0, "y": -60}' alt="Gallery Images">
                    </div>
                    <div class="shape-image image-3">
                        <img src="{{ asset('website/assets/images/mission/Frame_9.jpg')}}" data-parallax='{"x": 0, "y": 80}' alt="Gallery Images">
                    </div>
                    <div class="shape-image image-4">
                        <img src="{{ asset('website/assets/images/mission/Frame_10.jpg')}}" data-parallax='{"x": 0, "y": -80}' alt="Gallery Images">
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="animated-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-04-01.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape shape-1"><span class="shape-dot"></span></div>
            <div class="shape shape-2"><span class="shape-dot"></span></div>
        </div>
    </div>

    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="our-mission">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Library</span>
                        <h3 class="title">Discipline In The Library</h3>
                        <p class="mt--30 mb--0">1) Strictly observe the rules and regulations at the library.
                            <br>2) Use Library books with great care.
                            <br>3) Do not scribble anything on the books borrowed from the library.
                            <br>4) Never fail to return the books on the due date.
                            <br>5) Tearing of papers or damaging the library will result in disciplinary action.
                            <br>6) Maintain absolute silence in the study room.
                            <br>7) The students are allowed to keep a book for eight days only. Failing to do so a fee of Rs. 5/- per day will be charged for fifteen (15) days after the due date later a fine of Rs. 25/- per day will be charged till the book is returned. In case of any problem consult the librarian.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="our-vision">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Laboratory</span>
                        <h3 class="title">Discipline In The Laboratory</h3>
                        <p class="mt--30 mb--0">1) Maintain discipline in the laboratory.
                            <br>2) Handle the equipment with great care failing to do so a breakage charge of equipment will be taken by students.
                            <br>3) Negligence of any kind will invite due action.
                            <br>4) Maintain your journal.
                            <br>5) While handling materials like acids, electrical equipment etc. Students should take all necessary precautions.
                            <br>6) In case you have any difficulty consult the instructor.
                            <br>7) Help to keep your laboratory clean. 
                            <br>8) Use an apron, when you are in the laboratory.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--end  --}}
<div class="edu-service-area service-wrapper-3">
    <div class="about-us-two-service-wrapper bhh bg-image position-relative">
        <div class="eduvibe-about-us-two-service ">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">What We Offer</span>
                            <h3 class="title">Science faculty for XI & XII </h3>
                            <p>(Medium of Instruction : English)</p>
                        </div>
                    </div>
                </div>
{{-- 
                <div class="row eduvibe-about-one-service g-5 mt--20">
                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-3 text-left shape-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <i class="icon-Destination"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Expert Instruction</a></h6>
                                    <p class="description">Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim</p>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-3 text-left shape-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <i class="icon-Browser"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Video Tutorials</a></h6>
                                    <p class="description">Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim</p>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-3 text-left shape-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <i class="icon-Lock"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Lifetime Access</a></h6>
                                    <p class="description">Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim</p>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-3 text-left shape-bg-4">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <i class="icon-Settings"></i>
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Learn From Anywhere</a></h6>
                                    <p class="description">Fusce tempor, tortor vehicula posuere, mi est iaculis quam, nec luctus enim</p>
                                    <div class="read-more-btn">
                                        <a class="btn-transparent sm-size heading-color" href="#">Learn More<i class="icon-arrow-right-line-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                </div> --}}

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-29.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-02-06.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>

        <div class="eduvibe-about-us-two-video">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="video-gallery-wrapper bhh video-section-overlayto-another">
                            <div class="video-gallery-1">
                                <div class="thumbnail video-popup-wrapper">
                                    <img class="radius-small w-100" src="{{ asset('website/assets/images/videopopup/table.jpg')}}" alt="Video Images">
                                    {{-- <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation btn-secondary-color size-80"> --}}
                                        {{-- <span class="play-icon"></span> --}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-07-01.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-03-02.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Winner Area  -->
{{-- <div class="eduvibe-about-two-award edu-winner-area edu-section-gap bg-color-white">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Award</span>
                    <h3 class="title">Our Winning Award</h3>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--20">

            <!-- Start Card Single  -->
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-winner-card">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/award/award-01/award-01.png" alt="Winner Icon">
                        </div>
                        <div class="content">
                            <span class="subtitle">Market / 2023</span>
                            <h6 class="title">Envato Design of The Week</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Single  -->

            <!-- Start Card Single  -->
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-winner-card">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/award/award-01/award-02.png" alt="Winner Icon">
                        </div>
                        <div class="content">
                            <span class="subtitle">Udemy / 2023</span>
                            <h6 class="title">Awards Site of The Year</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Single  -->

            <!-- Start Card Single  -->
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-winner-card">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/award/award-01/award-03.png" alt="Winner Icon">
                        </div>
                        <div class="content">
                            <span class="subtitle">Review / 2023</span>
                            <h6 class="title">Best Customer Support</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Single  -->

            <!-- Start Card Single  -->
            <div class="col-lg-3 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-winner-card">
                    <div class="inner">
                        <div class="icon">
                            <img src="assets/images/award/award-01/award-01.png" alt="Winner Icon">
                        </div>
                        <div class="content">
                            <span class="subtitle">Market / 2023</span>
                            <h6 class="title">Top Selling Premium Item</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card Single  -->
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="assets/images/shapes/shape-03-07.png" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="assets/images/shapes/shape-04-01.png" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="assets/images/shapes/shape-25-02.png" alt="Shape Thumb" />
            </div>
            <div class="shape shape-1"><span class="shape-dot"></span></div>
        </div>
    </div>
</div> --}}
<!-- End Winner Area  -->

 <!-- Start Video Area  -->
 <div class="eduvibe-home-four-video edu-video-area edu-section-gap video-style-2">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-8">
                <div class="pr--75 pr_lg--30 pr_md--0 pr_sm--0">
                    <div class="thumbnail video-popup-wrapper">
                        <img class="radius-small" src="{{ asset('website/assets/images/videopopup/Group_8.png')}}" width="600rem" alt="Video PopUp Thumb">
                        {{-- <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation color-secondary size-80"> --}}
                            <span class="play-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="content mt_md--40 mt_sm--40">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <span class="pre-title">Learn From Today</span>
                        <h3 class="title">Uniform</h3>
                    </div>
                    <p class="description mt--40 mb--40 mt_md--20 mt_sm--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">According to the decision taken by the college Management, the present uniform is compulsory for the students</p>
                    {{-- <div class="read-more-btn text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="edu-btn" href="#">How It Works<i class="icon-arrow-right-line-right"></i></a>
                    </div> --}}
                </div>
                <div class="content mt_md--40 mt_sm--40">
                    <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        {{-- <span class="pre-title">Learn From Today</span> --}}
                        <h3 class="title">Transform Your Life Through Education</h3>
                    </div>
                    <p class="description mt--40 mb--40 mt_md--20 mt_sm--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Students who have passed the S.S.C. Examination i.e. Std X of the Maharashtra State Board of Secondary and Higher Secondary on the basis of merit and the general norm of maintaining reservation quota as per Government rules. The students from other Boards from outside Maharashtra are advised to get the Migration Certificate. They are required to apply the prescribe 
                        for the divisional secretory Maharashtra Board Nashik Division for Eligibility Certificate.
                        </p>
                    {{-- <div class="read-more-btn text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="edu-btn" href="#">How It Works<i class="icon-arrow-right-line-right"></i></a>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-03-10.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('website/assets/images/shapes/shape-19-03.png')}}" alt="Shape Thumb" />
            </div>
        </div>
    </div>
    <div class="side-shape-image d-lg-block d-none">
        <img src="assets/images/videopopup/video-infinite-rotate.png" alt="Shape Images" />
    </div>

</div>
<!-- End Video Area  -->
</section>
@endsection