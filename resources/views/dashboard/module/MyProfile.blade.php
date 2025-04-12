@extends('dashboard.layouts.Master')

@section('title', 'My Profile')

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
                                                    <li><a href="student-dashboard.html"><i class="feather-home"></i><span>Dashboard</span></a></li>
                                                    <li><a href="student-profile.html"><i class="feather-user"></i><span>My Profile</span></a></li>
                                                    <li><a href="student-enrolled-courses.html"><i class="feather-book-open"></i><span>Enrolled Courses</span></a></li>
                                                    <li><a href="student-wishlist.html"><i class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                                    <li><a href="student-reviews.html"><i class="feather-star"></i><span>Reviews</span></a></li>
                                                    <li><a href="student-my-quiz-attempts.html"><i class="feather-help-circle"></i><span>My Quiz Attempts</span></a></li>
                                                    <li><a href="student-order-history.html"><i class="feather-shopping-bag"></i><span>Order History</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">User</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="student-settings.html"><i class="feather-settings"></i><span>Settings</span></a></li>
                                                    <li><a href="index.html"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Dashboard Sidebar  -->
                        </div>
                        <div class="col-lg-9">
                            <!-- Start Instructor Profile  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">My Profile</h4>
                                    </div>
                                    <!-- Start Profile Row  -->
                                    <div class="rbt-profile-row row row--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2">Registration Date</div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="rbt-profile-content b2">February 25, 2025 6:01 am</div>
                                        </div>
                                    </div>
                                    <!-- End Profile Row  -->

                                    <!-- Start Profile Row  -->
                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2">First Name</div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="rbt-profile-content b2">Emily</div>
                                        </div>
                                    </div>
                                    <!-- End Profile Row  -->

                                    <!-- Start Profile Row  -->
                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2">Username</div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="rbt-profile-content b2">instructor</div>
                                        </div>
                                    </div>
                                    <!-- End Profile Row  -->

                                    <!-- Start Profile Row  -->
                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2">Email</div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="rbt-profile-content b2">example@gmail.com</div>
                                        </div>
                                    </div>
                                    <!-- End Profile Row  -->

                                    <!-- Start Profile Row  -->
                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="rbt-profile-content b2">Phone Number</div>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <div class="rbt-profile-content b2">+1-202-555-0174</div>
                                        </div>
                                    </div>
                                    <!-- End Profile Row  -->

                                    <!-- Start Change Password Section -->
                                    <div class="rbt-profile-row row row--15 mt--30">
                                        <div class="col-lg-12">
                                            <div class="section-title mt--20 mb--10">
                                                <h4 class="rbt-title-style-3">Change Password</h4>
                                            </div>

                                            <!-- Success Alert -->
                                            @if(session('success'))
                                                <div class="alert alert-success">
                                                    {{ session('success') }}
                                                </div>
                                            @endif

                                            <!-- Error Alert -->
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul class="mb-0">
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <form method="POST" action="#">
                                                @csrf
                                                <div class="row g-4">
                                                    <div class="col-md-4">
                                                        <label for="current_password" class="form-label">Current Password</label>
                                                        <input type="password" class="form-control" id="current_password" name="current_password" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="new_password" class="form-label">New Password</label>
                                                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" required>
                                                    </div>
                                                </div>

                                                <div class="mt--20">
                                                    <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">Update Password</span>
                                                            <span class="btn-icon"><i class="feather-lock"></i></span>
                                                            <span class="btn-icon"><i class="feather-lock"></i></span>
                                                        </span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Change Password Section -->

                                    <!-- End Profile Row  -->
                                </div>
                            </div>
                            <!-- End Instructor Profile  -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->




    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    @endsection