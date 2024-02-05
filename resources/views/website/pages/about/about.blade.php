@extends('website.layout.master')
 @section('content')       
<section>
        <div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-inner text-start">
                            <div class="page-title">
                                <h3 class="title">About Us</h3>
                            </div>
                            <nav class="edu-breadcrumb-nav">
                                <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                    <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
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

        {{-- <div class=" eduvibe-home-four-about edu-about-area about-style-2 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row row--50">
                    <div class="col-lg-6">
                        <div class="about-image-gallery">
                            <div class="eduvibe-about-1-img-wrapper">
                                <img class="image-1" src="{{ asset('website/assets/images/about/about-07/about-image-01.png')}}" alt="About Images" />
                                <span class="eduvibe-about-blur"><img src="{{ asset('website/assets/images/about/about-07/about-blur.png')}}" alt="About Blur" /></span>
                            </div>
                            <div class="circle-image-wrapper">
                                <img class="image-2" src="{{ asset('website/assets/images/about/about-07/about-image-02.png')}}" alt="About Images" />
                                <div class="circle-image"><span></span></div>
                            </div>
                            <div class="finished-session">
                                <div class="inner">
                                    <div class="text">2.98</div>
                                    <span class="finished-title">
                                Finished <br />
                                Sessions
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inner mt_md--40 mt_sm--40">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">About Us</span>
                                <h3 class="title">Knowledge is power, Information is liberating.</h3>
                            </div>
                            <p class="description mt--40 mt_md--20 mt_sm--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet, venenatis dictum et nec. Fringilla dictum tristique cras pellentesque consequat.</p>
                            <h6 class="subtitle mb--20" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">People Love To Learn With Us</h6>
                            <div class="about-feature-list">
                                <div class="row g-5">
                                    <!-- Start Single Feature  -->
                                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="feature-style-3">
                                            <div class="feature-content">
                                                <h6 class="feature-title">90%</h6>
                                                <p class="feature-description">90% of students see their course through to completion.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->

                                    <!-- Start Single Feature  -->
                                    <div class="col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="feature-style-3">
                                            <div class="feature-content">
                                                <h6 class="feature-title">9/10</h6>
                                                <p class="feature-description">9/10 users reported better learning outcomes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->
                                </div>
                            </div>

                            <div class="read-more-btn mt--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="about-us-1.html">Learn More<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-11-05.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-08-01.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-30.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape shape-1"><span class="shape-dot"></span></div>
                </div>
            </div>
        </div> --}}
    
            {{--about us  --}}
            <div id="about-us" class="edu-about-area about-style-1 edu-section-gap bg-color-white">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <div class="about-image-gallery">
                                <img class="image-1" src="{{ asset('website/assets/images/about/about-09/about_image.png')}}" alt="About Main Thumb" />
                                <div class="image-2"><img src="{{ asset('website/assets/images/about/about-09/about_image1.png')}}"  alt="About Parallax Thumb" /></div>
                                <div class="badge-inner"><img class="image-3" src="{{ asset('website/assets/images/about/about-09/badge.png')}}" alt="About Circle Thumb" /></div>
                                <div class="shape-image shape-image-1"><img src="{{ asset('website/assets/images/shapes/shape-04-01.png')}}" alt="Shape Thumb" /></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner">
                                <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <span class="pre-title">About Us</span>
                                    <h3 class="title">Features</h3>
                                </div>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    For the first of its kind in Nashik, Maharashtra.</p>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    Fully residential complex in the absolute natural environment.
                                </p>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    Comfortable stay with decent natural food.</p>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    Highly experienced IITian (Faculty with experience of more than 12 years)</p>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    Teaching, learning, study hours, problem-solving sessions, libraries, etc.</p>
                                <p class="description" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    For Day Scholars Batches, Bus facility from all corners of Nashik. </p>
                                {{-- <div class="about-feature-list">
                                    <!-- Start Single Feature  -->
                                    <div class="our-feature" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="icon">
                                            <i class="icon-Hand---Book"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h6 class="feature-title">Flexible Classes</h6>
                                            <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->
    
                                    <!-- Start Single Feature  -->
                                    <div class="our-feature" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="icon">
                                            <i class="icon-Campus"></i>
                                        </div>
                                        <div class="feature-content">
                                            <h6 class="feature-title">Learn From Anywhere</h6>
                                            <p class="feature-description">It is a long established fact that a reader will be distracted by this on readable content of when looking at its layout.</p>
                                        </div>
                                    </div>
                                    <!-- End Single Feature  -->
                                </div>
                                <div class="read-more-btn" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <a class="edu-btn" href="#">Know About Us<i class="icon-arrow-right-line-right"></i></a>
                                </div> --}}
                                <div class="shape shape-6 about-parallax-2 d-xl-block d-none">
                                    <img src="{{ asset('website/assets/images/shapes/shape-07.png')}}" alt="Shape Thumb" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            {{-- /about us --}}

        {{-- <div class="eduvibe-about-us-one-service edu-service-area edu-section-gapBottom bg-color-white service-bg-position">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">What We Offer</span>
                            <h3 class="title">Learn New Skills When And <br /> Where You Like</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('website/assets/images/icons/offer-icon-01.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Remote Learning</a></h6>
                                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('website/assets/images/icons/offer-icon-02.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Awesome Tutors</a></h6>
                                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('website/assets/images/icons/offer-icon-03.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Global Certificate</a></h6>
                                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="col-lg-3 col-md-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-2 card-bg-4">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                        <img src="{{ asset('website/assets/images/icons/offer-icon-04.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Carrier Guideline</a></h6>
                                    <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-04-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-02-07.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-15.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Start Video Area  -->
        {{-- <div class="edu-workshop-area eduvibe-home-three-video workshop-style-1 edu-section-gap bg-image bg-color-primary">
            <div class="container eduvibe-animated-shape">
                <div class="row gy-lg-0 gy-5 row--60 align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="workshop-inner">
                            <div class="section-title text-white" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Free Workshop</span>
                                <h3 class="title">Join Our Free Workshops</h3>
                            </div>
                            <p class="description" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit amet, consect adipi scing elit, sed do eiusmod tempor incididunt ut sed do eiusmod tempor incididunt ut labore et dolore aliqua.</p>
                            <div class="read-more-btn" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn btn-white" href="event-list.html">More Upcomming Workshop<i class="icon-arrow-right-line-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="thumbnail video-popup-wrapper">
                            <img class="radius-small w-100" src="{{ asset('website/assets/images/videopopup/video-popup-bg-02.jpg')}}" alt="About Image">
                            <a href="https://www.youtube.com/watch?v=pNje3bWz7V8" class="video-play-btn with-animation position-to-top video-popup-activation color-secondary size-60">
                                <span class="play-icon"></span>
                            </a>
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
        </div> --}}
        <!-- End Video Area  -->
    
        <!-- Start Principal Review  -->
        <div class="eduvibe-home-five-testimonial edu-testimonial-area testimonial-style-5 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <img src="{{ asset('website/assets/images/testimonial-section/principal.png')}}" alt="Testimonial Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="content-wrapper pb_md--50 pb_sm--50">
                            <div class="section-title text-start mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Why You Will Choose Guidence</span>
                                <h3 class="title">Director Desk</h3>
                            </div>
                            <!-- <div class="eduvibe-home-five-testimonial eduvibe-testimonial-three inner slick-arrow-style-2 edu-slick-button slick-button-left"> -->
                            <div class="eduvibe-testimonial-three inner eduvibe-home-five-testimonial-activation slick-arrow-style-2 edu-slick-button slick-button-left">

                                <!-- Start Tastimonial Card  -->
                                <div class="testimonial-card-box variation-3">
                                    <p class="description">“  Dear students/ Parents,
                                        <br>
                                    A good student can become a good examine! How to make him a good examine? Being in education since 1985, we have understood this very concept. Students keep on studying seriously throughout the year and get ready for the examinations i.e. for the theory and entrance examinations like JEE- Mains, IIT-JEE, Biotechnology, etc. Thus it becomes very necessary to make them study, conduct a large number of tests, evaluate them, discuss the paper immediately, let students understand their shortcomings/faults, clear the concepts, repeat the tests, build their confidence, and so on.
    
                                    {{-- The complete concept of our education institute is to practice discipline, determination, and devotion in the process of achieving student’s goals. With over 35 years of experience leading to factors like - improved facilities for learning, the revised methodologies for pupil services, research and change respective of state and national educational spectrum, and most importantly our work ethic sets us apart in the education sector. We strive and keep up to do so keeping in mind that our gems-our students- are molded for the betterment of their future. We work with the principle of working towards excellence and success.

                                    <br> We believe in teaching from the book as well as from our heart.
                                      --}}
                                 <div class="client-info">
                                        <div class="thumbnail">
                                            {{-- <img src="{{ asset('website/assets/images/testimonial/testimonial-04/principal.png')}}" alt="Client Images"> --}}
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Mr.Upadhye Sir</h6>
                                            <span class="designation">Director</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tastimonial Card  -->

                                <!-- Start Tastimonial Card  -->
                                {{-- <div class="testimonial-card-box variation-3">
                                    <p class="description">“ Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. deserunt mollit anim id est laborum.</p>
                                    <div class="client-info">
                                        <div class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-04.png')}}" alt="Client Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Lorraine D. Raines</h6>
                                            <span class="designation">WordPress Expert</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End Tastimonial Card  -->

                                <!-- Start Tastimonial Card  -->
                                {{-- <div class="testimonial-card-box variation-3">
                                    <p class="description">“ Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore. deserunt mollit anim id est laborum.</p>
                                    <div class="client-info">
                                        <div class="thumbnail">
                                            <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-03.png')}}" alt="Client Images">
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Geraldine D. Anspach</h6>
                                            <span class="designation">SEO Expert</span>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End Tastimonial Card  -->
                            </div>

                            <div class="comment-images">
                                <img src="{{ asset('website/assets/images/testimonial-section/comment-icon.png')}}" alt="Comment images">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-32-01.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-03-07.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-09-01.png')}}" alt="Shape Thumb" />
                    </div>
                </div>

            </div>
            <div class="main-image">
                <img src="{{ asset('website/assets/images/testimonial-section/testimonial-bg-line-shape.png')}}" alt="Shape Images">
            </div>
        </div>
        <!-- End Principal Review  -->

        <!-- Start Team Area  -->
        {{-- <div class="eduvibe-about-one-team edu-team-area edu-section-gap team-area-shape-position bg-image bg-image--8 paralax-area">
            <div class="wrapper">
                <div class="container eduvibe-animated-shape">
                    <div class="row g-5">
                        <div class="col-lg-12">
                            <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Skilled Instructor</span>
                                <h3 class="title">Introduce Our Life Coaches</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row row--20">
                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1 edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-1.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Mark R. Ronson</a></h5>
                                    <span class="desc">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-2.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Miranda H. Leone</a></h5>
                                    <span class="desc">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-3.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Leone P. Xaviona</a></h5>
                                    <span class="desc">Digital Marketer</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-4.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Yokollili V. Nauia</a></h5>
                                    <span class="desc">SEO Expert</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-5.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Sasoti R. Chanvi</a></h5>
                                    <span class="desc">SEO Expert</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                            <div class="edu-instructor-grid edu-instructor-1">
                                <div class="edu-instructor">
                                    <div class="inner">
                                        <div class="thumbnail">
                                            <a href="instructor-profile.html">
                                                <img src="{{ asset('website/assets/images/instructor/instructor-01/instructor-6.jpg')}}" alt="team images">
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
                                    <h5 class="title"><a href="instructor-profile.html">Hamna D. Viru</a></h5>
                                    <span class="desc">SEO Expert</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
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
                                    <h5 class="title"><a href="instructor-profile.html">Samuel D. Smith</a></h5>
                                    <span class="desc">SEO Expert</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->

                        <!-- Start Instructor Grid  -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--45" data-sal-delay="500" data-sal="slide-up" data-sal-duration="800">
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
                                    <h5 class="title"><a href="instructor-profile.html">Jhamina Y. Diva</a></h5>
                                    <span class="desc">SEO Expert</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Grid  -->
                    </div>

                    <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                        <div class="shape-image shape-image-1">
                            <img src="{{ asset('website/assets/images/shapes/shape-08-02.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-3">
                            <img src="{{ asset('website/assets/images/shapes/shape-16-01.png')}}" alt="Shape Thumb" />
                        </div>
                        <div class="shape-image shape-image-4">
                            <img src="{{ asset('website/assets/images/shapes/shape-04-02.png')}}" alt="Shape Thumb" />
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-24-02.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Team Area  -->

        {{-- start Preamble --}}
        <div class="eduvibe-home-two-counter bg-color-white edu-section-gap">
            <!-- Start Counterup Area  -->
            <div class="container eduvibe-animated-shape">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-5 pr--75 pr_md--0 pr_sm--0">
                            <!-- Start Single Counterup  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="edu-counterup">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('website/assets/images/icons/auditorium.png')}}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="449">00</span>
                                            </h3>
                                            <span>Learners & counting</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counterup  -->

                            <!-- Start Single Counterup  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="edu-counterup">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('website/assets/images/icons/extra_circular.png')}}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="330">00</span>
                                            </h3>
                                            <span>Courses & Video</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counterup  -->

                            <!-- Start Single Counterup  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="edu-counterup">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('website/assets/images/icons/lab.png')}}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="275">50</span>
                                            </h3>
                                            <span>Certified Students</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counterup  -->

                            <!-- Start Single Counterup  -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="edu-counterup">
                                    <div class="inner">
                                        <div class="icon">
                                            <img src="{{ asset('website/assets/images/icons/classs.png')}}" alt="Icons Images">
                                        </div>
                                        <div class="content">
                                            <h3 class="counter"><span class="odometer" data-count="378">00</span>
                                            </h3>
                                            <span>Winning Award</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Counterup  -->

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-us-2">
                            <div class="inner">
                                <div class="section-title text-left" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                    <span class="pre-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Why Choose Us</span>
                                    <h3 class="title">Preamble</h3>
                                </div>
                                <p class="description mt--40 mb--30">Today Nashik has become an industrial centre and in the last six decades, the eternal Godavari has silently watched a great change. Science with its entire leisurely is the thing of past. The concept of education has undergone radical change. The pursuit of skill modern and specialized, has become the keyword to professional success. 

                                    The college has to yield to this mandate of the citizen which is now irreversible.
                                    
                                    Apart from a variety of activities the college provided facilities for extra-curricular activities like the Disha Programme and sports, now the college has its own building with a spacious library, well-equipped laboratories, classrooms, an auditorium and other facilities.
                                    </p>
                                {{-- <div class="feature-style-4">
                                    <div class="edu-feature-list" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="icon">
                                            <i class="icon-Smile"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Trusted By Thousands</h6>
                                            <p>There are many variations of passages of the Ipsum available, but the majority have suffered alteration</p>
                                        </div>
                                    </div>

                                    <div class="edu-feature-list color-var-2" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                        <div class="icon">
                                            <i class="icon-Support"></i>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">Unlimited Resources With Strong Support</h6>
                                            <p>There are many variations of passages of the Ipsum available, but the majority have suffered alteration</p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-04-01.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-11.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
            <!-- End Counterup Area  -->
        </div>


        {{-- End Preamble  --}}
        <!-- Start Testimonial Area  -->
        {{-- <div class="eedu-testimonial-area eduvibe-home-two-testimonial bg-color-white testimonial-card-box-bg edu-section-gap position-relative bg-image">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">TESTIMONIALS</span>
                            <h3 class="title">Our Lovely Students Feedback</h3>
                        </div>
                    </div>
                </div>

                <div class="edu-testimonial-activation testimonial-item-3 mt--40 edu-slick-button">

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-03.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Stive Marlone</h6>
                                    <span class="designation">Web Developer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-04.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">James Carlson</h6>
                                    <span class="designation">UI/UX Designer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-01.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Nancy Phipps</h6>
                                    <span class="designation">Digital Marketer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-02.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Adam Smith</h6>
                                    <span class="designation">Web Developer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-05.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Jhaniel Devora</h6>
                                    <span class="designation">Digital Marketer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-06.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Jhamina Diva</h6>
                                    <span class="designation">Web Developer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                    <!-- Start Tastimonial Card  -->
                    <div class="testimonial-card-box">
                        <div class="inner">
                            <div class="client-info">
                                <div class="thumbnail">
                                    <img src="{{ asset('website/assets/images/testimonial/testimonial-04/client-01.png')}}" alt="Client Images">
                                </div>
                                <div class="content">
                                    <h6 class="title">Mark Ronson</h6>
                                    <span class="designation">Digital Marketer</span>
                                </div>
                            </div>
                            <p class="description">“ There are many variations of passages of Lorem Ipsum available, but the majority on have suffered alteration in some form, by a injected humour, or randomised. ”</p>
                            <div class="rating">
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                                <i class="on icon-Star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- End Tastimonial Card  -->

                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-23.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-14-02.png')}}" alt="Shape Thumb" />
                    </div>
                </div>

            </div>
        </div> --}}
        <!-- End Testimonial Area  -->

        {{-- vission and mission --}}
        <div class="eduvibe-about-three-mission edu-mission-vision-area edu-section-gap border-bottom-1 bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="thumbnail mb--50">
                            <div class="shape-image image-1">
                                <img src="{{ asset('website/assets/images/mission/Frame_2.png')}}" data-parallax='{"x": 0, "y": 80}' alt="Gallery Images">
                            </div>
                            <div class="shape-image image-2">
                                <img src="{{ asset('website/assets/images/mission/Frame_3.png')}}" data-parallax='{"x": 0, "y": -60}' alt="Gallery Images">
                            </div>
                            <div class="shape-image image-3">
                                <img src="{{ asset('website/assets/images/mission/Frame_4.png')}}" data-parallax='{"x": 0, "y": 80}' alt="Gallery Images">
                            </div>
                            <div class="shape-image image-4">
                                <img src="{{ asset('website/assets/images/mission/Frame_5.png')}}" data-parallax='{"x": 0, "y": -80}' alt="Gallery Images">
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
                                <span class="pre-title">Our Mission</span>
                                <h3 class="title">The Mission Behind <br /> Education Platform</h3>
                                <p class="mt--30 mb--0">
                                    To meet the needs of diverse education profiles of families to which our student population belongs, we strive to create an environment on our campus, to enhance academic achievement and personal as well as professional growth, through continued cooperation between students, staff and parents.
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="our-vision">
                            <div class="section-title text-start" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">Our Vision</span>
                                <h3 class="title">The Story of Our <br /> Founders</h3>
                                <p class="mt--30 mb--0">The youth of our nation is at the centre stage when it comes to building a strong Nation, and it is imperative to bring a young population from all states of society to the institution imparting higher education.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End vission mission --}}

        {{-- start managment team --}}
        {{-- <div class="edu-instructor-area eduvibe-home-one-instructor edu-section-gap bg-color-primary">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-white text-center">
                            <span class="pre-title">Team Member</span>
                            <h3 class="title">Meet Our Instructor</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-03/instructor-1.jpg')}}" alt="team images">
                                        </a>
                                    </div>
                                    <div class="edu-instructor-info">
                                        <h5 class="title"><a href="instructor-profile.html">James Carlson</a></h5>
                                        <span class="desc">WordPress Expert</span>
                                        <div class="team-share-info bg-transparent">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                            <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Instructor Grid  -->

                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-03/instructor-2.jpg')}}" alt="team images">
                                        </a>
                                    </div>
                                    <div class="edu-instructor-info">
                                        <h5 class="title"><a href="instructor-profile.html">Nancy Phipps</a></h5>
                                        <span class="desc">Digital Marketer</span>
                                        <div class="team-share-info bg-transparent">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                            <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End Instructor Grid  -->

                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible eduvibe-hover-active">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-03/instructor-3.jpg')}}" alt="team images">
                                        </a>
                                    </div>
                                    <div class="edu-instructor-info">
                                        <h5 class="title"><a href="instructor-profile.html">Troy Hall</a></h5>
                                        <span class="desc">PHP Expert</span>
                                        <div class="team-share-info bg-transparent">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                            <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Instructor Grid  -->

                    <!-- Start Instructor Grid  -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-instructor-grid edu-instructor-3 edu-instructor-3-visible">
                            <div class="edu-instructor">
                                <div class="inner">
                                    <div class="thumbnail">
                                        <a href="instructor-profile.html">
                                            <img src="{{ asset('website/assets/images/instructor/instructor-03/instructor-4.jpg')}}" alt="team images">
                                        </a>
                                    </div>
                                    <div class="edu-instructor-info">
                                        <h5 class="title"><a href="instructor-profile.html">Isabelle Bruner</a></h5>
                                        <span class="desc">UI Designer</span>
                                        <div class="team-share-info bg-transparent">
                                            <a class="linkedin" href="#"><i class="icon-linkedin"></i></a>
                                            <a class="facebook" href="#"><i class="icon-Fb"></i></a>
                                            <a class="twitter" href="#"><i class="icon-Twitter"></i></a>
                                            <a class="youtube" href="#"><i class="icon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Instructor Grid  -->
                </div>

                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1"><img src="{{ asset('website/assets/images/shapes/shape-03-03.png')}}" alt="Shape Thumb" /></div>
                    <div class="shape-image shape-image-2"><img src="{{ asset('website/assets/images/shapes/shape-02-02.png')}}" alt="Shape Thumb" /></div>
                </div>
            </div>
        </div> --}}
        {{-- end team --}}
    </section>
    @endsection
