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
            <div class="row gy-5 row--30">
                <!-- Login Form -->
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Login</h3>
                        <form class="max-width-auto" method="POST" action="{{ route('auth.login') }}">
                            @csrf
                            <div class="form-group">
                                <input name="umail" type="text"
                                    class="form-control @error('umail') is-invalid @enderror" />
                                <label>Username or email *</label>
                                <span class="focus-border"></span>
                                @error('umail')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" />
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
                        @session('success')
                            <div class="alert alert-success" role="alert">
                                {{ $message }}
                            </div>
                        @endsession
                        <h3 class="title">Register</h3>
                        <form class="max-width-auto" action="{{ route('auth.register') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" />
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

        <!-- Enhanced Password Reset Modal -->
        <div class="modal fade" id="passwordResetModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content"
                    style="border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.15);border:none">
                    <div class="modal-header" style="background:#f8f9fa;border-bottom:1px solid #eee;padding:20px 25px">
                        <h5 class="modal-title" style="font-weight:600;color:#333">{{ __('Forgot Password') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            style="background-size:60%"></button>
                    </div>
                    <div class="modal-body" style="padding:25px">
                        <div class="text-center mb-4">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" style="color:#6c757d">
                                <path
                                    d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V13C20 11.8954 19.1046 11 18 11H6C4.89543 11 4 11.8954 4 13V19C4 20.1046 4.89543 21 6 21ZM16 11V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V11H16Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="mb-0" style="color:#6c757d">Enter your email to receive reset instructions</p>
                        </div>

                        <form id="passwordResetForm">
                            <div class="form-group mb-4">
                                <!-- <label for="resetEmail" class="form-label" style="display:block;margin-bottom:8px;font-weight:500;color:#555">Email Address</label> -->
                                <input type="email" class="form-control" id="resetEmail" required
                                    placeholder="your@email.com"
                                    style="width:100%;padding:12px 15px;border:1px solid #ddd;border-radius:8px;transition:all 0.3s">
                            </div>
                            <button type="submit" class="rbt-btn btn-gradient w-100"
                                style="padding:12px; border-radius:8px; font-weight:500; border:none; cursor:pointer; display: flex; align-items: center; justify-content: center;">
                                Send Reset Link
                            </button>

                        </form>
                    </div>
                    <div class="modal-footer"
                        style="background:#f8f9fa;border-top:1px solid #eee;padding:15px 25px;justify-content:center">
                        <p class="small mb-0" style="color:#6c757d">We'll send a password reset link to your email</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
