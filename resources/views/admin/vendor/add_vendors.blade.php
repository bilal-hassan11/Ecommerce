
<?php
ini_set('session.cache_limiter', 'private');
?>            <!-- Container-fluid starts-->

@extends('layouts.admin')

@section('content')
<style>
   .select2-container--default .select2-selection--multiple .select2-selection__choice__display{padding-left:15px}
</style>   
<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create User
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Users </li>
                                <li class="breadcrumb-item active">Create User </li>
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
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5> Add User</h5>
                            </div>
                            @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                                    
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form method="POST" action="{{ route('admin.vendor.save') }}" enctype="multipart/form-data" >
                                            @Csrf    
                                            <h4>Account Details</h4>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Full Name</label>
                                                <input class="form-control col-xl-8 col-md-7" style="padding:15px;" id="full_name" name="full_name" type="text" >
                                                @if($errors->has('full_name'))
                                                <div style="color:red;" class="error">{{ $errors->first('full_name') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Profile Pic</label>
                                                <input  class="form-control col-xl-8 col-md-7" style="padding:5px 25px 25px 25px;" name="profile_pic" type="file" >
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                <input class="form-control col-xl-8 col-md-7" style="padding:15px;" id="email" name="email" type="text" >
                                                @if($errors->has('email'))
                                                    <div style="color:red;" class="error">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                <input class="form-control col-xl-8 col-md-7" style="padding:15px;" id="password" name="password" type="password" >
                                                @if($errors->has('password'))
                                                    <div style="color:red;" class="error">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Confirm Password</label>
                                                <input class="form-control col-xl-8 col-md-7" style="padding:15px;" id="c_password" name="c_password" type="password" >
                                                @if($errors->has('c_password'))
                                                <div style="color:red;" class="error">{{ $errors->first('c_password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Phone</label>
                                                <input class="number_id form-control col-xl-8 col-md-7" style="padding:15px;" id="phone_number" name="phone"  type="text" >
                                                @if($errors->has('phone'))
                                                    <div style="color:red;" class="error">{{ $errors->first('phone') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> NIC</label>
                                                <input class="form-control col-xl-8 col-md-7" name="nic" id="nic_number" type="text" >
                                                @if($errors->has('nic'))
                                                    <div style="color:red;" class="error">{{ $errors->first('nic') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Address </label>
                                                <textarea class="ckeditor form-control" type="text" name="address"></textarea>
                                                @if($errors->has('address'))
                                                    <div style="color:red;" class="error">{{ $errors->first('address') }}</div>
                                                @endif
                                            </div>
                                            </div>
                                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection

@section('page-script')
    <script>
    $(document).on('change','#role',function(){
        var role = $('#role').val();
                
        $.ajax({
            url : "{{ url('permission') }}/"+role,
            type : "get",
            data : { role:role },
            success:function(data){
                $('#role-permission').empty().append(data);
            }
        });
    });

    
    //$(document).ready(function() {
    // $('#country-dropdown').on('change', function() {
    // var country_id = this.value;
    // console.log(country_id);
    // $("#state-dropdown").html('');
    // $.ajax({
    // url:"{{url('get-states-by-country')}}",
    // type: "POST",
    // data: {
    // country_id: country_id,
    // _token: '{{csrf_token()}}'
    // },
    // dataType : 'json',
    // success: function(result){
    // $.each(result.states,function(key,value){
    //     alert("changes the country value");
    // $("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    // });
    // $('#city-dropdown').html('<option value="">Select State First</option>'); 
    // }
    // });
    // });    
    // $('#state-dropdown').on('change', function() {
    // var state_id = this.value;
    // $("#city-dropdown").html('');
    // $.ajax({
    // url:"{{url('get-cities-by-state')}}",
    // type: "POST",
    // data: {
    // state_id: state_id,
    // _token: '{{csrf_token()}}'
    // },
    // dataType : 'json',
    // success: function(result){
    // $.each(result.cities,function(key,value){
    // $("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
    // });
    // }
    // });
    // });
    // });

    </script>
@endsection    