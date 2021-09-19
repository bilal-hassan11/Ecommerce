@extends('layouts.frontlayouts.admin')

@section('content')


    <!-- Home slider -->
    <section class="p-0 layout-7">
        <div class="slide-1 home-slider">
            <div>
                <div class="home text-left p-left">
                    <img src="{{asset('front_assets')}}/images/home-banner/14.jpg" alt="" class="bg-img blur-up lazyload">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="slider-contain">
                                    <div>
                                        <h4>10% discount</h4>
                                        <h1>light up your home</h1><a href="#" class="btn btn-solid">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- section start -->
    <section class="section-b-space layout7-product">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/1.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/2.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-12 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/3.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-0">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{asset('front_assets')}}/images/furniture/4.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view"
                                    title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="details-product">
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-12 p-0">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#"><img src="{{asset('front_assets')}}/images/furniture/5.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal" data-target="#quick-view"
                                    title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="details-product">
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 p-0">
                    <div class="row m-0">
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/6.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/7.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/8.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6 p-0">
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-page(no-sidebar).html"><img src="{{asset('front_assets')}}/images/furniture/9.jpg" class="img-fluid blur-up lazyload" alt=""></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                                class="ti-shopping-cart"></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#" data-toggle="modal"
                                            data-target="#quick-view" title="Quick View"><i
                                                class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                </div>
                                <div class="details-product">
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section start -->
@endsection