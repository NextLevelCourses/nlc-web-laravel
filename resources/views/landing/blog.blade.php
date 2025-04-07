@extends('landing.layouts.app')

@section('title', 'Landing Page')

@section('content')
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Blog</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Blog</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 50 Articles
                                </a>
                            </div>

                            <p class="description">Blog that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
        </div>
    </div>

    <div class="rbt-blog-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">

            <div class="row g-5">

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>20 March 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Learn From These You Learn
                                    Education.</a></h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>30 May 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">The Modern Rules Of Education.</a>
                            </h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>15 July 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Why Is Education So Famous?</a></h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>20 March 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Industry Insiders Say Education.</a>
                            </h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>30 May 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Make You Love And Hate Education.</a>
                            </h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>15 July 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Seven Easy Rules Of Education.</a>
                            </h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>20 March 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Learn From These You Learn
                                    Education.</a></h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>30 May 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Think You're An Expert In
                                    Education?</a></h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

                <!-- Start Single Card  -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <div class="rbt-card variation-02 rbt-hover card-minimal">
                        <div class="rbt-card-body">
                            <ul class="meta-list justify-content-start mb--30">
                                <li class="list-item">
                                    <i class="feather-clock"></i>
                                    <span>15 July 2024</span>
                                </li>
                            </ul>
                            <h4 class="rbt-card-title"><a href="blog-details.html">Seven Easy Rules Of Education.</a>
                            </h4>
                            <div class="rbt-card-bottom mt--40">
                                <a class="transparent-button" href="blog-details.html">Learn
                                    More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Card  -->

            </div>

            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <li><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

@endsection