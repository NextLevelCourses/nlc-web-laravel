@extends('landing.layouts.Master')

@section('title', 'FAQs')

@section('content')
<!-- Start Accordion Area -->
<div class="rbt-testimonial-area bg-color-extra2 rbt-section-gap overflow-hidden pt--20">
    <div class="rbt-accordion-area accordion-style-1 bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Accordion Section -->
                <div class="col-lg-6 order-2 order-lg-1 mt_md--40 mt_sm--40">
                    <div class="rbt-accordion-style accordion">
                        <div class="section-title text-start">
                            <span class="subtitle bg-pink-opacity">FAQ</span>
                            <h2 class="title">Punya Pertanyaan tentang <br /> Next Level Course?</h2>
                            <p class="description has-medium-font-size mt--20 mb--40">
                                <strong>Next Level Course</strong> adalah platform pembelajaran inovatif yang mempertemukan guru-guru terbaik dengan masyarakat luas. 
                                Kami menyediakan program-program aplikatif yang dirancang untuk mencerdaskan kehidupan bangsa.
                            </p>
                        </div>

                        <div class="rbt-accordion-style rbt-accordion-02 accordion">
                            <div class="accordion" id="accordionExampleb2">

                                <!-- FAQ 1 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo1" aria-expanded="true"
                                            aria-controls="collapseTwo1">
                                            Apa itu Next Level Course dan bagaimana cara kerjanya?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo1" class="accordion-collapse collapse show"
                                        aria-labelledby="headingTwo1" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            Next Level Course adalah platform belajar online yang memungkinkan siapa saja untuk belajar dari para ahli dan praktisi terbaik. Program dirancang langsung oleh pengajar, dan kamu bisa memilih materi sesuai minat serta kebutuhanmu.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 2 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo2"
                                            aria-expanded="false" aria-controls="collapseTwo2">
                                            Bagaimana cara mendapatkan dukungan atau bantuan?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo2" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            Jika kamu butuh bantuan atau ada pertanyaan, cukup kirim email ke 
                                            <a href="mailto:support@nextlevelcourse.id">support@nextlevelcourse.id</a>. 
                                            Tim kami akan membantu secepat mungkin.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 3 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo3"
                                            aria-expanded="false" aria-controls="collapseTwo3">
                                            Apakah program akan terus diperbarui?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo3" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo3" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            Ya, kami secara berkala memperbarui dan menambahkan program baru sesuai kebutuhan pengguna dan perkembangan zaman. Semua pembaruan tersedia tanpa biaya tambahan.
                                        </div>
                                    </div>
                                </div>

                                <!-- FAQ 4 -->
                                <div class="accordion-item card">
                                    <h2 class="accordion-header card-header" id="headingTwo4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo4"
                                            aria-expanded="false" aria-controls="collapseTwo4">
                                            Siapa saja yang bisa membuat program di platform ini?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo4" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo4" data-bs-parent="#accordionExampleb2">
                                        <div class="accordion-body card-body">
                                            Siapa saja yang punya keahlian, pengalaman, dan semangat berbagi pengetahuan—baik guru, dosen, maupun profesional—bisa mendaftar sebagai kreator. Kami akan mendukung proses kurasi dan penerbitan programnya.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="thumbnail rbt-image-gallery-1 mb--80 text-end">
                        <img class="image-1 rbt-radius" data-parallax='{"x": 0, "y": 30}'
                            src="assets/images/about/about-01.jpg" alt="Education Images">
                        <img class="image-2 rbt-radius" data-parallax='{"x": 0, "y": 80}'
                            src="assets/images/about/about-10.jpg" alt="Education Images">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Separator -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
</div>
<!-- End Accordion Area -->
@endsection
