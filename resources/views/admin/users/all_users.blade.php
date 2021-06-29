@extends('layouts.admin')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>User List
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Users</li>
                                <li class="breadcrumb-item active">User List</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>User Details</h5>
                    </div>
                    
                    <section>
                    
                        <div class="container">
                            <div class="row">
                            @foreach($users as $user)
                                <div class="col-md-4">
                                    <div class="card profile-card-1">
                                        <img src="https://images.pexels.com/photos/946351/pexels-photo-946351.jpeg?w=500&h=650&auto=compress&cs=tinysrgb" alt="profile-sample1" class="background"/>
                                        <img src="{{ asset('uploads') }}/profile_pic/{{$user->profile_pic}}" alt="profile-image" class="profile" />
                                        <div class="card-content">
                                            <h2>{{$user->name}}<small>{{$user->skills}}</small></h3>
                                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a></div>
                                        </div>
                                    </div>
                                        <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
                                </div>
                            @endforeach           
                            </div>
                            
                        </div>
                       
                    </section>
                    
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
@endsection
