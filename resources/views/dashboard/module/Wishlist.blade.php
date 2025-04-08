@extends('dashboard.layouts.Master')

@section('title', 'Detail Course')

@section('content')
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--25 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Wishlist</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="index.html">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="wishlist_area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Action</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/1.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Miracle Morning</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-addtocart">
                                            <button class="rbt-btn btn-gradient">add to cart</button>
                                        </td>
                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/7.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Happy Strong</a></td>
                                        <td class="pro-price"><span>$275.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="2"></div>
                                        </td>
                                        <td class="pro-addtocart"><button class="rbt-btn btn-gradient">add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/3.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Rich Dad Poor Dad</a></td>
                                        <td class="pro-price"><span>$295.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-addtocart"><button class="rbt-btn btn-gradient">add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img src="assets/images/product/4.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">Momentum Theorem</a></td>
                                        <td class="pro-price"><span>$110.00</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </td>
                                        <td class="pro-addtocart"><button class="rbt-btn btn-gradient">add to cart</button></td>
                                        <td class="pro-remove"><a href="#"><i class="feather-x"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
@endsection