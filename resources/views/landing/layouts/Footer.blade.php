<!-- Start Footer aera -->
<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="logo logo-dark">
                            <a href="{{ route('landing.Home') }}">
                                <img src="{{ asset('assets/images/dark/logo/logo-dark.png') }}" alt="Edu-cause">
                            </a>
                        </div>
                        <div class="logo d-none logo-light">
                            <a href="{{ route('landing.Home') }}">
                                <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="Edu-cause">
                            </a>
                        </div>

                        <p class="description mt--20">We’re always in search for talented
                            and motivated people. Don’t be shy introduce yourself!
                        </p>

                        <ul class="social-icon social-default justify-content-start">
                            <li><a href="https://www.instagram.com/nextlevelcourse_official">
                                    <i class="feather-instagram"></i>
                                </a>
                            </li>
                            <li><a href="#">
                                    <i class="feather-facebook"></i>
                                </a>
                            </li>
                            <li><a href="#">
                                    <i class="feather-twitter"></i>
                                </a>
                            </li>
                            <li><a href="#">
                                    <i class="feather-linkedin"></i>
                                </a>
                            </li>
                        </ul>

                        <div class="contact-btn mt--30">
                            <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                <div class="icon-reverse-wrapper">
                                    <span class="btn-text">Contact Next Level</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bagian Links -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Next Level</h5>
                        <ul class="ft-link">
                            <li><a href="{{ route('landing.AllCourse') }}">Courses</a></li>
                            <li><a href="{{ route('landing.SpecialPrograms') }}">Mentoring Projects</a></li>
                            <li><a href="{{ route('landing.SpecialPrograms') }}">Private Classes</a></li>
                            <li><a href="{{ route('landing.About') }}">About Us</a></li>
                            <li><a href="{{ route('landing.FAQs') }}">FAQ</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bagian Company -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">For Members</h5>
                        <ul class="ft-link">
                            <li><a href="{{ route('landing.Register') }}">Login</a></li>
                            <li><a href="{{ route('landing.Register') }}">Register</a></li>
                            <li><a href="{{ route('landing.Register') }}">My Courses</a></li>
                            <li><a href="{{ route('landing.Register') }}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Bagian Kontak -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Get in Touch</h5>
                        <ul class="ft-link">
                            <li><span>Phone:</span> <a href="#">+62 812-3456-7890</a></li>
                            <li><span>Email:</span> <a href="mailto:admin@nextlevelcourse.com">admin@nextlevelcourse.com</a></li>
                        </ul>

                        <form class="newsletter-form mt--20" action="#">
                            <h6 class="w-600">Full Address</h6>
                            <p class="description">Next Level Course HQ<br />Jl. Belajar No. 123, Bandung, Indonesia</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a href="{{ route('landing.Home') }}">Next Level
                            Course</a> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
</footer>
<!-- End Footer Area -->
