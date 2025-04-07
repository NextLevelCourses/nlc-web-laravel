@extends('landing.layouts.Master')

@section('title', 'Home')

@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-2 header-transperent-spacer pt--120">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <div class="inner">
                                <div class="rbt-new-badge rbt-new-badge-one mb--30">
                                    <span class="rbt-new-badge-icon">🏆</span> The Marketplace for Teaching Excellence
                                </div>
                                <h1 class="title">We teaching, educate and <span class="theme-gradient">build the
                                        future</span> of online learning</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper service-item-3-activation  rbt-arrow-between gutter-swiper-30">

                    <div class="swiper-wrapper">
                        <!-- Start Single Card  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-1">
                                    <div class="inner">
                                        <div class="content">
                                            <h4 class="title"><a href="#">React</a></h4>
                                            <p>React Js dolor sit, amet consectetur.</p>
                                            <a class="transparent-button" href="{{ route('Landing.DetailCourse') }}">Learn
                                                More<i><svg width="17" height="12"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                        </g>
                                                    </svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-06.png') }}"
                                                alt="Education Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                        <!-- Start Single Card  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-2">
                                    <div class="inner">
                                        <div class="content">
                                            <h4 class="title"><a href="#">English</a></h4>
                                            <p>Spken english dolor sit, amet consectetur.</p>
                                            <a class="transparent-button" href="{{ route('Landing.DetailCourse') }}">Learn
                                                More<i><svg width="17" height="12"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                        </g>
                                                    </svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-05.png') }}"
                                                alt="Education Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                        <!-- Start Single Card  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-3">
                                    <div class="inner">
                                        <div class="content">
                                            <h4 class="title"><a href="#">Education</a></h4>
                                            <p>Eearning edu dolor sit, amet consectetur.</p>
                                            <a class="transparent-button" href="{{ route('Landing.DetailCourse') }}">Learn
                                                More<i><svg width="17" height="12"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                        </g>
                                                    </svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-03.png') }}"
                                                alt="Education Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->

                        <!-- Start Single Card  -->
                        <div class="swiper-slide">
                            <div class="single-slide">
                                <div class="rbt-service rbt-service-2 rbt-hover-02 bg-no-shadow card-bg-4">
                                    <div class="inner">
                                        <div class="content">
                                            <h4 class="title"><a href="#">Education</a></h4>
                                            <p>Lorem ipsum dolor sit, amet consectetur.</p>
                                            <a class="transparent-button" href="{{ route('Landing.DetailCourse') }}">Learn
                                                More<i><svg width="17" height="12"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                            <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                            <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                                        </g>
                                                    </svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-04.png') }}"
                                                alt="Education Images">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Card  -->
                    </div>

                    <div class="rbt-swiper-arrow rbt-arrow-left">
                        <div class="custom-overfolow">
                            <i class="rbt-icon feather-arrow-left"></i>
                            <i class="rbt-icon-top feather-arrow-left"></i>
                        </div>
                    </div>

                    <div class="rbt-swiper-arrow rbt-arrow-right">
                        <div class="custom-overfolow">
                            <i class="rbt-icon feather-arrow-right"></i>
                            <i class="rbt-icon-top feather-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <div class="rbt-course-area bg-color-white rbt-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Popular Course</span>
                        <h2 class="title">Online Coaching Lessons For <br> Remote Learning</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="rbt-portfolio-filter filter-tab-button text-center nav nav-tabs" id="rbt-myTab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                                type="button" role="tab" aria-controls="all" aria-selected="true"><span
                                    class="filter-text">All
                                    Course</span> <span class="course-number">06</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button"
                                role="tab" aria-controls="featured" aria-selected="false"><span
                                    class="filter-text">Featured</span> <span class="course-number">02</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="popular-tab" data-bs-toggle="tab" data-bs-target="#popular" type="button"
                                role="tab" aria-controls="popular" aria-selected="false"><span
                                    class="filter-text">Popular</span> <span class="course-number">05</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="trending-tab" data-bs-toggle="tab" data-bs-target="#trending" type="button"
                                role="tab" aria-controls="trending" aria-selected="false"><span
                                    class="filter-text">Trending</span> <span class="course-number">03</span></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="latest-tab" data-bs-toggle="tab" data-bs-target="#latest" type="button"
                                role="tab" aria-controls="latest" aria-selected="false"><span
                                    class="filter-text">Latest</span> <span class="course-number">04</span></button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Start Card Area -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content mt--60" id="rbt-myTabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row g-5">

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-01.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">React Front To
                                                    Back</a>
                                            </h4>

                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-02.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-03.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-04.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">Web Front To
                                                    Back</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Web Js long fact that a reader will be distracted
                                                by
                                                the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avater-01.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Patrick</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-05.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted
                                                by the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-06.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">JS Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                            </div>
                        </div>

                        <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-02.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-03.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-01.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">React Front To
                                                    Back</a>
                                            </h4>

                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-02.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-03.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-04.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">Web Front To
                                                    Back</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Web Js long fact that a reader will be distracted
                                                by
                                                the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avater-01.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Patrick</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-05.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted
                                                by the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-03.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-04.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">Web Front To
                                                    Back</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Web Js long fact that a reader will be distracted
                                                by
                                                the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avater-01.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Patrick</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-05.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted
                                                by the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>
                        </div>

                        <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                            <div class="row g-5">
                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-02.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">PHP Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>

                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted.</p>
                                            <div class="rbt-author-meta mb--10">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-03.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (5 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">Angular Zero to
                                                    Mastery</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>8 Lessons</li>
                                                <li><i class="feather-users"></i>30 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Angular Js long fact that a reader will be
                                                distracted by
                                                the readable.</p>

                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-03.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Slaughter</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$80</span>
                                                    <span class="off-price">$100</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-04.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>

                                            <h4 class="rbt-card-title"><a href="course-details.html">Web Front To
                                                    Back</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>20 Lessons</li>
                                                <li><i class="feather-users"></i>40 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">Web Js long fact that a reader will be distracted
                                                by
                                                the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avater-01.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Patrick</a> In <a
                                                        href="#">Languages</a>
                                                </div>
                                            </div>

                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link" href="course-details.html">Learn
                                                    More<i class="feather-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->

                                <!-- Start Single Card  -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="rbt-card variation-01 rbt-hover card-list-2">
                                        <div class="rbt-card-img">
                                            <a href="course-details.html">
                                                <img src="{{ asset('assets/images/course/course-list-05.jpg') }}"
                                                    alt="Card image">
                                            </a>
                                        </div>
                                        <div class="rbt-card-body">
                                            <div class="rbt-card-top">
                                                <div class="rbt-review">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <span class="rating-count"> (15 Reviews)</span>
                                                </div>
                                                <div class="rbt-bookmark-btn">
                                                    <a class="rbt-round-btn" title="Bookmark" href="#"><i
                                                            class="feather-bookmark"></i></a>
                                                </div>
                                            </div>
                                            <h4 class="rbt-card-title"><a href="course-details.html">SQL Beginner
                                                    Advanced</a>
                                            </h4>
                                            <ul class="rbt-meta">
                                                <li><i class="feather-book"></i>12 Lessons</li>
                                                <li><i class="feather-users"></i>50 Students</li>
                                            </ul>
                                            <p class="rbt-card-text">It is a long established fact that a reader will be
                                                distracted
                                                by the readable.</p>
                                            <div class="rbt-author-meta mb--20">
                                                <div class="rbt-avater">
                                                    <a href="#">
                                                        <img src="{{ asset('assets/images/client/avatar-02.png') }}"
                                                            alt="Sophia Jaymes">
                                                    </a>
                                                </div>
                                                <div class="rbt-author-info">
                                                    By <a href="profile.html">Angela</a> In <a
                                                        href="#">Development</a>
                                                </div>
                                            </div>
                                            <div class="rbt-card-bottom">
                                                <div class="rbt-price">
                                                    <span class="current-price">$60</span>
                                                    <span class="off-price">$120</span>
                                                </div>
                                                <a class="rbt-btn-link left-icon" href="course-details.html"><i
                                                        class="feather-shopping-cart"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Card  -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Course Category Area  -->
    <div class="rbt-course-category rbt-section-gap overflow-hidden">
        <div class="container">
            <div class="row mb--25">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h5 class="subtitle bg-secondary-opacity">Next Level Categories</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="rbt-categori-leftbar">
                        <div class="rbt-categori-list">
                            <a class="blank" href="#"></a>
                            <a href="/courses/web-development">Web Development</a>
                            <a href="/courses/frontend-react">Frontend with React</a>
                            <a href="/courses/ui-ux">UI/UX Design</a>
                            <a class="blank" href="#"></a>
                        </div>
                        <div class="rbt-categori-list">
                            <a class="blank" href="#"></a>
                            <a href="/courses/backend-laravel">Backend with Laravel</a>
                            <a href="/courses/go-programming">Go Programming</a>
                            <a href="/courses/esp32">ESP32 Projects</a>
                            <a href="/courses/iot-projects">IoT Projects</a>
                            <a class="blank" href="#"></a>
                        </div>
                        <div class="rbt-categori-list">
                            <a class="blank" href="#"></a>
                            <a href="/courses/private-class">Private Class</a>
                            <a href="/courses/mentoring-project">Mentoring Project</a>
                            <a href="/courses/popular">Popular Courses</a>
                            <a href="/courses/latest">Latest Updates</a>
                            <a class="blank" href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Course Category Area  -->

    <div class="rbt-team-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">Our Instructor</span>
                        <h2 class="title">Word Class Best Instructor</h2>
                        <p class="description has-medium-font-size mt--20">There are many variations of passages of the
                            Ipsum available, but the majority have suffered alteration in some form, by injected humour.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row row--15 mt_dec--30">
                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="team">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-05.jpg') }}"
                                alt="Blog Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Aaron Griffin</h4>
                            <p class="designation">Depertment Head</p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="team">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-09.jpg') }}"
                                alt="Blog Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Rafiq Bali</h4>
                            <p class="designation">Depertment Head</p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="team">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-03.jpg') }}"
                                alt="Blog Images">
                        </div>
                        <div class="content">
                            <h4 class="title">Fatima Usa</h4>
                            <p class="designation">Depertment Head</p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Team  -->

                <!-- Start Single Team  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="team">
                        <div class="thumbnail"><img src="{{ asset('assets/images/team/team-07.jpg') }}"
                                alt="Blog Images">
                        </div>
                        <div class="content">
                            <h4 class="title">John Due</h4>
                            <p class="designation">Depertment Head</p>
                        </div>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Single Team  -->

            </div>
        </div>
    </div>


    <div class="rbt-testimonial-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--60">
                    <div class="section-title text-center">
                        <span class="subtitle bg-coral-opacity">LEARNING EXPERIENCE</span>
                        <h2 class="title">What Our Students Say</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="rbt-accordion-style rbt-accordion-01  accordion">
                        <div class="accordion" id="accordionExamplea1">
                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        What is Next Level Course and how does it work?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        <p class="mb--15">Next Level Course is an innovative online marketplace that
                                            empowers educators to share their knowledge and reach learners across the globe.
                                        </p>
                                        <p>We connect passionate instructors with students eager to grow in web development,
                                            IoT, and emerging tech fields—enabling real-world learning experiences through
                                            personalized teaching.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        How can I contact support or get help?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        You can reach our support team by emailing
                                        <strong>support@nextlevelcourse.com</strong> or via the Help Center on your
                                        dashboard.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item card">
                                <h2 class="accordion-header card-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        Will I get updates and access to new materials?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExamplea1">
                                    <div class="accordion-body card-body">
                                        Absolutely! As a student, you will receive lifetime updates on all course materials
                                        and access to new features as we continuously grow our learning platform.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="swiper testimonial-activation-1 rbt-dot-bottom-left pb--60">
                        <div class="swiper-wrapper">
                            <!-- Start Single Testimonial -->
                            <div class="swiper-slide">
                                <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                    <div class="inner">
                                        <div class="clint-info-wrapper">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/testimonial/client-01.png') }}"
                                                    alt="Student Image">
                                            </div>
                                            <div class="client-info">
                                                <h5 class="title">Rizki Ananda</h5>
                                                <span class="designation">Fullstack Developer <i>@ Freelancer</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="subtitle-3">Next Level Course changed the way I learn programming.
                                                The mentorship and project-based approach really helped me land freelance
                                                gigs confidently!</p>
                                            <div class="rating mt--20">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->

                            <!-- Start Single Testimonial -->
                            <div class="swiper-slide">
                                <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                    <div class="inner">
                                        <div class="clint-info-wrapper">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/testimonial/client-02.png') }}"
                                                    alt="Student Image">
                                            </div>
                                            <div class="client-info">
                                                <h5 class="title">Lestari Putri</h5>
                                                <span class="designation">Junior IoT Engineer <i>@ TechHub</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="subtitle-3">Materi IoT yang diajarkan di sini sangat aplikatif. Saya
                                                bisa langsung praktek dengan ESP32 dan hasilkan project beneran untuk
                                                portfolio saya.</p>
                                            <div class="rating mt--20">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->

                            <!-- Start Single Testimonial -->
                            <div class="swiper-slide">
                                <div class="rbt-testimonial-box no-box-shadow bg-gradient-7 text-white">
                                    <div class="inner">
                                        <div class="clint-info-wrapper">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/testimonial/client-03.png') }}"
                                                    alt="Student Image">
                                            </div>
                                            <div class="client-info">
                                                <h5 class="title">Bayu Wicaksono</h5>
                                                <span class="designation">UI/UX Designer <i>@ Startup Lokal</i></span>
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p class="subtitle-3">Kelas desain UI/UX-nya membantu saya membangun style dan
                                                workflow yang rapi. Plus, ada feedback langsung dari mentor tiap minggu!</p>
                                            <div class="rating mt--20">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Testimonial -->
                        </div>
                        <div class="rbt-swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="rbt-event-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">OUR EVENTS</span>
                        <h2 class="title">University Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="event-details.html">
                                <img src="{{ asset('assets/images/event/grid-type-01.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-calendar"></i>11 Jan, 2024</li>
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="event-details.html">International Education Fair
                                    2024</a></h4>
                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                    href="event-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="event-details.html">
                                <img src="{{ asset('assets/images/event/grid-type-02.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Vancouver</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="event-details.html">Painting Art Contest 2020</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                    href="event-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="event-details.html">
                                <img src="{{ asset('assets/images/event/grid-type-03.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>Paris</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="event-details.html">Histudy Education Fair 2024</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                    href="event-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->

                <!-- Start Single Event  -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="rbt-card card-list-2 event-list-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="event-details.html">
                                <img src="{{ asset('assets/images/event/grid-type-04.jpg') }}" alt="Card image">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <ul class="rbt-meta">
                                <li><i class="feather-map-pin"></i>IAC Building</li>
                                <li><i class="feather-clock"></i>8:00 am - 5:00 pm</li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="event-details.html"> Elegant Light Box Paper Cut
                                    Dioramas</a></h4>

                            <div class="read-more-btn">
                                <a class="rbt-btn btn-border hover-icon-reverse btn-sm radius-round"
                                    href="event-details.html">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Get Ticket</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Event  -->
            </div>
        </div>
    </div>

    <!-- Start Blog Style -->
    <div class="rbt-rbt-blog-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center mb--30">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="section-title">
                        <span class="subtitle bg-pink-opacity">Blog Post</span>
                        <h2 class="title">Post Popular Post.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="read-more-btn text-start text-md-end">
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="blog.html">
                            <div class="icon-reverse-wrapper">
                                <span class="btn-text">See All Articles</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15">
                <!-- Start Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">
                    <div class="rbt-card variation-02 height-330 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('Landing.DetailBlog') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-01.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h3 class="rbt-card-title"><a href="{{ route('Landing.DetailBlog') }}">React</a></h3>
                            <p class="rbt-card-text">It is a long established fact that a reader.</p>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="b{{ route('Landing.DetailCourse') }}">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 mt--30" data-sal-delay="150" data-sal="slide-up"
                    data-sal-duration="800">

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover">
                        <div class="rbt-card-img">
                            <a href="{{ route('Landing.DetailBlog') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-02.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('Landing.DetailBlog') }}">Why Is Education So Famous?</a></h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('Landing.DetailBlog') }}">Read Article<i><svg
                                            width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{ route('Landing.DetailBlog') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-03.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('Landing.DetailBlog') }}">Difficult Things About Education.</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('Landing.DetailBlog') }}">Read Article<i><svg
                                            width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->

                    <!-- Start Single Card  -->
                    <div class="rbt-card card-list variation-02 rbt-hover mt--30">
                        <div class="rbt-card-img">
                            <a href="{{ route('Landing.DetailBlog') }}">
                                <img src="{{ asset('assets/images/blog/blog-card-04.jpg') }}" alt="Card image"> </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a href="{{ route('Landing.DetailBlog') }}">Education Is So Famous, But Why?</a>
                            </h5>
                            <div class="rbt-card-bottom">
                                <a class="transparent-button" href="{{ route('Landing.DetailBlog') }}">Read Article<i><svg
                                            width="17" height="12" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                                <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                                <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                            </g>
                                        </svg></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Card  -->
                </div>
            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Blog Style -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
@endsection
