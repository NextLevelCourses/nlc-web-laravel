@extends('dashboard.layouts.Master')

@section('title', 'Cart')

@section('content')
 <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center pt--10">
                        <h2 class="title">Your Learning Cart is Ready!</h2>
                        <div class="slider-btn rbt-button-group justify-content-center pt--40">
                        <a class="rbt-btn btn-gradient hover-icon-reverse" href="{{ route('Dashboard.Home') }}">
                        <span class="icon-reverse-wrapper">
                        <span class="btn-text">Add Course</span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                        </span>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-cart-area bg-color-white pt--20">
        <div class="cart_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="#">
                            <!-- Cart Table -->
                            <div class="cart-table table-responsive mb--60">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Image</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                        <tbody>
    <!-- Item 1 -->
    <tr>
        <td class="pro-thumbnail">
            <a href="#"><img src="{{ asset('assets/images/product/1.jpg') }}" alt="Miracle Morning"></a>
        </td>
        <td class="pro-title">
            <a href="#">Miracle Morning</a>
        </td>
        <td class="pro-price">
            <span>$48.00</span>
        </td>
        <td class="pro-quantity">
            <div class="pro-qty">
                <input type="text" value="1" class="form-control text-center">
            </div>
        </td>
        <td class="pro-subtotal">
            <span>$100.00</span>
        </td>
        <td class="pro-remove">
            <a href="#"><i class="feather-x text-danger"></i></a>
        </td>
    </tr>

    <!-- Item 2 -->
    <tr>
        <td class="pro-thumbnail">
            <a href="#"><img src="{{ asset('assets/images/product/7.jpg') }}" alt="Happy Strong"></a>
        </td>
        <td class="pro-title">
            <a href="#">Happy Strong</a>
        </td>
        <td class="pro-price">
            <span>$100.00</span>
        </td>
        <td class="pro-quantity">
            <div class="pro-qty">
                <input type="text" value="2" class="form-control text-center">
            </div>
        </td>
        <td class="pro-subtotal">
            <span>$120.00</span>
        </td>
        <td class="pro-remove">
            <a href="#"><i class="feather-x text-danger"></i></a>
        </td>
    </tr>

    <!-- Item 3 -->
    <tr>
        <td class="pro-thumbnail">
            <a href="#"><img src="{{ asset('assets/images/product/3.jpg') }}" alt="Rich Dad Poor Dad"></a>
        </td>
        <td class="pro-title">
            <a href="#">Rich Dad Poor Dad</a>
        </td>
        <td class="pro-price">
            <span>$59.00</span>
        </td>
        <td class="pro-quantity">
            <div class="pro-qty">
                <input type="text" value="1" class="form-control text-center">
            </div>
        </td>
        <td class="pro-subtotal">
            <span>$150.00</span>
        </td>
        <td class="pro-remove">
            <a href="#"><i class="feather-x text-danger"></i></a>
        </td>
    </tr>

    <!-- Item 4 -->
    <tr>
        <td class="pro-thumbnail">
            <a href="#"><img src="{{ asset('assets/images/product/4.jpg') }}" alt="Momentum Theorem"></a>
        </td>
        <td class="pro-title">
            <a href="#">Momentum Theorem</a>
        </td>
        <td class="pro-price">
            <span>$250.00</span>
        </td>
        <td class="pro-quantity">
            <div class="pro-qty">
                <input type="text" value="1" class="form-control text-center">
            </div>
        </td>
        <td class="pro-subtotal">
            <span>$270.00</span>
        </td>
        <td class="pro-remove">
            <a href="#"><i class="feather-x text-danger"></i></a>
        </td>
    </tr>
</tbody>
</table>
</div>
</form>
                        <div class="row g-5">
                            <div class="col-lg-6 col-12">
                                
                                <!-- Discount Coupon -->
                                <div class="discount-coupon edu-bg-shade">
                                    <div class="section-title text-start">
                                        <h4 class="title mb--30">Discount Coupon Code</h4>
                                    </div>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6 col-12 mb--25">
                                                <input type="text" placeholder="Coupon Code">
                                            </div>
                                            <div class="col-md-6 col-12 mb--25">
                                                <button class="rbt-btn btn-gradient hover-icon-reverse btn-sm">
                                                    <span class="icon-reverse-wrapper">
                                                        <span class="btn-text">Apply Code</span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Cart Summary -->

                            <div class="col-lg-5 offset-lg-1 col-12">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">
                                        <div class="section-title text-start">
                                            <h4 class="title mb--30">Cart Summary</h4>
                                        </div>
                                        <p>Sub Total <span>$1250.00</span></p>
                                        <p>Shipping Cost <span>$00.00</span></p>
                                        <h2>Grand Total <span>$1250.00</span></h2>
                                    </div>

                                    <div class="cart-submit-btn-group">
                                        <div class="single-button w-50">
                                            <button class="rbt-btn btn-gradient rbt-switch-btn rbt-switch-y w-100">
                                                <span data-text="Checkout">Checkout</span>
                                            </button>
                                        </div>
                                        <div class="single-button w-50">
                                            <button class="rbt-btn rbt-switch-btn rbt-switch-y w-100 btn-border">
                                                <span data-text="Update Cart">Update Cart</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
