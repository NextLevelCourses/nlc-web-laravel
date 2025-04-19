@extends('landing.layouts.Master')

@section('title', 'Register')

@section('content')

    <a class="close_side_menu" href="javascript:void(0);"></a>

    <!-- Start Breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center pt--70">
                        <h2 class="title">Login & Register</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li><div class="icon-right"><i class="feather-chevron-right"></i></div></li>
                            <li class="rbt-breadcrumb-item active">Login & Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Login/Register Section -->
    <div class="rbt-elements-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row gy-5 row--30">
                
                <!-- Login Form -->
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Login</h3>
                        <form id="loginForm">
                            <div class="form-group">
                                <input name="username" type="text" required />
                                <label>Username or email *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" required />
                                <label>Password *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <a class="rbt-btn-link" href="#" data-bs-toggle="modal" data-bs-target="#passwordResetModal">Forgot password?</a>
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

                            <div id="loginAlert" class="alert alert-success mt-3" style="display:none;">
                                Login successful! Redirecting...
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Register Form -->
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Register</h3>
                        <form id="registerForm">
                            <div class="form-group">
                                <input name="register_email" type="email" required />
                                <label>Email address *</label>
                                <span class="focus-border"></span>
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
                                <p class="small text-muted">We'll send you a registration link to complete your account setup</p>
                            </div>

                            <div id="registerAlert" class="alert alert-info mt-3" style="display:none;">
                                Registration successful! Please check your email to confirm.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Login/Register Section -->
<!-- Forgot Password Modal -->
<div class="modal fade" id="passwordResetModal" tabindex="-1" aria-labelledby="passwordResetLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                <h3 class="title">Reset Password</h3>
                <form id="resetPasswordForm">
                    <div class="form-group">
                        <input name="reset_email" id="reset_email" type="email" required />
                        <label for="reset_email">Email address *</label>
                        <span class="focus-border"></span>
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


@endsection
