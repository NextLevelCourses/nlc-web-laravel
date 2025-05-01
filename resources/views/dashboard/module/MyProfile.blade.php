@extends('dashboard.layouts.Master')

@section('title', 'My Profile')

@section('content')
<div class="rbt-page-banner-wrapper position-relative">
    <div class="rbt-banner-image" style="height: 200px; background-color: #eee;"></div>

</div>

<div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Dashboard Top -->
                <div class="rbt-dashboard-content-wrapper">
                    <div class="tutor-bg-photo bg_image bg_image--23 height-350">
                        <!-- Tombol Edit Banner -->
    <div class="position-absolute top-0 end-0 m-3">
        <a href="#" class="btn btn-sm btn-primary d-flex align-items-center">
            <i class="feather-edit me-1"></i> Edit Banner
        </a>
    </div>
                    </div>

                    <div class="rbt-tutor-information">
                        <div class="rbt-tutor-information-left">
                            <div class="thumbnail rbt-avatars size-lg">
                                <!-- Tombol Edit Profile -->
                            <div class="position-absolute top-0 end-0 m-3">
                                <a href="#" class="btn btn-sm btn-primary d-flex align-items-center">
                                    <i class="feather-edit me-1"></i> Edit
                                </a>
                            </div>
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

                <div class="row g-5">
                    <!-- Sidebar -->
                    <div class="col-lg-3">
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
                                                <li><a href="{{ route('Dashboard.MyCourses') }}"><i class="feather-monitor"></i><span>My Courses</span></a></li>
                                            </ul>
                                        </nav>

                                        <div class="section-title mt--40 mb--20">
                                            <h6 class="rbt-title-style-2">User</h6>
                                        </div>
                                        <nav class="mainmenu-nav">
                                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                                <li><a href="{{ route('landing.Authentication') }}"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Content -->
                    <div class="col-lg-9">
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                            <div class="content">
                                <div class="section-title">
                                    <h4 class="rbt-title-style-3">My Profile</h4>
                                </div>

                                <!-- Alert Messages -->
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Form untuk update foto profil dan banner -->
                                
                                <!-- Form Start -->
                                <form method="POST" action="#">
                                    @csrf

                                    <div class="rbt-profile-row row row--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Registration Date</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" value="February 25, 2025 6:01 am" readonly />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Email</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="email" class="form-control" name="email" value="example@gmail.com" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Username</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" name="username" value="instructor" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Full Name</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" name="first_name" value="Emily" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Place</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" value="Malang" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Birthday</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" value="1 Maret 1990" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">City</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" value="Kota Malang" />
                                        </div>
                                    </div>

                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Provinsi</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="text" class="form-control" value="Jawa Timur" />
                                        </div>
                                    </div>

                                    <!-- Password Change Section -->
                                    <div class="rbt-profile-row row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Current Password</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="password" class="form-control" name="current_password" />
                                        </div>
                                    </div>

                                    <div class="row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">New Password</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="password" class="form-control" name="new_password" />
                                        </div>
                                    </div>

                                    <div class="row row--15 mt--15">
                                        <div class="col-lg-4 col-md-4">
                                            <label class="rbt-profile-content b2">Confirm Password</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                            <input type="password" class="form-control" name="new_password_confirmation" />
                                        </div>
                                    </div>

                                    <!-- Save Button -->
                                    <div class="mt--30 text-end">
                                        <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse">
                                            <span class="icon-reverse-wrapper">
                                                <span class="btn-text">Save Changes</span>
                                                <span class="btn-icon"><i class="feather-save"></i></span>
                                                <span class="btn-icon"><i class="feather-save"></i></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
