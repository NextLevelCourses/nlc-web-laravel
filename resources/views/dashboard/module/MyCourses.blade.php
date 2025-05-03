@extends('dashboard.layouts.Master')

@section('title', 'My Course')

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
                                    <a class="rbt-btn btn-md hover-icon-reverse" href="{{ route('Dashboard.CreateCourse') }}">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">Create a New Course</span>
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
                                                    <li><a href="{{ route('landing.Authentication') }}"><i class="feather-log-out"></i><span>Logout</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Start Main Content Area -->
                       <div class="col-lg-9">
                        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Announcements
                                        </h4>
                                    </div>

                                    <!-- Start Call To Action  -->
                                    <div class="rbt-callto-action rbt-cta-default style-2">
                                        <div class="content-wrapper overflow-hidden pt--30 pb--30 bg-color-primary-opacity">
                                            <div class="row gy-5 align-items-end">
                                                <div class="col-lg-8">
                                                    <div class="inner">
                                                        <div class="content text-left">
                                                            <h5 class="mb--5">Notify your all students.</h5>
                                                            <p class="b3">Create Announcement</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="call-to-btn text-start text-lg-end position-relative">
                                                        <a class="rbt-btn btn-sm rbt-switch-btn rbt-switch-y" href="#">
                                                            <span data-text="Add New Announcement">Add New
                                                                Announcement</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Call To Action  -->

                                    <!-- Start Filter -->
                                    <!-- <div class="rbt-dashboard-filter-wrapper mt--60">
                                        <div class="row g-5">
                                            <div class="col-lg-6">
                                                <div class="filter-select rbt-modern-select">
                                                    <span class="select-label d-block">Courses</span>
                                                    <select class="w-100" data-live-search="true" title="All" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                                        <option data-subtext="HTML">Web Design</option>
                                                        <option data-subtext="Photoshop">Graphic</option>
                                                        <option data-subtext="Career">English</option>
                                                        <option data-subtext="Career">Spoken English</option>
                                                        <option data-subtext="Experts">Art Painting</option>
                                                        <option data-subtext="Experts">App Development</option>
                                                        <option data-subtext="Experts">Web Application</option>
                                                        <option data-subtext="Experts">Php Development</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="filter-select rbt-modern-select">
                                                    <span class="select-label d-block">Short By</span>
                                                    <select class="w-100">
                                                        <option>Default</option>
                                                        <option>Latest</option>
                                                        <option>Popularity</option>
                                                        <option>Trending</option>
                                                        <option>Price: low to high</option>
                                                        <option>Price: high to low</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="filter-select rbt-modern-select">
                                                    <span class="select-label d-block">Short By Offer</span>
                                                    <select class="w-100">
                                                        <option>Free</option>
                                                        <option>Paid</option>
                                                        <option>Premium</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- End Filter -->

                                    <hr class="mt--30">

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                                        <table class="rbt-table table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>My Course</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>
                                                        <span class="h6 mb--5">March 16, 2024</span>
                                                        <p class="b3">10.00am</p>
                                                    </th>
                                                    <td>
                                                        <span class="h6 mb--5">Announcements</span>
                                                        <p class="b3">Course: Fundamentals 101</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-edit"></i> Edit</a>
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-trash-2"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="h6 mb--5">Janu 16, 2024</span>
                                                        <p class="b3">12.00am</p>
                                                    </th>
                                                    <td>
                                                        <span class="h6 mb--5">Web Design</span>
                                                        <p class="b3">Course: Web Design</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-edit"></i> Edit</a>
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-trash-2"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="h6 mb--5">Janu 16, 2024</span>
                                                        <p class="b3">12.00am</p>
                                                    </th>
                                                    <td>
                                                        <span class="h6 mb--5">App Development</span>
                                                        <p class="b3">Course: App Development</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-edit"></i> Edit</a>
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-trash-2"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <span class="h6 mb--5">Janu 16, 2024</span>
                                                        <p class="b3">12.00am</p>
                                                    </th>
                                                    <td>
                                                        <span class="h6 mb--5">Announcement Title</span>
                                                        <p class="b3">Course: Web Design</p>
                                                    </td>
                                                    <td>
                                                        <div class="rbt-button-group justify-content-end">
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-edit"></i> Edit</a>
                                                            <a class="rbt-btn-link left-icon" href="#"><i
                                                                    class="feather-trash-2"></i> Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><div class="row">
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
                            <!-- End Enrole Course  -->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
