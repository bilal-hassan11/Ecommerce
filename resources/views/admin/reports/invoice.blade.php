@extends('layouts.admin')

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Invoice
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item active">Invoice</li>
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
                                <h5>Invoice List</h5>
                            </div>
                            <div class="card-body">
                                <div id="basicScenario" class="product-list"></div>
                            </div>
                            <section>
                                <div class="container">
                                    <div class="row">
                                        
                                        <div class="col-md-4">
                                            <div class="card profile-card-1">
                                                <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                                <img src="https://randomuser.me/api/portraits/women/20.jpg" alt="profile-image" class="profile"/>
                                                <div class="card-content">
                                                <h2>Savannah Fields<small>Engineer</small></h3>
                                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                                </div>
                                            </div>
                                            <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
@endsection