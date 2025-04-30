@extends('landing.layouts.Master')

@section('title', 'Authentication')

@section('content')
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center pt--70">
                        <h2 class="title">Login & Register</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Login & Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            @session('success')
                <div class="flash-data-success" data-flashdata-success="{{ $value }}"></div>
            @endsession
            @session('error')
                <div class="flash-data-error" data-flashdata-error="{{ $value }}"></div>
            @endsession
            <div class="row gy-5 row--30">
                <!-- Login Form -->
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Login</h3>
                        <form class="max-width-auto" method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="form-group">
                                <input name="umail" type="text" class=" @error('umail') is-invalid @enderror" />
                                <label>Username or email *</label>
                                <span class="focus-border"></span>
                                @error('umail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class=" @error('password') is-invalid @enderror" />
                                <label>Password *</label>
                                <span class="focus-border"></span>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        <a class="rbt-btn-link" href="#" data-bs-toggle="modal"
                                            data-bs-target="#passwordResetModal">Forgot password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Log In</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Register Form -->
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Register</h3>
                        <form class="max-width-auto" action="{{ route('auth.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="text" class=" @error('email') is-invalid @enderror" />
                                <label>Email address *</label>
                                <span class="focus-border"></span>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Register</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                            <div class="mt-3 text-center">
                                <p class="small text-muted">We'll send you a registration link to complete your account
                                    setup</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forgot Password Modal -->
        <div class="modal fade" id="passwordResetModal" tabindex="-1" aria-labelledby="passwordResetLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <!-- Modal Content -->
                <div class="modal-content">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Reset Password</h3>
                        <form id="resetPasswordForm" action="{{ route('auth.forgot.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="reset_email" id="reset_email" type="text"
                                    class="@error('reset_email') is-invalid @enderror" />
                                <label for="reset_email">Email address *</label>
                                <span class="focus-border"></span>
                                @error('reset_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Send Reset Link</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>

                            <div class="mt-3 text-center">
                                <p class="small text-muted">We'll send you an email with a link to reset your password</p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Modal Content -->
            </div>
        </div>
        <!-- End Forgot Password Modal -->
    </div>
@endsection

@push('js')
    <script src="{{ asset('assets/sweetalert2-11.19.1/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/sweetalert2-11.19.1/dist/sweetalert2.conf.js') }}"></script>
@endpush
