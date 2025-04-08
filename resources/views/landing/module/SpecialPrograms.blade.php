@extends('landing.layouts.Master')

@section('title', 'Detail Blog')

@section('content')

    <!-- Private Programs -->
     <div class="container pt--120">
        <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Private Class</h2>
                    </div>
        </div>
        
    <div class="container">
        <div class="row g-5 mt--1">  <!-- Tambahkan mt-3 jika perlu -->
            <div class="col-lg-3 col-md-6">
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
                        <h4 class="rbt-card-title"><a href="#">Laravel Private Class</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Project Based</li>
                            <li><i class="feather-users"></i>Up to 10 Participants</li>
                            <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>


                        </ul>
                        <p class="rbt-card-text">Learn by building real-world apps with professional mentors.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 500.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copy and customize below for more cards -->

            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-02.jpg" alt="Fullstack">
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count">(22 Reviews)</span>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Fullstack Coaching</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Project Based</li>
                            <li><i class="feather-users"></i>Up to 8 Participants</li>
                            <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>
                        </ul>
                        <p class="rbt-card-text">Dapatkan pembelajaran end-to-end dari mentor berpengalaman.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 650.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-03.jpg" alt="UIUX">
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
                        <h4 class="rbt-card-title"><a href="#">Design UI/UX Private</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Project Based</li>
                            <li><i class="feather-users"></i>Up to 5 Participants</li>
                            <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>
                        </ul>
                        <p class="rbt-card-text">Kuasai design tools dan mindset UX dengan mentor profesional.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 400.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-04.jpg" alt="Flutter">
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-count">(12 Reviews)</span>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Flutter Mobile Dev</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Project Based</li>
                            <li><i class="feather-users"></i>Up to 6 Participants</li>
                            <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>
                        </ul>
                        <p class="rbt-card-text">Bangun aplikasi mobile multiplatform dari nol hingga upload ke store.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 600.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- =================================== -->

    <!-- Section Title -->
    <!-- Private Programs -->
     <div class="container pt--20">
        <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Private Class</h2>
                    </div>
        </div>
     <div class="container pt--20">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
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
                        <h4 class="rbt-card-title"><a href="#">Bahas Soal UTBK</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Private Programs</li>
                            <li><i class="feather-users"></i>Up to 3 Participants</li>
                            <li><i class="feather-clock"></i> 3x per minggu selama 2 bulan</li>

                        </ul>
                        <p class="rbt-card-text">Learn by building real-world apps with professional mentors.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 500.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copy and customize below for more cards -->

            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-02.jpg" alt="Fullstack">
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="rating-count">(22 Reviews)</span>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Fisika Kelas 3 SMA</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Private Programs</li>
                            <li><i class="feather-users"></i>Up to 3 Participants</li>
                            <li><i class="feather-clock"></i> 3x per minggu selama 2 bulan</li>

                        </ul>
                        <p class="rbt-card-text">Dapatkan pembelajaran end-to-end dari mentor berpengalaman.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 650.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-03.jpg" alt="UIUX">
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
                        <h4 class="rbt-card-title"><a href="#">Persiapan CPNS 2026</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Private Programs</li>
                            <li><i class="feather-users"></i>Up to 3 Participants</li>
                            <li><i class="feather-clock"></i> 3x per minggu selama 2 bulan</li>

                        </ul>
                        <p class="rbt-card-text">Kuasai design tools dan mindset UX dengan mentor profesional.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 400.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="rbt-card variation-01 rbt-hover">
                    <div class="rbt-card-img">
                        <img src="assets/images/course/course-online-04.jpg" alt="Flutter">
                    </div>
                    <div class="rbt-card-body">
                        <div class="rbt-card-top">
                            <div class="rbt-review">
                                <div class="rating">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="rating-count">(12 Reviews)</span>
                            </div>
                        </div>
                        <h4 class="rbt-card-title"><a href="#">Flutter Mobile Dev</a></h4>
                        <ul class="rbt-meta">
                            <li><i class="feather-layers"></i>Private Programs</li>
                            <li><i class="feather-users"></i>Up to 3 Participants</li>
                            <li><i class="feather-clock"></i> 3x/minggu • 2 bulan • 90 menit/sesi</li>

                        </ul>
                        <p class="rbt-card-text">Bangun aplikasi mobile multiplatform dari nol hingga upload ke store.</p>
                        <div class="rbt-card-bottom">
                            <div class="rbt-price"><span>Rp. 600.000</span></div>
                            <a class="rbt-btn-link" href="#">Daftar <i class="feather-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection