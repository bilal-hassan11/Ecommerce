@extends('layouts.admin')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Product List
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Product List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row products-admin ratio_asos">
                    @foreach($Products as $product)
                    <div class="col-xl-3 col-sm-6">
                        <div class="card">
                            <div class="card-body product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img src="{{ asset('uploads') }}/digital_product/{{ $product->image }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        <div class="product-hover">
                                            <ul>
                                                <li>
                                                    <button class="btn" type="button" data-original-title="" title=""><i class="ti-pencil-alt"></i></button>
                                                </li>
                                                <li>
                                                    <button class="btn" type="button" data-toggle="modal" data-target="#exampleModalCenter" data-original-title="" title=""><i class="ti-trash"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="#">
                                        <strong><h3 style="color:green;">{{ $product->title }}</h3></strong>
                                    </a>
                                    <h4>{{ $product->price }} <del>$600.00</del></h4>
                                    <ul class="color-variant">
                                        <li class="bg-light0"></li>
                                        <li class="bg-light1"></li>
                                        <li class="bg-light2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Container-fluid Ends-->
            &nbsp<span>{{ $Products->links() }}</span>&nbsp
        </div>

        
@endsection