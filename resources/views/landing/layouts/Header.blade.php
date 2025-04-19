<header class="rbt-header rbt-header-default rbt-transparent-header">
    <div class="rbt-sticky-placeholder"></div>
    <div class="rbt-header-campaign rbt-header-campaign-1 rbt-header-top-news bg-image1">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="inner justify-content-center">
                            <div class="content">
                                <span class="rbt-badge variation-02 bg-color-primary color-white radius-round">Limited
                                    Time Offer</span>
                                <span class="news-text color-white-off"><img
                                        src="{{ asset('assets/images/icons/hand-emojji.svg') }}"
                                        alt="Hand Emojji Images"> Intro price. Get Histudy for Big Sale -95% off.</span>
                            </div>
                            <div class="right-button">
                                <a class="rbt-btn-link color-white"
                                    href="https://themeforest.net/checkout/from_item/42846507?license=regular">
                                    <span>Purchase Now <i class="feather-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-close position-right">
            <button class="rbt-round-btn btn-white-off bgsection-activation">
                <i class="feather-x"></i>
            </button>
        </div>
    </div>

    <div class="rbt-header-wrapper  @@sticky">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="{{ route('landing.Home') }}">
                            <img src="{{ asset('assets/images/dark/logo/logo-dark.png') }}" alt="Education Logo Images"
                                width="200%">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="{{ route('landing.Home') }}">
                            <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="Education Logo Images"
                                width="200%">
                        </a>
                    </div>
                </div>
                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{ route('landing.Home') }}">Home</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Course <i class="feather-chevron-down"></i></a>
                                <!-- Start Mega Menu -->
                                <div class="rbt-megamenu grid-item-3">
                                    <div class="wrapper">
                                        <div class="row row--15 single-dropdown-menu-presentation">
                                            <!-- Kolom 1: Tech & Innovation -->
                                            <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                <h5 class="mega-menu-title">Tech & Innovation</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Software
                                                            Development
                                                            (Fullstack) <span class="rbt-badge-card">Hot</span></a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Cybersecurity
                                                            <span class="rbt-badge-card">New</span></a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Cloud
                                                            Computing</a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Artificial
                                                            Intelligence
                                                            & Machine Learning <span
                                                                class="rbt-badge-card">Hot</span></a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">IoT with
                                                            ESP32 99
                                                            Project <span class="rbt-badge-card">New</span></a></li>

                                                </ul>
                                            </div>

                                            <!-- Kolom 2: Business & Soft Skills -->
                                            <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                <h5 class="mega-menu-title">Business & Soft Skills</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Content
                                                            Creation
                                                            &
                                                            Personal Branding <span
                                                                class="rbt-badge-card">Hot</span></a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Public
                                                            Speaking &
                                                            Communication</a></li>

                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Entrepreneurship
                                                            &
                                                            Business Strategy</a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Productivity
                                                            &
                                                            Time
                                                            Management <span class="rbt-badge-card">New</span></a></li>
                                                </ul>
                                            </div>

                                            <!-- Kolom 3: Education for All -->
                                            <div class="col-lg-4 col-xxl-4 single-mega-item">
                                                <h5 class="mega-menu-title">Education for All</h5>
                                                <ul class="mega-menu-item">
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Science
                                                            Experiments at
                                                            Home</a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Basic
                                                            English &
                                                            Conversation Practice</a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Math Fun &
                                                            Problem
                                                            Solving Games</a></li>
                                                    <li><a href="{{ route('landing.DetailCourseLanding') }}">Basic
                                                            English &
                                                            Conversation Practice</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Tombol CTA -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="btn-wrapper">
                                                    <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none"
                                                        href="{{ route('landing.AllCourse') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">All Course</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>

                            <!-- <li class="has-dropdown has-menu-child-item">
                                <a href="#">Dashboard
                                    <i class="feather-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li class="has-dropdown"><a href="#">Instructor Dashboard</a>
                                    </li>
                                    <li class="has-dropdown"><a href="#">Student Dashboard</a>
                                    </li>
                                </ul>
                            </li> -->


                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="#">Special Programs <i class="feather-chevron-down"></i></a>
                                <!-- Start Mega Menu -->
                                <div class="rbt-megamenu grid-item-2"> <!-- 2 columns layout -->
                                    <div class="wrapper">
                                        <div class="row row--15 single-dropdown-menu-presentation">
                                            <div class="col-lg-6 col-xxl-6 single-mega-item">
                                                <h6 class="rbt-mega-menu-title">Private Programs</h6>
                                                <ul class="mega-menu-item">
                                                    <li><a href="/SpecialPrograms#private-class">Biologi SMA</a></li>
                                                    <li><a href="/SpecialPrograms#private-class">Fisika SMA <span
                                                                class="rbt-badge-card">Hot</span></a></li>
                                                    <li><a href="/SpecialPrograms#private-class">Matematika</a></li>
                                                    <li><a href="/SpecialPrograms#private-class">Bahasa Inggris</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-6 col-xxl-6 single-mega-item">
                                                <h6 class="rbt-mega-menu-title">Project Based</h6>
                                                <ul class="mega-menu-item">
                                                    <li><a href="/SpecialPrograms#mentoring-project">Laravel Private
                                                            Class</a></li>
                                                    <li><a href="/SpecialPrograms#mentoring-project">Fullstack Coaching
                                                            <span class="rbt-badge-card">New</span></a></li>
                                                    <li><a href="/SpecialPrograms#mentoring-project">Design UI/UX
                                                            Private</a></li>
                                                    <li><a href="/SpecialPrograms#mentoring-project">Flutter Mobile
                                                            Dev</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="btn-wrapper">
                                                    <a class="rbt-btn btn-gradient hover-icon-reverse square btn-xl w-100 text-center mt--30 hover-transform-none"
                                                        href="{{ route('landing.SpecialPrograms') }}">
                                                        <span class="icon-reverse-wrapper">
                                                            <span class="btn-text">View All Special Programs</span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                            <span class="btn-icon"><i
                                                                    class="feather-arrow-right"></i></span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Mega Menu -->
                            </li>

                            <li class="has-dropdown has-menu-child-item">
                                <a href="#">About Us
                                    <i class="feather-chevron-down"></i>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{ route('landing.About') }}">Who We Are</a></li>
                                    <li><a href="{{ route('landing.Testimonial') }}">Testimonials</a>
                                    <li><a href="{{ route('landing.OurCommunity') }}">Join Our Community</a></li>
                                    <li><a href="{{ route('landing.FAQs') }}">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <div class="rbt-btn-wrapper d-none d-xl-block">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none"
                            href="{{ route('landing.Authentication') }}">
                            <span data-text="Join Now">Join Now</span>
                        </a>
                    </div>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button rbt-round-btn">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->
                </div>

            </div>
        </div>
    </div>
