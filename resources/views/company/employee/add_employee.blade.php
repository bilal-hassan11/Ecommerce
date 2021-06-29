@extends('layouts.companylayouts.admin')

@section('content')
<?php
ini_set('session.cache_limiter', 'private');
?>            <!-- Container-fluid starts-->

            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Employee
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Employees </li>
                                <li class="breadcrumb-item active">Create Employee </li>
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
                                <h5> Add Employee</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                                </ul>
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form method="POST" action="{{ route('Company.employee.save') }}" enctype="multipart/form-data" class="ajaxForm">
                                            @Csrf
                                            <h4>Account Details</h4>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Full Name</label>
                                                <input class="form-control col-xl-8 col-md-7" id="full_name" name="full_name" type="text" >
                                                @if($errors->has('full_name'))
                                                  <div style="color:red;" class="error">{{ $errors->first('full_name') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Profile Pic</label>
                                                <input class="form-control col-xl-8 col-md-7" name="profile_pic" type="file" >
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                                <input class="form-control col-xl-8 col-md-7" id="email" name="email" type="text" >
                                                @if($errors->has('email'))
                                                    <div style="color:red;" class="error">{{ $errors->first('email') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                                <input class="form-control col-xl-8 col-md-7" id="password" name="password" type="password" >
                                                @if($errors->has('password'))
                                                    <div style="color:red;" class="error">{{ $errors->first('password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Confirm Password</label>
                                                <input class="form-control col-xl-8 col-md-7" id="c_password" name="c_password" type="password" >
                                                @if($errors->has('c_password'))
                                                <div style="color:red;" class="error">{{ $errors->first('c_password') }}</div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4"><span>*</span> Phone</label>
                                                <input class="number_id form-control col-xl-8 col-md-7" id="phone" name="phone"  type="number" >
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
                                                <label  class="col-xl-3 col-md-4"><span>*</span> NIC</label>
                                                <input class="form-control col-xl-8 col-md-7" minlength="15" id="nic" name="nic" id="nic_number" type="number" >
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
                                            
                                            <div class="pull-right">
                                                <button type="submit" id="save-button" value="add_user" class="btn btn-primary">Save</button>
                                            </div>
                                            <input type="hidden" name="user_id" value="">
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


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">

$(document).ready(function () {
    $('.ckeditor').ckeditor();
}); 

$(function(){
     //$(".number_id").mask('099.099.099.099');
    $('#number_id').mask('0ZZZ-0ZZZZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
});


$(function(){
    // $("#ip").mask('099.099.099.099');
    $('#nic_number').mask('0ZZZZ-0ZZ0ZZZ-Z', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
});
</script>