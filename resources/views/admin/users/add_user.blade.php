
<?php
ini_set('session.cache_limiter', 'private');
?>            <!-- Container-fluid starts-->
<style>
body {
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;
}

.bootstrap-select .bs-ok-default::after {
    width: 0.3em;
    height: 0.6em;
    border-width: 0 0.1em 0.1em 0;
    transform: rotate(45deg) translateY(0.5rem);
}

.btn.dropdown-toggle:focus {
    outline: none !important;
}
</style>
@extends('layouts.admin')

@section('content')
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
                                    <li class="nav-item"><a class="nav-link" id="permission-tabs" data-toggle="tab" href="#permission" role="tab" aria-controls="permission" aria-selected="false" data-original-title="" title="">Permission</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form method="POST" action="{{ route('admin.user.save') }}" enctype="multipart/form-data" >
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
                                                    <input class="number_id form-control col-xl-8 col-md-7" style="padding:15px;" id="phone" name="phone"  type="number" >
                                                    @if($errors->has('phone'))
                                                        <div style="color:red;" class="error">{{ $errors->first('phone') }}</div>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-xl-3 col-md-4"><span>*</span> NIC</label>
                                                    <input class="form-control col-xl-8 col-md-7" minlength="15" id="nic" name="nic" id="nic_number" type="number" >
                                                    @if($errors->has('nic'))
                                                        <div style="color:red;" class="error">{{ $errors->first('nic') }}</div>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-xl-3 col-md-4"><span>*</span> Skills</label>
                                                    <select multiple data-style="bg-white rounded-pill px-4 py-3 shadow-sm" name="skills[]" class="selectpicker w-100">
                                                        <option value="salesman">Salesman</option>
                                                        <option value="accountant">Accountant</option>
                                                        <option value="supplier">Supplier</option>
                                                        <option value="designer">Designer</option>
                                                        <option value="marketing">Marketing</option>
                                                    </select>
                                                    @if($errors->has('skills'))
                                                        <div style="color:red;" class="error">{{ $errors->first('skills') }}</div>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-xl-3 col-md-4" ><span>*</span> Experience</label>
                                                    <select name="experience" style="width:580px; mt:-35px; padding:6px; float:right; margin-left:220px;" >
                                                        <option value="beginner">Beginner</option>
                                                        <option value="less than year">less than one year</option>
                                                        <option value="1 year">One year</option>
                                                        <option value="2 year">Two year</option>
                                                        <option value="1 year">Three year</option>
                                                        <option value="3 or more year">more than three year</option>
                                                    </select>
                                                    @if($errors->has('experience'))
                                                        <div style="color:red;" class="error">{{ $errors->first('experience') }}</div>
                                                    @endif
                                                </div>
                                                <div class="form-group row">
                                                    <label  class="col-xl-3 col-md-4"><span>*</span> Address </label>
                                                    <textarea class="ckeditor form-control" type="text" name="address"></textarea>
                                                    @if($errors->has('address'))
                                                        <div style="color:red;" class="error">{{ $errors->first('address') }}</div>
                                                    @endif
                                                </div>
                                                <input type="hidden" name="user_id" value="">
                                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                                    <li class="nav-item"><a class="nav-link" id="permission-tabs" data-toggle="tab" href="#permission" role="tab" aria-controls="permission" aria-selected="false" data-original-title="" title="">Next</a></li>
                                                </ul>
                                        </div>
                                        <div class="tab-pane fade" id="permission" role="tabpanel" aria-labelledby="permission-tabs">
                                            
                                                <div class="permission-block">
                                                    <div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Product Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani1">
                                                                        <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani2">
                                                                        <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani3">
                                                                        <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani1">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani4">
                                                                        <input class="radio_animated" id="edo-ani4" type="radio" name="rdo-ani1" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Product</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani5">
                                                                        <input class="radio_animated" id="edo-ani5" type="radio" name="rdo-ani2">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani6">
                                                                        <input class="radio_animated" id="edo-ani6" type="radio" name="rdo-ani2" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani7">
                                                                        <input class="radio_animated" id="edo-ani7" type="radio" name="rdo-ani3">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani8">
                                                                        <input class="radio_animated" id="edo-ani8" type="radio" name="rdo-ani3" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attribute-blocks">
                                                        <h5 class="f-w-600 mb-3">Category Related permition </h5>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Add Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani9">
                                                                        <input class="radio_animated" id="edo-ani9" type="radio" name="rdo-ani4">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani10">
                                                                        <input class="radio_animated" id="edo-ani10" type="radio" name="rdo-ani4" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Update Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani11">
                                                                        <input class="radio_animated" id="edo-ani11" type="radio" name="rdo-ani5">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani12">
                                                                        <input class="radio_animated" id="edo-ani12" type="radio" name="rdo-ani5" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label>Delete Category</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                                    <label class="d-block" for="edo-ani13">
                                                                        <input class="radio_animated" id="edo-ani13" type="radio" name="rdo-ani6">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block" for="edo-ani14">
                                                                        <input class="radio_animated" id="edo-ani14" type="radio" name="rdo-ani6" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xl-3 col-sm-4">
                                                                <label class="mb-0 sm-label-radio">Apply discount</label>
                                                            </div>
                                                            <div class="col-xl-9 col-sm-8">
                                                                <div class="form-group m-checkbox-inline custom-radio-ml d-flex radio-animated pb-0">
                                                                    <label class="d-block mb-0" for="edo-ani15">
                                                                        <input class="radio_animated" id="edo-ani15" type="radio" name="rdo-ani7">
                                                                        Allow
                                                                    </label>
                                                                    <label class="d-block mb-0" for="edo-ani16">
                                                                        <input class="radio_animated" id="edo-ani16" type="radio" name="rdo-ani7" checked="">
                                                                        Deny
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                                    <li class="nav-item"><a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Back</a></li>
                                                </ul>
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    }); 

    $("#files").change(function() {
        filename = this.files[0].name
        console.log(filename);
    });
$(function(){

    @if(Session::has('success'))
        Swal.fire({
        icon: 'success',
        title: 'Great!',
        text: '{{ Session::get("success") }}'
    })
    @endif
});

$(function(){

    @if(Session::has('info'))
    Swal.fire({
        icon: 'info',
        title: 'Oops...',
        text: '{{ Session::get("info") }}'
    })
    @endif
});

$(function(){

    @if(Session::has('warning'))
    Swal.fire({
        icon: 'warning',
        title: 'Oops...',
        text: '{{ Session::get("warning") }}'
    })
    @endif
});

$(function(){
@if(Session::has('error'))
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ Session::get("error") }}'
    })
    @endif
});

$(function () {
    $('.selectpicker').selectpicker();
});

</script>

<script>

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