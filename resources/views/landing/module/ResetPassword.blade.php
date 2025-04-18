@extends('landing.layouts.Master')

@section('title', 'Reset Password')

@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center pt--70">
                        <h2 class="title">Reset Password</h2>
                        <ul class="page-list"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row justify-content-center gy-5 row--30">
                <!-- Login Form -->
                <div class="col-lg-6 col-md-8">
                    <div class="rbt-contact-form contact-form-style-1">
                        <h3 class="title text-center mb-4">Reset Password</h3>
                        <form id="resetPasswordForm">
                            <div class="form-group">
                                <input name="new_password" type="password" required />
                                <label>New Password</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="form-group mt-4">
                                <input name="confirm_password" type="password" required />
                                <label>Confirm Password</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="form-submit-group mt-5">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Reset Password</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById("resetPasswordForm").addEventListener("submit", function(e) {
        e.preventDefault(); // Mencegah form submit biasa

        var newPassword = document.querySelector('input[name="new_password"]').value;
        var confirmPassword = document.querySelector('input[name="confirm_password"]').value;

        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`,
            customClass: {
                popup: 'swal-popup-large', // Menggunakan class CSS kustom
                title: 'swal-title-large', // Mengubah ukuran judul
                content: 'swal-content-large' // Mengubah ukuran konten
            },
            // Mengubah ukuran popup melalui 'width' dan 'padding'
            width: '500px',  // Menyesuaikan lebar popup
            padding: '50px',  // Menyesuaikan padding di dalam popup
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire("Saved!", "", "success");
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    });
</script>

<style>
    /* CSS kustom untuk memperbesar teks dalam popup Swal */
    .swal-popup-large {
        font-size: 1.5rem; /* Ukuran font untuk konten popup */
    }

    .swal-title-large {
        font-size: 2rem; /* Ukuran font untuk judul */
        font-weight: bold; /* Menebalkan judul */
    }

    .swal-content-large {
        font-size: 1.25rem; /* Ukuran font untuk konten */
    }
</style>

@endsection
