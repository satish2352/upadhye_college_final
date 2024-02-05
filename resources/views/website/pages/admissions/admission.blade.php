@extends('website.layout.master')
 @section('content')       
<section>
<div class="edu-breadcrumb-area breadcrumb-style-1 ptb--60 ptb_md--40 ptb_sm--40 bg-image">
    <div class="container eduvibe-animated-shape">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner text-start">
                    <div class="page-title">
                        <h3 class="title">Admission</h3>
                    </div>
                    <nav class="edu-breadcrumb-nav">
                        <ol class="edu-breadcrumb d-flex justify-content-start liststyle">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="separator"><i class="ri-arrow-drop-right-line"></i></li>
                            <li class="breadcrumb-item active" aria-current="page">Admission</li>
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
@if(session('msg'))
    <div class="alert alert-{{ session('success') }}">
        {{ session('msg') }}
    </div>
@endif

<div class="edu-course-area edu-section-gap bg-color-white">
    <div class="container">
        <div class="row g-5">
            <div class="row">
                <div class="col-6">
                     {{-- Addmission form  --}}
            <div class="read-more-btn " data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <a class="edu-btn" href="https://docs.google.com/forms/d/e/1FAIpQLSeRJRimDiRTUA6wR_gUhHpy8hSyTtAdMubY35O8LuME6sM3qQ/viewform?usp=pp_url">Addmission Form <i class="icon-arrow-right-line-right"></i></a>
            </div>
            {{-- addmission form --}}
                </div>
                <div class="col-6">
                     {{-- Scholarship form  --}}
            <div class="read-more-btn " data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                <a class="edu-btn" href="{{url('/scholarshipform')}}">Scholarship Form <i class="icon-arrow-right-line-right"></i></a>
            </div>
            {{-- Scholarship form --}}
                </div>
            </div>
           
            {{-- <div class="col-lg-4 order-2 oder-lg-1">
                <aside class="edu-course-sidebar">
                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby">
                        <div class="inner">
                            <h5 class="widget-title">Sort By</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check1" name="courseDateSort">
                                    <label for="short-check1">Newest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check2" name="courseDateSort">
                                    <label for="short-check2">Oldest</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check3" name="courseDateSort">
                                    <label for="short-check3">Popular Courses</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="short-check4" name="courseDateSort">
                                    <label for="short-check4">Featured On This Month</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-category mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Categories</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check1">
                                    <label for="cat-check1">Art & Design <span>(24)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check2">
                                    <label for="cat-check2">Web Development <span>(12)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check3">
                                    <label for="cat-check3">Business Management <span>(8)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check4">
                                    <label for="cat-check4">Digital Marketing <span>(3)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check5">
                                    <label for="cat-check5">Music & Fashion <span>(13)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check6">
                                    <label for="cat-check6">Financial Management <span>(25)</span></label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="cat-check7">
                                    <label for="cat-check7">Sports <span>(19)</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Level</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check1">
                                    <label for="level-check1">All Skill</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check2">
                                    <label for="level-check2">Beginner</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check3">
                                    <label for="level-check3">Intermediate</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="level-check4">
                                    <label for="level-check4">High</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Price</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check1" name="coursePriceSort">
                                    <label for="price-check1">All Prices</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check2" name="coursePriceSort">
                                    <label for="price-check2">Price: Low to High</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check3" name="coursePriceSort">
                                    <label for="price-check3">Price: High to Low</label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="radio" id="price-check4" name="coursePriceSort">
                                    <label for="price-check4">Free Paid</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Short By Rating</h5>
                            <div class="content">
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check1">
                                    <label for="rating-check1">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check2">
                                    <label for="rating-check2">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check3">
                                    <label for="rating-check3">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>
                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check4">
                                    <label for="rating-check4">
                                        <span class="on icon-Star"></span>
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                                <div class="edu-form-check">
                                    <input type="checkbox" id="rating-check5">
                                    <label for="rating-check5">
                                        <span class="on icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                        <span class="off icon-Star"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                    <!-- Start Widget Wrapper  -->
                    <div class="edu-course-widget widget-shortby mt--40">
                        <div class="inner">
                            <h5 class="widget-title">Filter By Price</h5>
                            <div class="content">
                                <div class="price_filter s-filter clear">
                                    <form action="#" method="GET">
                                        <div id="slider-range"></div>
                                        <div class="slider__range--output">
                                            <div class="price__output--wrap">
                                                <div class="price--output">
                                                    <span>Price :</span><input type="text" id="amount" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget Wrapper  -->

                </aside>
            </div>
            <div class="col-lg-8 order-1 oder-lg-2">
                <div class="row g-5">
                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-01.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>29 Lessons</li>
                                        <li><i class="icon-time-line"></i>19h 15m 26s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Competitive Strategy law for all students</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(56 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$45.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>85 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-02.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Beginner</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>35 Lessons</li>
                                        <li><i class="icon-time-line"></i>14h 58m 43s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Machine Learning A-Z: Hands-On Python and java</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(87 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$35.00</div>
                                            <div class="price old-price">$45.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>59 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-03.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>82 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Achieving Advanced in Insights with Big</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(87 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$29.00</div>
                                            <div class="price old-price">$39.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>75 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-04.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>18 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education Makes A Person A Responsible Citizen</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(14 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$35.00</div>
                                            <div class="price old-price">$39.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>57 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="350" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-05.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>15 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Building A Better World One Student At A Time</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(49 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-06.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>36 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education is About Forming Faithful Disciples</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(25 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="price-list price-style-03">
                                            <div class="price current-price">$89.00</div>
                                            <div class="price old-price">$99.00</div>
                                        </div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>47 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="450" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-07.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Advanced</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>24 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Competitive Strategy law for all students</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(73 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="col-12 col-sm-12 col-xl-6 col-md-6" data-sal-delay="500" data-sal="slide-up" data-sal-duration="800">
                        <div class="edu-card card-type-1 radius-small">
                            <div class="inner">
                                <div class="thumbnail">
                                    <a href="course-details.html">
                                        <img class="w-100" src="{{ asset('website/assets/images/course/course-01/course-08.jpg')}}" alt="Course Meta">
                                    </a>
                                    <div class="top-position status-group left-top">
                                        <span class="eduvibe-status status-01">Intermediate</span>
                                    </div>
                                    <div class="wishlist-top-right">
                                        <button class="wishlist-btn"><i class="icon-Heart"></i></button>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="edu-meta meta-01">
                                        <li><i class="icon-file-list-4-line"></i>74 Lessons</li>
                                        <li><i class="icon-time-line"></i>13h 20m 20s</li>
                                    </ul>
                                    <h6 class="title"><a href="course-details.html">Education is About Preparing Students for College</a>
                                    </h6>
                                    <div class="edu-rating rating-default">
                                        <div class="rating">
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                            <i class="icon-Star"></i>
                                        </div>
                                        <span class="rating-count">(92 Review)</span>
                                    </div>
                                    <div class="card-bottom">
                                        <div class="badge-transparent">Free</div>
                                        <ul class="edu-meta meta-01">
                                            <li><i class="icon-account-circle-line"></i>86 Students</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>

                <div class="row">
                    <div class="col-lg-12 mt--60">
                        <nav>
                            <ul class="edu-pagination">
                                <li><a href="#"><i class="ri-arrow-drop-left-line"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">8</a></li>
                                <li><a href="#"><i class="ri-arrow-drop-right-line"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> --}}
              <!-- Start About Area  -->
        <div class="eduvibe-home-five-about admission edu-about-area about-style-6  bg-color-white">
            <div class="container eduvibe-animated-shape">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-image-gallery"> 
                            <img class="image-1 w-100" src="{{ asset('website/assets/images/about/about-08/admission.png')}}" alt="About Images">
                            <div class="badge-icon">
                                <div class="badge-inner">
                                    <img src="{{ asset('website/assets/images/about/about-08/badge.png')}}" alt="Icon Images">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 offset-xl-1">
                        <div class="inner mt_md--40 mt_sm--20">
                            <div class="section-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <span class="pre-title">About Us</span>
                                <h3 class="title">General Guidelines For Admission </h3>
                            </div>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Admission to all class and courses are strictly provisional and will be confirmed only after receiving the necessary approval of the respective authority. </p>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Admission to the college is on the basis of merit. </p>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Only those applications that fulfil all the eligibility conditions laid down by the authority will be considered for admission</p>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"> In case the students need help with the selection of subject details to be filled in the form, they are advised to seek the help of the admission committee.</p>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"> The right to grant admission to any course is reserved with the college authorities. </p>
                            <p class="description line-before mt--40 mb--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"> It is necessary to take counter-sign education directors on LC from other divisional boards and districts.</p>
                            {{-- <div class="feature-list-wrapper" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Flexible training programs</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Learn from approved experts</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Friendly environment for you</div>
                                <div class="feature-list"><i class="icon-checkbox-circle-fill"></i>Boost your knowledge</div>
                            </div>
                            <div class="read-more-btn mt--75 mt_lg--30 mt_md--40 mt_sm--40" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
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

        {{-- start guidelines--}}
        <div class="eduvibe-home-five-progress edu-service-area edu-section-gap bg-image">
            <!-- Start Service Area  -->
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Documents</span>
                            <h3 class="title">Documents Required For Admission</h3>
                        </div>
                    </div>
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/passport_size_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-book-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Passport-size Photos</a></h6>
                                    <p class="description">5 passport-size recent Photographs. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                    
                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/certificate_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-shopping-basket-2-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Marksheet</a></h6>
                                    <p class="description">Students from other colleges seeking admission must submit the original copies of the mark sheet along with 4 attested Xerox copies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/documents_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-trophy-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Leaving certificate</a></h6>
                                    <p class="description">Students from other colleges seeking admission must submit the original copies of the leaving certificate along with 4 attested Xerox copies.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                </div>
                <div class="row g-5 mt--20">
                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-1">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/certificate_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-book-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Migration certificate</a></h6>
                                    <p class="description">Students from other boards (ex. CBSE / ICSE) will have to submit migration certificate and mark sheet in original, authenticated by the respective regional authority of the board of education along with 4 xerox copies of the same. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                    
                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-2">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/cast_certificate_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-shopping-basket-2-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Caste Certificate</a></h6>
                                    <p class="description"> Caste Certificate (If applicable)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->

                    <!-- Start Service Grid  -->
                    <div class="service-card-single col-lg-4 col-md-6 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <div class="service-card service-card-7 shape-bg-3">
                            <div class="inner">
                                <div class="icon">
                                    <a href="#">
                                    <img src="{{ asset('website/assets/images/icons/adhar_card_w.png')}}" width="50px" alt="Icons Images">
                                        {{-- <i class="icon-trophy-line"></i> --}}
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#"> Adhar Card</a></h6>
                                    <p class="description">Student Adhar Card Xerox.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Grid  -->
                </div>


                <div class="shape-dot-wrapper shape-wrapper d-xl-block d-none">
                    <div class="shape-image shape-image-1">
                        <img src="{{ asset('website/assets/images/shapes/shape-07-02.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-2">
                        <img src="{{ asset('website/assets/images/shapes/shape-04-07.png')}}" alt="Shape Thumb" />
                    </div>
                    <div class="shape-image shape-image-3">
                        <img src="{{ asset('website/assets/images/shapes/shape-13-11.png')}}" alt="Shape Thumb" />
                    </div>
                </div>

            </div>
            <!-- End Service Area  -->
        </div>
        {{-- end guidelines --}}

        {{-- start Residencial batches --}}
        <div class="eduvibe-about-us-one-service edu-service-area edu-section-gapBottom bg-color-white service-bg-position">
            <div class="container eduvibe-animated-shape">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                            <span class="pre-title">Time Management</span>
                            <h3 class="title">Residential Batch for <br /> Medical & Engineering</h3>
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
                                        <img src="{{ asset('website/assets/images/icons/1)readingcenter.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Reading Center</a></h6>
                                    <p class="description">8:00am Report at free reading center(Student will be in campus Hostel)</p>
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
                                        <img src="{{ asset('website/assets/images/icons/2)lecture.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Lectures</a></h6>
                                    <p class="description">8:30am to 12:15pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/3)recesses.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Recess and Food</a></h6>
                                    <p class="description">12:15pm to 1:00pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/4)jeeneet.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">MH-CET/JEE(Engineering/Medical Coaching or Tests/Practicals)</a></h6>
                                    <p class="description">1:00pm to 4:30pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/5)playingexercisetime.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Exercise/Meditation/Physical workout/Games</a></h6>
                                    <p class="description">4:30pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/6)freshenup.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Student freshen up small grub and relax</a></h6>
                                    <p class="description">5:30pm to 6:30pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/7)freereading.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Free reading or similar activities</a></h6>
                                    <p class="description">6:30pm to 7:00pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/8)dinner.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Dinner</a></h6>
                                    <p class="description">7:00pm to 8:00pm</p>
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
                                        <img src="{{ asset('website/assets/images/icons/9)studyhall.png')}}" alt="Service Images">
                                    </a>
                                    <div class="shape-list">
                                        <img class="shape shape-1" src="{{ asset('website/assets/images/icons/service-icon-01.png')}}" alt="Shape Images">
                                        <img class="shape shape-2" src="{{ asset('website/assets/images/icons/service-icon-02.png')}}" alt="Shape Images">
                                        <img class="shape shape-3" src="{{ asset('website/assets/images/icons/service-icon-03.png')}}" alt="Shape Images">
                                    </div>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Studies and assignments in study hall only</a></h6>
                                    <p class="description">8:00pm to 10:30pm</p>
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
        </div>
        {{--end  Residencial batches--}}
      {{-- start admission form --}}
        
      {{-- end admission form --}}
    
    </div>
</div>
</section>
@endsection