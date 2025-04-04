<!-- Start Banner Area -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="rbt-banner-area rbt-banner-2 header-transperent-spacer">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content text-center">
                            <div class="inner">
                                <div class="rbt-new-badge rbt-new-badge-one mb--30">
                                    <span class="rbt-new-badge-icon">🏆</span> The Leader in Online Learning
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
                                            <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-06.png') }}" alt="Education Images">
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
                                            <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-05.png') }}" alt="Education Images">
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
                                            <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('assets/images/service/service-03.png') }}" alt="Education Images">
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
                                            <a class="transparent-button" href="#">Learn More<i><svg width="17" height="12" xmlns="http://www.w3.org/2000/svg"><g stroke="#27374D" fill="none" fill-rule="evenodd"><path d="M10.614 0l5.629 5.629-5.63 5.629"/><path stroke-linecap="square" d="M.663 5.572h14.594"/></g></svg></i></a>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="{{ asset('ssets/images/service/service-04.png') }}" alt="Education Images">
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
    @endsection