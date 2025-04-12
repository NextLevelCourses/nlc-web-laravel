@extends('landing.layouts.Master')

@section('title', 'Private Class')

@section('content')
    <!-- Start Banner Area -->
    <div class="rbt-banner-area rbt-banner-8 variation-02">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-10 offset-lg-1">
                    <div class="content">
                        <div class="inner text-center">
                            <div class="rbt-new-badge rbt-new-badge-one"></div>
                            <h1 class="title">Special Programs for
                                <span class="header-caption"><br>
                                    <span class="cd-headline clip is-full-width">
                                        <span class="cd-words-wrapper">
                                            <b class="is-visible theme-gradient">Private Class</b>
                                            <b class="is-hidden theme-gradient">Mentoring Project</b>
                                            <b class="is-hidden theme-gradient">Career Growth</b>
                                        </span>
                                    </span>
                                </span>
                            </h1>
                            <div class="slider-btn rbt-button-group justify-content-center">
                                <a class="rbt-btn btn-gradient hover-icon-reverse" href="#private-class">
                                    <span class="icon-reverse-wrapper">
                                        <span class="text">Explore Private Class</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </a>
                                <a class="rbt-btn hover-icon-reverse btn-white" href="#mentoring-project">
                                    <span class="icon-reverse-wrapper">
                                        <span class="text">View Mentoring Projects</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right" id="private-class"></i></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Private Programs -->
    <div class="container">
        <div class="col-lg-12">
            <div class="breadcrumb-inner text-center">
                <h2 class="title">Private Class</h2>
            </div>
        </div>

        <div class="container">
            <div class="row g-5 mt--1">
                <!-- Kartu 1 -->
                <div class="col-lg-3 col-md-6" id="1">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <img src="assets/images/course/course-online-01.jpg" alt="Laravel">
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="rating-count">(18 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Matematika Kelas 12 Private
                                    Class</a></h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-layers"></i>Project Based</li>
                                <li><i class="feather-users"></i>Up to 10 Participants</li>
                                <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>
                            </ul>
                            <p class="rbt-card-text">Learn by building real-world apps with professional mentors.</p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price"><span>Rp. 500.000</span></div>
                                <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                        class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <img src="assets/images/course/course-online-02.jpg" alt="ReactJS">
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(12 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Fisika kelas 10 Private
                                    Class</a></h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-layers"></i>Project Based</li>
                                <li><i class="feather-users"></i>Up to 10 Participants</li>
                                <li><i class="feather-clock"></i> 2x/minggu • 1.5 bulan • 90 menit/sesi</li>
                            </ul>
                            <p class="rbt-card-text">Build modern UI with real-world projects using ReactJS.</p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price"><span>Rp. 550.000</span></div>
                                <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                        class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <img src="assets/images/course/course-online-03.jpg" alt="Python">
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="rating-count">(9 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Biologi kelas 12 Private
                                    Class</a></h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-layers"></i>Project Based</li>
                                <li><i class="feather-users"></i>Up to 10 Participants</li>
                                <li><i class="feather-clock"></i> 2x/minggu • 2 bulan • 90 menit/sesi</li>
                            </ul>
                            <p class="rbt-card-text">Start your programming journey with Python from scratch.</p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price"><span>Rp. 480.000</span></div>
                                <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                        class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kartu 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="rbt-card variation-01 rbt-hover">
                        <div class="rbt-card-img">
                            <img src="assets/images/course/course-online-04.jpg" alt="UI/UX">
                        </div>
                        <div class="rbt-card-body">
                            <div class="rbt-card-top">
                                <div class="rbt-review">
                                    <div class="rating">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="rating-count">(15 Reviews)</span>
                                </div>
                            </div>
                            <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">CPNS Private Class</a>
                            </h4>
                            <ul class="rbt-meta">
                                <li><i class="feather-layers"></i>Project Based</li>
                                <li><i class="feather-users"></i>Up to 10 Participants</li>
                                <li><i class="feather-clock"></i> 3x/minggu • 1 bulan • 90 menit/sesi</li>
                            </ul>
                            <p class="rbt-card-text">Master UI/UX design with Figma and real app prototyping.</p>
                            <div class="rbt-card-bottom">
                                <div class="rbt-price"><span>Rp. 600.000</span></div>
                                <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                        class="feather-arrow-right" id="mentoring-project"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div></div>

            <div class="container mt-5">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Mentoring Project Class</h2>
                    </div>
                </div>

                <div class="container">
                    <div class="row g-5 mt--1">
                        <!-- Kartu 1 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <img src="assets/images/course/course-online-04.jpg" alt="UI/UX">
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <span class="rating-count">(21 Reviews)</span>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Fullstack Web
                                            Mentoring</a></h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-layers"></i>Real Project</li>
                                        <li><i class="feather-users"></i>Mentor Guidance</li>
                                        <li><i class="feather-clock"></i> 2x/minggu • 6 minggu</li>
                                    </ul>
                                    <p class="rbt-card-text">Build real-world fullstack web apps with one-on-one guidance.
                                    </p>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price"><span>Rp. 700.000</span></div>
                                        <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu 2 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <img src="assets/images/course/course-online-04.jpg" alt="UI/UX">
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i><i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <span class="rating-count">(7 Reviews)</span>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Mobile App
                                            Mentoring</a></h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-layers"></i>Flutter Project</li>
                                        <li><i class="feather-users"></i>1-on-1 Mentoring</li>
                                        <li><i class="feather-clock"></i> 3x/minggu • 1 bulan</li>
                                    </ul>
                                    <p class="rbt-card-text">Create mobile apps from zero with expert support.</p>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price"><span>Rp. 650.000</span></div>
                                        <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu 3 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <img src="assets/images/course/course-online-04.jpg" alt="UI/UX">
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <span class="rating-count">(11 Reviews)</span>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">Machine Learning
                                            Mentoring</a></h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-layers"></i>Case-Based</li>
                                        <li><i class="feather-users"></i>1-on-1 Guidance</li>
                                        <li><i class="feather-clock"></i> 2x/minggu • 2 bulan</li>
                                    </ul>
                                    <p class="rbt-card-text">Get real ML experience with industry-grade datasets.</p>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price"><span>Rp. 850.000</span></div>
                                        <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kartu 4 -->
                        <div class="col-lg-3 col-md-6">
                            <div class="rbt-card variation-01 rbt-hover">
                                <div class="rbt-card-img">
                                    <img src="assets/images/course/course-online-04.jpg" alt="UI/UX">
                                </div>
                                <div class="rbt-card-body">
                                    <div class="rbt-card-top">
                                        <div class="rbt-review">
                                            <div class="rating">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span class="rating-count">(14 Reviews)</span>
                                        </div>
                                    </div>
                                    <h4 class="rbt-card-title"><a href="{{ route('landing.Register') }}">UI/UX Project
                                            Mentoring</a></h4>
                                    <ul class="rbt-meta">
                                        <li><i class="feather-layers"></i>Figma + Prototype</li>
                                        <li><i class="feather-users"></i>Mentor Feedback</li>
                                        <li><i class="feather-clock"></i> 2x/minggu • 1.5 bulan</li>
                                    </ul>
                                    <p class="rbt-card-text">Design full user journey from wireframe to prototype.</p>
                                    <div class="rbt-card-bottom">
                                        <div class="rbt-price"><span>Rp. 600.000</span></div>
                                        <a class="rbt-btn-link" href="{{ route('landing.Register') }}">Daftar <i
                                                class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Testimonial Section -->
            <div class="rbt-testimonial-area bg-color-white rbt-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
                                <h2 class="title">What Our Students Say</h2>
                                <p class="description mt--20">Hear from participants who have taken our programs</p>
                            </div>
                        </div>
                    </div>

                    <div class="row g-5 mt--20">
                        <!-- Testimonial 1 -->
                        <div class="col-lg-4">
                            <div class="rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-body">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="rbt-card-text">"Private Class Laravel sangat membantu saya memahami konsep
                                        advanced. Mentor sangat berpengalaman dan sabar."</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <img src="assets/images/testimonial/testimonial-1.jpg" alt="Author">
                                        </div>
                                        <div class="rbt-author-info">
                                            <h4 class="title">Andi Wijaya</h4>
                                            <span class="subtitle">Fullstack Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="col-lg-4">
                            <div class="rbt-card variation-02 rbt-hover">
                                <div class="rbt-card-body">
                                    <div class="rbt-review">
                                        <div class="rating">
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="rbt-card-text">"Mentoring project Flutter membantu saya menyelesaikan
                                        aplikasi pertama saya yang sudah publish di Play Store."</p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <img src="assets/images/testimonial/testimonial-2.jpg" alt="Author">
                                        </div>
                                        <div class="rbt-author-info">
                                            <h4 class="title">Sarah Fitriani</h4>
                                            <span class="subtitle">Mobile Developer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-5">
                            <!-- Additional Information Section -->
                            <div class="rbt-accordion-area rbt-section-gap bg-color-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="section-title text-center">
                                                <h2 class="title">Frequently Asked Questions</h2>
                                                <p class="description mt--20">Find answers to common questions about our
                                                    programs</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-5 mt--20">
                                        <div class="col-lg-6">
                                            <div class="rbt-accordion-style accordion">
                                                <div class="accordion" id="faqAccordion">
                                                    <!-- FAQ Item 1 -->
                                                    <div class="accordion-item card">
                                                        <h2 class="accordion-header card-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Bagaimana sistem pembayarannya?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body card-body">
                                                                Pembayaran bisa dilakukan via transfer bank atau e-wallet.
                                                                Setelah pembayaran dikonfirmasi, Anda akan mendapatkan akses
                                                                ke kelas.
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- FAQ Item 2 -->
                                                    <div class="accordion-item card">
                                                        <h2 class="accordion-header card-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Apakah ada garansi uang kembali?
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                                            <div class="accordion-body card-body">
                                                                Kami menawarkan garansi 7 hari uang kembali jika Anda tidak
                                                                puas dengan kualitas pembelajaran setelah mengikuti sesi
                                                                pertama.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                                                <h3 class="title mb--20">Need More Information?</h3>
                                                <form class="max-width-auto" action="/contact" method="POST">
                                                    <!-- Nama -->
                                                    <div class="form-group">

                                                        <input type="text" id="name" name="name"
                                                            class="form-control" placeholder="Enter your name">
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="form-group">

                                                        <input type="email" id="email" name="email"
                                                            class="form-control" placeholder="Enter your email">
                                                    </div>

                                                    <!-- Program -->
                                                    <div class="col-12">
                                                        <div>
                                                            <select
                                                                class="form-select bg-white-10 border-white-20 text-white option-bg"
                                                                id="program" name="program" required>
                                                                <option value="" selected disabled
                                                                    class="option-bg">-- Choose a Program --</option>
                                                                <option value="private-class" class="option-bg">🎯 Private
                                                                    Class</option>
                                                                <option value="corporate" class="option-bg">🏢 Mentoring
                                                                    Project Class</option>
                                                            </select>
                                                            <!-- <label for="program" class="text-white-70">Program Interest</label> -->
                                                            <div class="invalid-feedback">
                                                                Please select a program
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>


                                                    <!-- Message -->
                                                    <div class="form-group">
                                                        <textarea name="message" id="message" class="form-control pt--2" rows="4"
                                                            placeholder="Write your message here..."></textarea>
                                                    </div>

                                                    <!-- Submit Button -->
                                                    <div class="form-submit-group mt--5">
                                                        <button type="submit"
                                                            class="rbt-btn btn-gradient hover-icon-reverse w-100">
                                                            <span class="icon-reverse-wrapper">
                                                                <span class="btn-text">Send Message</span>
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span>
                                                                <span class="btn-icon"><i
                                                                        class="feather-arrow-right"></i></span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endsection
