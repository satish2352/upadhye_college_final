@extends('website.layout.master')
 @section('content')       
<section>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
    {{-- start breadcrumb --}}
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Campus & Student Life
                        </h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Campus & Student Life
                            </li>
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
{{--end breadcrumb --}}



{{-- start campus gallary --}}
<div class="edu-gallery-grid-area masonary-wrapper-activation edu-section-gap bg-image bg-image--25 overflow-hidden ">
    <div class="wrapper">
        <div class="container" >
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="section-title text-start">
                        <span class="pre-title">Gallery</span>
                        <h3 class="title">Students Life</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end filter-buttons">

  <button data-filter=".cat--1" data-category="campus" onclick="getData('all', 'all')"><span class="filter-text">All</span></button>
<button data-filter=".cat--2" data-category="popularity" onclick="getData('popularity', 'popularity')"><span class="filter-text">Popularity</span></button>
<button data-filter=".cat--3" data-category="trending" onclick="getData('trending', 'trending')"><span class="filter-text">Trending</span></button>
<button data-filter=".cat--4" data-category="featured" onclick="getData('featured', 'featured')"><span class="filter-text">Featured</span></button>
</div>
                </div>
            </div>
                <div id="routes" data-all="{{ route('all') }}" data-popularity="{{ route('popularity') }}" data-trending="{{ route('trending') }}" data-featured="{{ route('featured') }}"></div>

               <div class="row g-5 mt--5 " id="campus_data">
                
        </div>
    </div>
</div>
{{-- end campus gallary --}}

{{-- start  --}}

