@extends('dashboard.layouts.Master')

@section('title', 'Enroll Courses')

@section('content')
<div class="rbt-page-banner-wrapper">
    <!-- Start Banner BG Image  -->
    <div class="rbt-banner-image"></div>
    <!-- End Banner BG Image  -->
</div>

<!-- Start Card Style -->
<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Dashboard Top  -->
                <div class="rbt-dashboard-content-wrapper">
                    <div class="tutor-bg-photo bg_image bg_image--23 height-350"></div>
                    <!-- Start Tutor Information  -->
                    <div class="rbt-tutor-information">
                        <div class="rbt-tutor-information-left">
                            <div class="thumbnail rbt-avatars size-lg">
                                <img src="assets/images/team/avatar-2.jpg" alt="Instructor">
                            </div>
                            <div class="tutor-content">
                                <h5 class="title">Emily Hannah</h5>
                                <ul class="rbt-meta rbt-meta-white mt--5">
                                    <li><i class="feather-book"></i>5 Courses Enroled</li>
                                    <li><i class="feather-award"></i>4 Certificate</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rbt-tutor-information-right">
                            <div class="tutor-btn">
                                <a class="rbt-btn btn-md hover-icon-reverse" href="#">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Become an Instructor</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Tutor Information  -->
                </div>
                <!-- End Dashboard Top  -->

                <div class="row g-5">
                    <div class="col-lg-3">
                        <!-- Start Dashboard Sidebar  -->
                        <div class="rbt-default-sidebar sticky-top rbt-shadow-box rbt-gradient-border">
                            <div class="inner">
                                <div class="content-item-content">
                                    <div class="rbt-default-sidebar-wrapper">
                                        <div class="section-title mb--20">
                                            <h6 class="rbt-title-style-2">Welcome, Jone Due</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{ route('Dashboard.Home') }}"><i class="feather-home"></i><span>Dashboard</span></a></li>
                                                <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-user"></i><span>My Profile</span></a></li>
                                                <li><a href="{{ route('Dashboard.EnrolledCourses') }}"><i class="feather-book-open"></i><span>Enrolled Courses</span></a></li>
                                                <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                                <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-star"></i><span>Reviews</span></a></li>
                                                <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-shopping-bag"></i><span>Order History</span></a></li>
                                            </ul>
                                        </nav>
                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">User</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="index.html"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Main Content Area -->
                    <div class="col-lg-9">
                        <!-- Start Instructor Profile  -->
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="advance-tab-button mb--30">
                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="myTab-4" role="tablist">
                                        <li role="presentation">
                                            <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4" role="tab" aria-controls="home-4" aria-selected="true">
                                                <span class="title">Enrolled Courses</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">
                                        <div class="row g-5">
                                            @foreach([90, 40, 65] as $progress)
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <div class="rbt-card variation-01 rbt-hover">
                                                    <div class="rbt-card-img">
                                                        <a href="course-details.html">
                                                            <img src="assets/images/course/course-online-0{{ $loop->index + 1 }}.jpg" alt="Card image">
                                                        </a>
                                                    </div>
                                                    <div class="rbt-card-body">
                                                        <div class="rbt-card-top">
                                                            <div class="rbt-review">
                                                                <div class="rating">
                                                                    @for($i = 0; $i < 5; $i++)
                                                                        <i class="fas fa-star"></i>
                                                                    @endfor
                                                                </div>
                                                                <span class="rating-count"> ({{ $progress == 65 ? 4 : 15 }} Reviews)</span>
                                                            </div>
                                                            <div class="rbt-bookmark-btn">
                                                                <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a>
                                                            </div>
                                                        </div>
                                                        <h4 class="rbt-card-title">
                                                            <a href="course-details.html">
                                                                @if($loop->index == 0)
                                                                    React Front To Back
                                                                @elseif($loop->index == 1)
                                                                    PHP Beginner + Advanced
                                                                @else
                                                                    Angular Zero to Mastery
                                                                @endif
                                                            </a>
                                                        </h4>
                                                        <ul class="rbt-meta">
                                                            <li><i class="feather-book"></i>{{ [20, 10, 14][$loop->index] }} Lessons</li>
                                                            <li><i class="feather-users"></i>{{ [40, 30, 26][$loop->index] }} Students</li>
                                                        </ul>
                                                        <div class="rbt-progress-style-1 mb--20 mt--10">
                                                            <div class="single-progress">
                                                                <h6 class="rbt-title-style-2 mb--10">Complete</h6>
                                                                <div class="progress">
                                                                     <div class="progress-bar wow fadeInLeft bar-color-success" data-wow-duration="0.5s" data-wow-delay=".3s" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                    <span class="rbt-title-style-2 progress-number">{{ $progress }}%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rbt-card-bottom">
                                                            <a class="rbt-btn btn-sm bg-primary-opacity w-100 text-center" href="#">Download Certificate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Instructor Profile  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
