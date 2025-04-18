<!-- Start Footer aera -->
<footer class="rbt-footer footer-style-1 bg-color-white overflow-hidden">
    <div class="footer-top">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <div class="logo logo-dark">
                            <a href="{{ route('Dashboard.Home') }}">
                                <img src="{{ asset('assets/images/dark/logo/logo-dark.png') }}" alt="Edu-cause">
                            </a>
                        </div>
                        <div class="logo d-none logo-light">
                            <a href="{{ route('Dashboard.Home') }}">
                                <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="Edu-cause">
                            </a>
                        </div>

                        <p class="description mt--20">We're committed to helping you reach your learning goals through quality courses and mentorship.</p>

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
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Quick Links</h5>
                        <ul class="ft-link">
                            <li><a href="{{ route('Dashboard.EnrolledCourses') }}">My Courses</a></li>
                            <li><a href="{{ route('Dashboard.Wishlist') }}">Wishlist</a></li>
                            <li><a href="{{ route('Dashboard.OrderHistory') }}">Order History</a></li>
                            <li><a href="/mentoring-projects">Mentoring</a></li>
                            <li><a href="/faqs">Help Center</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Account -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">My Account</h5>
                        <ul class="ft-link">
                            <li><a href="{{ route('Dashboard.MyProfile') }}">Profile</a></li>
                            <li><a href="{{ route('Dashboard.OrderHistory') }}">Payments</a></li>
                            <li><a href="#">Certificates</a></li>
                            <li><a href="{{ route('landing.Authentication') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" action="{{ route('landing.Authentication') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h5 class="ft-title">Support</h5>
                        <ul class="ft-link">
                            <li><span>Phone:</span> <a href="tel:+6281234567890">+62 812-3456-7890</a></li>
                            <li><span>Email:</span> <a href="mailto:support@nextlevelcourse.com">support@nextlevelcourse.com</a></li>
                        </ul>

                        <div class="mt--20">
                            <h6 class="w-600">Headquarters</h6>
                            <p class="description">Next Level Course HQ<br />Jl. Belajar No. 123, Bandung, Indonesia</p>
                        </div>
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
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Copyright © 2025 <a href="{{ route('Dashboard.Home') }}">Next Level Course</a> All Rights Reserved.</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li><a href="/privacy-policy">Privacy policy</a></li>
                        <li><a href="/terms">Terms of service</a></li>
                        <li><a href="/contact">Contact Support</a></li>
                    </ul>
                </div>
            </div>
        </div>
</footer>