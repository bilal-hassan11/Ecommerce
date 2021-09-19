@extends('layouts.frontlayouts.admin')

@section('content')


        <!-- Home Slider -->
        <section class="pt-0 padding-bottom-cls">
            <div class="slide-1 home-slider">
                <div>
                    <div class="home">
                        <img src="{{ asset('front_assets') }}'front_assets') }}/images/home-banner/15.jpg" alt="" class="bg-img blur-up lazyload">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-contain">
                                        <div>
                                            <h4>save 30%</h4>
                                            <h1>electronic</h1><a href="#" class="btn btn-outline btn-classic">shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home">
                        <img src="{{ asset('front_assets') }}/images/home-banner/16.jpg" alt="" class="bg-img blur-up lazyload">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-contain">
                                        <div>
                                            <h4>save upto 30%</h4>
                                            <h1>headphone</h1><a href="#" class="btn btn-outline btn-classic">shop
                                                now</a>
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


        <div class="layout-8-bg">


            <!-- collection banner -->
            <section class="banner-goggles ratio2_3">
                <div class="container-fluid">
                    <div class="row partition3">
                        <div class="col-md-4">
                            <a href="#">
                                <div class="collection-banner">
                                    <div class="img-part">
                                        <img src="{{ asset('front_assets') }}/images/electronics/sub1.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="contain-banner banner-3">
                                        <div>
                                            <h4>10% off</h4>
                                            <h2>speaker</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="collection-banner">
                                    <div class="img-part">
                                        <img src="{{ asset('front_assets') }}/images/electronics/sub2.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="contain-banner banner-3">
                                        <div>
                                            <h4>10% off</h4>
                                            <h2>earplug</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="collection-banner">
                                    <div class="img-part">
                                        <img src="{{ asset('front_assets') }}/images/electronics/sub3.jpg"
                                            class="img-fluid blur-up lazyload bg-img" alt="">
                                    </div>
                                    <div class="contain-banner banner-3">
                                        <div>
                                            <h4>50% off</h4>
                                            <h2>best deal</h2>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- collection banner end -->


            <!-- slider tab  -->
            <section class="section-b-space ratio_square">
                <div class="container-fluid">
                    <div class="title2">
                        <h4>new collection</h4>
                        <h2 class="title-inner2">trending products</h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="theme-tab layout7-product">
                                <ul class="tabs tab-title">
                                    <li class="current"><a href="tab-1.html">new arrival</a></li>
                                    <li class=""><a href="tab-2.html">featured</a></li>
                                    <li class=""><a href="tab-3.html">special</a></li>
                                </ul>
                                <div class="tab-content-cls">
                                    <div id="tab-1" class="tab-content active default">
                                        <div class="row no-slider">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/1.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00 <del>$600.00</del></h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/2.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/3.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/4.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/5.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/6.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/7.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/8.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00 <del>$600.00</del></h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/9.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/10.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/11.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/12.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
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
                                    <div id="tab-2" class="tab-content">
                                        <div class="row no-slider">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/13.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/14.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/15.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/16.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/17.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/1.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/2.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00 <del>$600.00</del></h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/3.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/4.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/5.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/6.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/7.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
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
                                    <div id="tab-3" class="tab-content">
                                        <div class="row no-slider">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/8.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/9.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}'front_assets') }}/images/electronics/pro/10.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/11.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/12.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/13.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/14.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/15.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/16.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/17.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/1.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00</h4>
                                                </div>
                                            </div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-page(no-sidebar).html"><img
                                                                src="{{ asset('front_assets') }}/images/electronics/pro/2.jpg"
                                                                class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                                    </div>
                                                    <div class="cart-info cart-wrap">
                                                        <button data-toggle="modal" data-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ti-shopping-cart"></i></button> <a
                                                            href="javascript:void(0)" title="Add to Wishlist"><i
                                                                class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                            data-toggle="modal" data-target="#quick-view"
                                                            title="Quick View"><i class="ti-search"
                                                                aria-hidden="true"></i></a> <a href="compare.html"
                                                            title="Compare"><i class="ti-reload"
                                                                aria-hidden="true"></i></a></div>
                                                </div>
                                                <div class="details-product">
                                                    <a href="product-page(no-sidebar).html">
                                                        <h6>Slim Fit Shirt</h6>
                                                    </a>
                                                    <h4>$500.00 <del>$600.00</del></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider tab end -->


        </div>
    </div>

@endsection
   