<div class="eduvibe-home-four-courses edu-course-area edu-section-gap bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <span class="pre-title">Our Programs</span>
                    <h3 class="title">UPADHYE Residential Program</h3>
                    <p class=" line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Computer Lab, Mess, Separate Girls Hostel, Playground, Entertainment facility, WIFI campus, and many more.
                      <br>  THINGS (GOODS) TO BRING TO THE HOSTEL:
                            BED SHEET, PILLOW & PILLOW COVER, BLANKET, SOAP CASE,
                            HAIR OIL, BRUSH & TOOTHPASTE, BLACK LEATHER SHOES,SPORTS SHOES, SOCKS

                    </p>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <!-- Start Single Card  -->
            <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                    <div class="">
                        {{-- <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                            </a>
                            <div class="wishlist-top-right">
                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                            </div>
                            <div class="top-position status-group left-top">
                                <span class="eduvibe-status status-04">Featured</span>
                            </div>
                        </div> --}}
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    {{-- <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                            <span class="author-title">James Carlson</span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <ul class="edu-meta meta-03">
                                <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                                </li>
                                <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                                <li class="meta-user"><i class="icon-group-line"></i>250</li>
                            </ul> --}}
                            <h6 class="">1. Safe and secure Hostel for Girls and Boys.
                            </h6>
                            {{-- <div class="card-bottom">
                                <div class="badge-transparent">Free</div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(4.8)</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->
             <!-- Start Single Card  -->
             <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                    <div class="">
                        {{-- <div class="thumbnail">
                            <a href="course-details.html">
                                <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                            </a>
                            <div class="wishlist-top-right">
                                <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                            </div>
                            <div class="top-position status-group left-top">
                                <span class="eduvibe-status status-04">Featured</span>
                            </div>
                        </div> --}}
                        <div class="content">
                            <div class="card-top">
                                <div class="author-meta">
                                    {{-- <div class="author-thumb">
                                        <a href="instructor-profile.html">
                                            <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                            <span class="author-title">James Carlson</span>
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <ul class="edu-meta meta-03">
                                <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                                </li>
                                <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                                <li class="meta-user"><i class="icon-group-line"></i>250</li>
                            </ul> --}}
                            <h6 class="">2. Mess facility (Vegetarian)
                            </h6>
                            {{-- <div class="card-bottom">
                                <div class="badge-transparent">Free</div>
                                <div class="edu-rating rating-default">
                                    <div class="rating">
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                        <i class="icon-Star"></i>
                                    </div>
                                    <span class="rating-count">(4.8)</span>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Card  -->

           <!-- Start Single Card  -->
           <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                <div class="">
                    {{-- <div class="thumbnail">
                        <a href="course-details.html">
                            <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                        </a>
                        <div class="wishlist-top-right">
                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                        </div>
                        <div class="top-position status-group left-top">
                            <span class="eduvibe-status status-04">Featured</span>
                        </div>
                    </div> --}}
                    <div class="content">
                        <div class="card-top">
                            <div class="author-meta">
                                {{-- <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                        <span class="author-title">James Carlson</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <ul class="edu-meta meta-03">
                            <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                            </li>
                            <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                            <li class="meta-user"><i class="icon-group-line"></i>250</li>
                        </ul> --}}
                        <h6 class="">3. College Uniform & Sports Uniform.
                        </h6>
                        {{-- <div class="card-bottom">
                            <div class="badge-transparent">Free</div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(4.8)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Card  -->
         <!-- Start Single Card  -->
         <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                <div class="">
                    {{-- <div class="thumbnail">
                        <a href="course-details.html">
                            <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                        </a>
                        <div class="wishlist-top-right">
                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                        </div>
                        <div class="top-position status-group left-top">
                            <span class="eduvibe-status status-04">Featured</span>
                        </div>
                    </div> --}}
                    <div class="content">
                        <div class="card-top">
                            <div class="author-meta">
                                {{-- <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                        <span class="author-title">James Carlson</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <ul class="edu-meta meta-03">
                            <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                            </li>
                            <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                            <li class="meta-user"><i class="icon-group-line"></i>250</li>
                        </ul> --}}
                        <h6 class="">4.24/7 CCTV Surveillance all over the campus. 
                            
                        </h6>
                        {{-- <div class="card-bottom">
                            <div class="badge-transparent">Free</div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(4.8)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Card  -->
         <!-- Start Single Card  -->
         <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                <div class="">
                    {{-- <div class="thumbnail">
                        <a href="course-details.html">
                            <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                        </a>
                        <div class="wishlist-top-right">
                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                        </div>
                        <div class="top-position status-group left-top">
                            <span class="eduvibe-status status-04">Featured</span>
                        </div>
                    </div> --}}
                    <div class="content">
                        <div class="card-top">
                            <div class="author-meta">
                                {{-- <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                        <span class="author-title">James Carlson</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <ul class="edu-meta meta-03">
                            <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                            </li>
                            <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                            <li class="meta-user"><i class="icon-group-line"></i>250</li>
                        </ul> --}}
                        <h6 class="">5. Medical Facility (Daily Doctor Available)

                        </h6>
                        {{-- <div class="card-bottom">
                            <div class="badge-transparent">Free</div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(4.8)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Card  -->
         <!-- Start Single Card  -->
         <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                <div class="">
                    {{-- <div class="thumbnail">
                        <a href="course-details.html">
                            <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                        </a>
                        <div class="wishlist-top-right">
                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                        </div>
                        <div class="top-position status-group left-top">
                            <span class="eduvibe-status status-04">Featured</span>
                        </div>
                    </div> --}}
                    <div class="content">
                        <div class="card-top">
                            <div class="author-meta">
                                {{-- <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                        <span class="author-title">James Carlson</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <ul class="edu-meta meta-03">
                            <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                            </li>
                            <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                            <li class="meta-user"><i class="icon-group-line"></i>250</li>
                        </ul> --}}
                        <h6 class="">6.Study Materials, State Board Books, NCERT Books, Practical Handbooks,
                            Practical Journals, Online and Offline Test Series, etc.
                        </h6>
                        {{-- <div class="card-bottom">
                            <div class="badge-transparent">Free</div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(4.8)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Card  -->
         <!-- Start Single Card  -->
         <div class="col-12 col-sm-6 col-lg-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
            <div class="edu-card card-type-4 radius-small eduvibe-course-style-four bg-white">
                <div class="">
                    {{-- <div class="thumbnail">
                        <a href="course-details.html">
                            <img class="w-100" src="assets/images/course/course-01/course-01.jpg" alt="Course Meta">
                        </a>
                        <div class="wishlist-top-right">
                            <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                        </div>
                        <div class="top-position status-group left-top">
                            <span class="eduvibe-status status-04">Featured</span>
                        </div>
                    </div> --}}
                    <div class="content">
                        <div class="card-top">
                            <div class="author-meta">
                                {{-- <div class="author-thumb">
                                    <a href="instructor-profile.html">
                                        <img src="assets/images/instructor/instructor-small/instructor-1.jpg" alt="Author Images">
                                        <span class="author-title">James Carlson</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <ul class="edu-meta meta-03">
                            <li class="meta-lessons"><i class="icon-file-list-4-line"></i>45 Lessons
                            </li>
                            <li class="meta-clock"><i class="icon-time-line"></i>8hr 39min</li>
                            <li class="meta-user"><i class="icon-group-line"></i>250</li>
                        </ul> --}}
                        <h6 class="">7. Weekly test on NEET/ IIT-JEE
                        </h6>
                        {{-- <div class="card-bottom">
                            <div class="badge-transparent">Free</div>
                            <div class="edu-rating rating-default">
                                <div class="rating">
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                    <i class="icon-Star"></i>
                                </div>
                                <span class="rating-count">(4.8)</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Card  -->
        </div>

        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="load-more-btn mt--60 text-center">
                    <a class="edu-btn" href="course-style-3.html">View All Courses<i class="icon-arrow-right-line-right"></i></a>
                </div>
            </div>
        </div> --}}

        <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
            <div class="shape-image shape-image-1">
                <img src="{{ asset('website/assets/images/shapes/shape-28.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-2">
                <img src="{{ asset('website/assets/images/shapes/shape-15-03.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-3">
                <img src="{{ asset('website/assets/images/shapes/shape-03-09.png')}}" alt="Shape Thumb" />
            </div>
            <div class="shape-image shape-image-4">
                <img src="{{ asset('website/assets/images/shapes/shape-04-06.png')}}" alt="Shape Thumb" />
            </div>
        </div>
    </div>
</div>

{{-- end --}}
        <!-- Start About Area  -->
        <div class="eduvibe-home-five-about edu-about-area about-style-6 edu-section-gap bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-image-gallery">
                            <img class="image-1 w-100" src="{{ asset('website/assets/images/about/about-08/ragging.png')}}" alt="About Images">
                            {{-- <div class="badge-icon">
                                <div class="badge-inner">
                                    <img src="{{ asset('website/assets/images/about/about-08/badge.png')}}" alt="Icon Images">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1">
                        <div class="inner mt_md--40 mt_sm--20">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">About Decipline</span>
                                <h5 class="">ACTS AMOUNT TO RAGGING COULD BE
                                </h5>
                            </div>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">1) Teasing, Embracing the Humilation.
                                <br>2) Assaulting or using Criminal Intimidation.
                                <br>3) Wrong fully restarting on containing Hurt.
                                <br>4) Causing Grievous hurt kidnapping or rape or community unnatural offence.
                                <br>5) Causing Death or Obligatory Suicide.
                                </p>
                            {{-- <div class="feature-list-wrapper" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Flexible training programs</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Learn from approved experts</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Friendly environment for you</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Boost your knowledge</div>
                            </div> --}}
                            {{-- <div class="read-more-btn mt--75 mt_lg--30 mt_md--40 mt_sm--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="about-us-1.html">Know About Us<i class="icon-arrow-right-line-right"></i></a>
                                <a class="info-btn" href="tel:+288(394)2783"><i class="icon-call"></i>+288 (394) 2783</a>
                            </div> --}}
                        </div>
                        <div class="inner mt_md--40 mt_sm--20">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                {{-- <span class="pre-title">About</span> --}}
                                <h5 class="">POSSIBLE ACTION AGAINST RAGING
                                </h5>
                            </div>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">1) Ragging is a criminal offence as per law by a number of state governments.
                                <br>2) Rustication from the college.
                                <br>3) Embossment on mark Sheet, Degree certificate etc. Us stating that he/she indulges in ragging.
                                <br>4) Penalty and imprisonment of the year.
                                <br>5) Fine
                                </p>
                            {{-- <div class="feature-list-wrapper" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Flexible training programs</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Learn from approved experts</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Friendly environment for you</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Boost your knowledge</div>
                            </div> --}}
                            {{-- <div class="read-more-btn mt--75 mt_lg--30 mt_md--40 mt_sm--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <a class="edu-btn" href="about-us-1.html">Know About Us<i class="icon-arrow-right-line-right"></i></a>
                                <a class="info-btn" href="tel:+288(394)2783"><i class="icon-call"></i>+288 (394) 2783</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-05-04.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-33.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-13-05.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-4">
                        <img src="{{ asset('website/assets/images/shapes/shape-01-03.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-5">
                        <img src="{{ asset('website/assets/images/shapes/shape-06.png')}}" alt="Shape Thumb" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

function getData(our_services_master_id, routeName) {
    $("#campus_data").empty();
    var routes = $("#routes");
    var allRoute = routes.data("all");
    var popularityRoute = routes.data("popularity");
    var trendingRoute = routes.data("trending");
    var featuredRoute = routes.data("featured");

    var url;
    switch (routeName) {
        case 'all':
            url = allRoute;
            break;
        case 'popularity':
            url = popularityRoute;
            break;
        case 'trending':
            url = trendingRoute;
            break;
        case 'featured':
            url = featuredRoute;
            break;
        default:
            console.error('Invalid routeName');
            return;
    }
    $.ajax({
        url: url,
        method: "POST",
        data: {
            "our_services_master_id": our_services_master_id
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            console.log(data);

            if (Array.isArray(data) && data.length > 0) {
                var path = '<?php echo Config::get('DocumentConstant.CAMPUS_GALLERY_VIEW'); ?>';

                $("#campus_data").empty();
                data.forEach(function (item) {
                    var html = `
                        <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="card article_card_container h-100">
                                <img src="` + path + item.image + `" class="card-img-top" alt="${item.title}">
                                
                            </div>
                        </div>
                    `;

                    $("#campus_data").append(html);
                });
            }
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}
getData('all','all')
</script>

@endsection