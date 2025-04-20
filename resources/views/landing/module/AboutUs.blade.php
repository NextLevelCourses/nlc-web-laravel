@extends('landing.layouts.Master')

@section('title', 'About Us')

@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">
                            <div class="rbt-new-badge rbt-new-badge-one"></div>
                            <h1 class="title">Read About Our
                                <span class="header-caption">
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Mission.</b>
                                            <b class="is-hidden theme-gradient">Vission.</b>
                                            <b class="is-hidden theme-gradient">Planning.</b>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                            <p class="description has-medium-font-size mt--20">
                                Mulai perjalanan belajarmu bersama Next Level Course! Pelajari berbagai materi dari dasar
                                hingga level expert—semua disajikan dengan cara yang aplikatif, menarik, dan mudah diikuti.
                            </p>
                            <div class="slider-btn rbt-button-group justify-content-center">
                                <a class="rbt-btn btn-gradient hover-icon-reverse"
                                    href="{{ route('landing.Authentication') }}">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Log in to Start</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <a class="rbt-btn hover-icon-reverse btn-white"
                                    href="https://www.instagram.com/nextlevelcourse_official">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Contact US</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start Video Area  -->
    <!-- <div class="rbt-video-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-popup-wrapper">
                            <img class="w-100 rbt-radius" src="assets/images/bg/bg-image-12.jpg" alt="Video Images">
                            <a class="rbt-btn rounded-player-2 popup-video position-to-top with-animation btn-theme-color"
                                href="https://www.youtube.com/watch?v=nA1Aqp0sPQo">
                                <span class="play-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Video Area  -->


    <div class="rbt-about-area about-style-1 bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <img src="assets/images/about/about-06.png" alt="About Images">
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-up" data-sal-duration="700">
                    <div class="inner pl--50 pl_sm--5">
                        <div class="content text-start">

                            <h3 class="title">Welcome to Next Level Course.</h3>

                            <p class="description mt--30">
                                <strong>Next Level Course</strong> adalah platform pembelajaran modern yang menghubungkan
                                guru-guru terbaik dengan masyarakat.
                                Di sini, setiap program dirancang langsung oleh para ahli dengan pendekatan yang menarik,
                                aplikatif, dan bertujuan untuk mencerdaskan kehidupan bangsa.
                            </p>

                            <p class="description">
                                Dengan beragam program kreatif dan relevan, kami hadir untuk membantu siapa saja belajar hal
                                baru dengan cara yang mudah dan menyenangkan.
                            </p>

                            <div class="read-more-btn mt--40">
                                <a class="rbt-btn rbt-marquee-btn radius-round btn-gradient"
                                    href="{{ route('landing.Authentication') }}">
                                    <span data-text="Start Learning For Free">
                                        Start Learning For Free
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Start Service Area -->
    <div class="rbt-service-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="title">Why learn with our courses?</h2>
                        <p class="description mt--30"><strong>Histudy educational platform</strong> ipsum dolor sit amet
                            consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row row--15 mt_dec--30">

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/001-bulb.png" alt="icons Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Your Apply</a></h6>
                                <p class="description">English Learning looking for random paragraphs, you've come to the
                                    right place.</p>
                            </div>
                            <span class="number-text">1</span>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/002-hat.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">We Connect</a></h6>
                                <p class="description">Javascript Learning looking for random paragraphs, you've come to
                                    the right place.</p>
                            </div>
                            <span class="number-text">2</span>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/003-id-card.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">You Get Ready</a></h6>
                                <p class="description">Angular Learning looking for random paragraphs, you've come to the
                                    right place.</p>
                            </div>
                            <span class="number-text">3</span>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

                <!-- Start Service Grid  -->
                <div class="col-lg-4 col-xl-3 col-xxl-3 col-md-6 col-sm-6 col-12 mt--30">
                    <div class="service-card service-card-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/004-pass.png" alt="Shape Images">
                            </div>
                            <div class="content">
                                <h6 class="title"><a href="#">Completed</a></h6>
                                <p class="description">Php Learning looking for random paragraphs, you've come to the right
                                    place.</p>
                            </div>
                            <span class="number-text">4</span>
                        </div>
                    </div>
                </div>
                <!-- End Service Grid  -->

            </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Service Area -->
@endsection