</header>

<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-dark">
                        <a href="{{ route('landing.Home') }}">

                            <img src="{{ asset('assets/images/dark/logo/logo-dark.png') }}"
                                alt="Education Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="{{ route('landing.Home') }}">
                            <img src="{{ asset('assets/images/dark/logo/logo-dark.png') }}"
                                alt="Education Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Deskripsi All Nex Level Course</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <!-- Home -->
                <!-- Home -->
                <li>
                    <a href="{{ route('landing.Home') }}">Home</a>
                </li>

                <!-- Courses -->
                <li>
                    <a href="{{ route('landing.AllCourse') }}">Courses</a>
                </li>

                <!-- Special Program -->
                <li>
                    <a href="{{ route('landing.SpecialPrograms') }}">Special Program</a>
                </li>

                <!-- About Us -->
                <li class="with-megamenu has-menu-child-item position-static">
                    <a href="#">About Us <i class="feather-chevron-down"></i></a>

                    <!-- Start Mega Menu -->
                    <div class="rbt-megamenu grid-item-4">
                        <div class="wrapper">
                            <div class="row row--15">
                                <!-- Column 1 -->
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <ul class="mega-menu-item">
                                        <li><a href="about-us-01.html">Who We Are</a></li>
                                        <li><a href="about-us-02.html">Testimonial</a></li>
                                        <li><a href="event-grid.html">Our Community</a></li>
                                        <li><a href="event-list.html">FAQs</a></li>
                                    </ul>
                                </div>

                                <!-- Column 2 (empty, for future content maybe) -->
                                <div class="col-lg-12 col-xl-3 col-xxl-3 single-mega-item">
                                    <div class="mega-category-item">
                                        <!-- Optional content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Mega Menu -->
                </li>
            </ul>
        </nav>


        <div class="mobile-menu-bottom">
            <div class="rbt-btn-wrapper mb--20">
                <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center"
                    href="{{ route('landing.Authentication') }}">
                    <span>Join Now</span>
                </a>
            </div>

            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Find With Us</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.instagram.com/nextlevelcourse_official">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
