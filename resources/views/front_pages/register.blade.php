@extends('layouts.frontlayouts.admin')

@section('content')
<!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>create account</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">create account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="register-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>create account</h3>
                    <div class="theme-card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form class="theme-form" action="{{ route('front.create') }}" method="Post" enctype="multipart/form-data">
                            @Csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name" >
                                    @if($errors->has('full_name'))
                                        <div style="color:red;" class="error">{{ $errors->first('full_name') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label >Profile Pic</label>
                                    <input type="File" class="form-control" name="profile_pic" >
                                    @if($errors->has('profile_pic'))
                                        <div style="color:red;" class="error">{{ $errors->first('profile_pic') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="email">email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" >
                                    @if($errors->has('email'))
                                    <div style="color:red;" class="error">{{ $errors->first('email') }}</div>
                                    @endif 
                                </div>
                                <div class="col-md-6">
                                    <label for="review">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter your password" >
                                    @if($errors->has('password'))
                                        <div style="color:red;" class="error">{{ $errors->first('password') }}</div>
                                    @endif                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label >Phone No</label>
                                    <input type="number" class="form-control" name="phone_no" placeholder=" Enter Your Phone No" >
                                    @if($errors->has('phone_no'))
                                        <div style="color:red;" class="error">{{ $errors->first('phone_no') }}</div>
                                    @endif
                                    </div>
                                <div class="col-md-6">
                                    <label for="review">Address</label>
                                    <input type="text" class="form-control ckeditor" name="address" placeholder="Enter your Address" >
                                    @if($errors->has('address'))
                                        <div style="color:red;" class="error">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-solid btn-submit">Success</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->

@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    }); 

$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

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