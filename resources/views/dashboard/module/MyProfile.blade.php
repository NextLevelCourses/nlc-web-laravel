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
                                            <span class="btn-text">Become be Instructor</span>
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
                                                    <li><a href="{{ route('Dashboard.Wishlist') }}"><i class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                                    <li><a href="#"><i class="feather-star"></i><span>Reviews</span></a></li>
                                                    <li><a href="{{ route('Dashboard.MyCourses') }}"><i class="feather-monitor"></i><span>My Courses</span></a></li>
                                                    <li><a href="{{ route('Dashboard.OrderHistory') }}"><i class="feather-shopping-bag"></i><span>Order History</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">Instructor</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li><a href="{{ route('Dashboard.MyCourses') }}"><i
                                                    class="feather-monitor"></i><span>My Courses</span></a></li>
                                                </ul>
                                            </nav>

                                            <div class="section-title mt--40 mb--20">
                                                <h6 class="rbt-title-style-2">User</h6>
                                            </div>

                                            <nav class="mainmenu-nav">
                                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                    <li>
                                                        <form action="{{ route('auth.logout') }}" id="logout-user"
                                                            method="POST">
                                                            @csrf
                                                            <a href="{{ route('auth.logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-user').submit();"><i
                                                                    class="feather-log-out"></i><span>{{ __('Logout') }}</span></a>
                                                        </form>
                                                    </li>
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
                                        <h4 class="rbt-title-style-3">Settings</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Profile</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                                    <span class="title">Password</span>
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                                                    <span class="title">Social Share</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="rbt-dashboard-content-wrapper">
                                                <div class="tutor-bg-photo bg_image bg_image--22 height-245"></div>
                                                <!-- Start Tutor Information  -->
                                                <div class="rbt-tutor-information">
                                                    <div class="rbt-tutor-information-left">
                                                        <div class="thumbnail rbt-avatars size-lg position-relative">
                                                            <img src="assets/images/team/avatar.jpg" alt="Instructor">
                                                            <div class="rbt-edit-photo-inner">
                                                                <button class="rbt-edit-photo" title="Upload Photo">
                                                                    <i class="feather-camera"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rbt-tutor-information-right">
                                                        <div class="tutor-btn">
                                                            <a class="rbt-btn btn-sm btn-border color-white radius-round-10" href="#">Edit Cover Photo</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Tutor Information  -->
                                            </div>
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="fullname">Full Name</label>
                                                        <input id="fullname" name="fullname" type="text" class="form-control" value="John">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="filter-select rbt-modern-select">
                                                        <label for="displayname">Display name publicly as</label>
                                                        <select id="displayname" name="displayname" class="form-control w-100">
                                                            <option selected>John Due</option>
                                                            <option>John</option>
                                                            <option>Due</option>
                                                            <option>Due John</option>
                                                            <option>johndue</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="birthday">Birthday</label>
                                                        <input id="birthday" name="birthday" type="date" class="form-control" value="1990-01-01">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="city">City</label>
                                                        <input id="city" name="city" type="text" class="form-control" value="Jakarta">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="province">Provinsi</label>
                                                        <input id="province" name="province" type="text" class="form-control" value="DKI Jakarta">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="place">Place</label>
                                                        <input id="place" name="place" type="text" class="form-control" value="Indonesia">
                                                    </div>
                                                </div>

                                                

                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="bio">Bio</label>
                                                        <textarea id="bio" name="bio" class="form-control" rows="5">I'm the Front-End Developer for #Rainbow IT in Bangladesh, OR. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences.</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt--20">
                                                    <div class="rbt-form-group">
                                                    <a class="rbt-btn btn-gradient" href="#">Update Info</a>
                                                </div>
                                            </div>
                                        </div>

                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="currentpassword">Current Password</label>
                                                        <input id="currentpassword" type="password" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="newpassword">New Password</label>
                                                        <input id="newpassword" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="retypenewpassword">Re-type New Password</label>
                                                        <input id="retypenewpassword" type="password" placeholder="Re-type New Password">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <a class="rbt-btn btn-gradient" href="#">Update Password</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                            <!-- Start Profile Row  -->
                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                                        <input id="facebook" type="text" placeholder="https://facebook.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="twitter"><i class="feather-twitter"></i> Twitter</label>
                                                        <input id="twitter" type="text" placeholder="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>
                                                        <input id="linkedin" type="text" placeholder="https://linkedin.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="website"><i class="feather-globe"></i> Website</label>
                                                        <input id="website" type="text" placeholder="https://website.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="github"><i class="feather-github"></i> Github</label>
                                                        <input id="github" type="text" placeholder="https://github.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12 mt--10">
                                                    <div class="rbt-form-group">
                                                        <a class="rbt-btn btn-gradient" href="#">Update Profile</a>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                                

        @endsection
        <!-- End Form -->
        @push('js')
            <script src="{{ asset('assets/sweetalert2-11.19.1/dist/sweetalert2.all.min.js') }}"></script>
            <script src="{{ asset('assets/sweetalert2-11.19.1/dist/sweetalert2.conf.js') }}"></script>
        @endpush