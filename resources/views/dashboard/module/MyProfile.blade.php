@extends('dashboard.layouts.Master')

@section('title', 'My Profile')

@section('content')
    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    @session('success')
        <div class="flash-data-success" data-flashdata-success="{{ $value }}"></div>
    @endsession
    @session('error')
        <div class="flash-data-error" data-flashdata-error="{{ $value }}"></div>
    @endsession

    <div class="rbt-tutor-information">
        <div class="rbt-tutor-information-left">
            <div class="thumbnail rbt-avatars size-lg">
                <!-- Tombol Edit Profile -->
                <div class="position-absolute top-0 end-0 m-3">
                    <a href="#" class="btn btn-sm btn-primary d-flex align-items-center">
                        <i class="feather-edit me-1"></i> Edit
                    </a>
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
                                    <li><a href="{{ route('Dashboard.Home') }}"><i
                                                class="feather-home"></i><span>Dashboard</span></a></li>
                                    <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-user"></i><span>My
                                                Profile</span></a></li>
                                    <li><a href="{{ route('Dashboard.EnrolledCourses') }}"><i
                                                class="feather-book-open"></i><span>Enrolled
                                                Courses</span></a></li>
                                    <li><a href="{{ route('Dashboard.Wishlist') }}"><i
                                                class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                    <li><a href="#"><i class="feather-star"></i><span>Reviews</span></a></li>
                                    <li><a href="{{ route('Dashboard.OrderHistory') }}"><i
                                                class="feather-shopping-bag"></i><span>Order
                                                History</span></a></li>
                                </ul>
                            </nav>

                            <div class="section-title mt--40 mb--20">
                                <h6 class="rbt-title-style-2">User</h6>
                            </div>

                            <nav class="mainmenu-nav">
                                <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                    <li>
                                        <form action="{{ route('auth.logout') }}" id="logout-user" method="POST">
                                            @csrf
                                            <a href="{{ route('auth.logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-user').submit();"><i
                                                    class="feather-log-out"></i><span>{{ __('Logout') }}</span></a>
                                        </form>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <nav class="mainmenu-nav">
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li><a href="{{ route('Dashboard.Home') }}"><i
                                            class="feather-home"></i><span>Dashboard</span></a></li>
                                <li><a href="{{ route('Dashboard.MyProfile') }}"><i class="feather-user"></i><span>My
                                            Profile</span></a></li>
                                <li><a href="{{ route('Dashboard.EnrolledCourses') }}"><i
                                            class="feather-book-open"></i><span>Enrolled Courses</span></a></li>
                                <li><a href="{{ route('Dashboard.Wishlist') }}"><i
                                            class="feather-bookmark"></i><span>Wishlist</span></a></li>
                                <li><a href="#"><i class="feather-star"></i><span>Reviews</span></a></li>
                                <li><a href="{{ route('Dashboard.MyCourses') }}"><i class="feather-monitor"></i><span>My
                                            Courses</span></a></li>
                                <li><a href="{{ route('Dashboard.OrderHistory') }}"><i
                                            class="feather-shopping-bag"></i><span>Order History</span></a></li>
                            </ul>
                        </nav>

                        <div class="section-title mt--40 mb--20">
                            <h6 class="rbt-title-style-2">Instructor</h6>
                        </div>
                        <nav class="mainmenu-nav">
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li><a href="{{ route('Dashboard.MyCourses') }}"><i class="feather-monitor"></i><span>My
                                            Courses</span></a></li>
                            </ul>
                        </nav>

                        <div class="section-title mt--40 mb--20">
                            <h6 class="rbt-title-style-2">User</h6>
                        </div>
                        <nav class="mainmenu-nav">
                            <ul class="dashboard-mainmenu rbt-default-sidebar-list">
                                <li><a href="{{ route('landing.Authentication') }}"><i
                                            class="feather-log-out"></i><span>Logout</span></a></li>
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
                @if (session('success'))
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

                    <!-- Alert Messages -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
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

                    <!-- Start Form -->
                    <form method="POST" action="#">
                        @csrf

                        <!-- Start Profile Row -->
                        <div class="rbt-profile-row row row--15">
                            <div class="col-lg-4 col-md-4">
                                <label class="rbt-profile-content b2">Registration Date</label>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <input type="text" class="form-control"
                                    value="{{ Auth::guard('user')->user()->created_at->format('d M Y H:i:s') }}"
                                    readonly />
                            </div>
                        </div>

                        <div class="rbt-profile-row row row--15 mt--15">
                            <div class="col-lg-4 col-md-4">
                                <label class="rbt-profile-content b2">First Name</label>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <input type="text" class="form-control" name="first_name"
                                    value="{{ Auth::guard('user')->user()->name }}" />
                            </div>
                        </div>

                        <div class="rbt-profile-row row row--15 mt--15">
                            <div class="col-lg-4 col-md-4">
                                <label class="rbt-profile-content b2">Username</label>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <input type="text" class="form-control" name="username"
                                    value="{{ Auth::guard('user')->user()->username }}" />
                            </div>
                        </div>

                        <div class="rbt-profile-row row row--15 mt--15">
                            <div class="col-lg-4 col-md-4">
                                <label class="rbt-profile-content b2">Email</label>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <input type="email" class="form-control" name="email"
                                    value="{{ Auth::guard('user')->user()->email }}" />
                            </div>
                        </div>

                        <div class="rbt-profile-row row row--15 mt--15">
                            <div class="col-lg-4 col-md-4">
                                <label class="rbt-profile-content b2">Phone Number</label>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <input type="text" class="form-control" value="+1-202-555-0174" />
                            </div>
                        </div>

                        <!-- Change Password Form -->
                        <form method="POST" action="#">
                            @csrf
                            <div class="rbt-profile-row row row--15 mt--15">
                                <div class="col-lg-4 col-md-4">
                                    <label class="rbt-profile-content b2">Current Password</label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="password" class="form-control" name="current_password" required />
                                </div>
                            </div>

                            <div class="row row--15 mt--15">
                                <div class="col-lg-4 col-md-4">
                                    <label class="rbt-profile-content b2">New Password</label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="password" class="form-control" name="new_password" required />
                                </div>
                            </div>

                            <div class="row row--15 mt--15">
                                <div class="col-lg-4 col-md-4">
                                    <label class="rbt-profile-content b2">Confirm Password</label>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <input type="password" class="form-control" name="new_password_confirmation"
                                        required />
                                </div>
                            </div>
                        </form>
                        <!-- Save Changes Button -->
                        <div class="mt--30 text-end">
                            <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Save Changes</span>
                                    <span class="btn-icon"><i class="feather-save"></i></span>
                                    <span class="btn-icon"><i class="feather-save"></i></span>
                                </span>
                            </button>
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
