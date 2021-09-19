@extends('layouts.admin')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>List Coupons
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Coupons</li>
                                <li class="breadcrumb-item active">List Coupons</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>All Coupons</h5>
                            </div>
                            <div class="card-body">
                                <div id="batchDelete" class="category-table order-table"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <div class="table-responsive">
                <div id="basicScenario" class="product-physical">
                    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Discount Quantity</th>
                                <th>Product Type</th>
                                <th>status</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($coupons as $k => $coupon)
                                <tr>
                                    <td>{{ $k + 1 }}</td>
                                    <td>{{ $coupon->title }}</td>
                                    <td>{{ $coupon->discount_type}}</td>
                                    <td>{{ $coupon->product_type }}</td>
                                    
                                    @if ($coupon->coupon_status == "not_used")
                                            <td style="text-decoration-color: red;">Not Used</td>
                                    
                                        @elseif ($coupon->coupon_status == "used")
                                            <td style="text-decoration:blue;">Used</td>
                                        
                                        @else($coupon->coupon_status == "expired")
                                            <td style="text-decoration-color:red;">Expired</td>
                                        
                                    @endif
                                    
                                    <td>{{ $coupon->start_date }}</td>
                                    <td>{{ $coupon->end_date }}</td>
                                    <td> <a href=""><button type="button" style="color:red; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-danger">Delete</button></a>
                                            <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>   
        </div>
@endsection
