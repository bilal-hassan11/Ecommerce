@extends('layouts.admin')
<style>
.mt-100 {
    margin-top: 100px
}


</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Create Coupon
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Coupons </li>
                                <li class="breadcrumb-item active">Create Coupon</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-header">
                        <h5>Discount Coupon Details</h5>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active show" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true" data-original-title="" title="">General</a></li>
                            <li class="nav-item"><a class="nav-link" id="restriction-tabs" data-toggle="tab" href="#restriction" role="tab" aria-controls="restriction" aria-selected="false" data-original-title="" title="">Restriction</a></li>
                            <li class="nav-item"><a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false" data-original-title="" title="">Usage</a></li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form action="{{ route('admin.coupon.save') }}" method="Post" enctype="multipart/form-data">
                                        @Csrf 
                                            <h4>General</h4>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group row">
                                                        <label  class="col-xl-3 col-md-4"><span>*</span> Coupan Title</label>
                                                        <input style="height: 35px; font-size:15px;" class="form-control col-md-7" name="title" type="text" >
                                                    </div>
                                                    <div class="form-group row">
                                                        <label  class="col-xl-3 col-md-4"><span>*</span>Coupan Code</label>
                                                        <input style="height: 35px; font-size:15px;" value="{{ $coupon_code }}" class="form-control col-md-7" name="coupon_code" type="text"  >
                                                        <div class="valid-feedback">Please Provide a Valid Coupon Code.</div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">Start Date</label>
                                                        <input style="height: 35px; font-size:15px;" class="datepicker-here form-control digits col-md-7" name="start_date" type="date" data-language="en">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">End Date</label>
                                                        <input style="height: 35px; font-size:15px;" class="datepicker-here form-control digits col-md-7" name="end_date" type="date" data-language="en">
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">Free Shipping</label>
                                                        <div class="checkbox checkbox-primary col-md-7">
                                                            <input value="enable" type="checkbox" data-original-title="" name="shipping" title="">
                                                            <label >Allow Free Shipping</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">Quantity</label>
                                                        <input style="height: 35px; font-size:15px;"class="form-control col-md-7" name="quantity" type="number" >
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">Discount Type</label>
                                                        <select style="height: 35px; font-size:15px;" class="custom-select col-md-7" name="discount_type" >
                                                            <option value="">--Select--</option>
                                                            <option value="percent">Percent</option>
                                                            <option value="fixed">Fixed</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-md-4">Status</label>
                                                        <div class="checkbox checkbox-primary col-md-7">
                                                            <input  type="checkbox"  value="enable" name="status" data-original-title="" title="">
                                                            <label >Enable the Coupon</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="restriction" role="tabpanel" aria-labelledby="restriction-tabs">
                                        
                                            <h4>Restriction</h4>
                                            <div class="form-group row">
                                                <label for="parent_category" style="margin-left:12px;">Parent Category:</label>
                                                <select id="parent_category" name="parent_category" style="width:58.4% !important; height: 35px; font-size:15px; margin-left:88px;" class="form-control">
                                                    <option value="">Select Parent category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->name.",$category->type"}}">{{$category->name."($category->type)"}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label for="category" style="margin-left:12px;">Sub Category:</label>
                                                <select id="category" style="width:58% !important; font-size:15px; height: 35px; margin-left:108px;" name="sub_category" class="form-control"></select>
                                                
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Minimum Spend</label>
                                                <input style="height: 35px; font-size:15px;" class="form-control col-md-7" name="minimum_spend"  type="number" >
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-md-4">Maximum Spend</label>
                                                <input style="height: 35px; font-size:15px;" class="form-control col-md-7" name="maximum_spend" type="number" >
                                            </div>
                                        
                                    </div>
                                    <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
                                        
                                            <h4>Usage Limits</h4>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4">Per Limit</label>
                                                <input style="padding:14px; font-size:15px;" class="form-control col-md-7" name="coupon_limit_per_quantity" type="number" >
                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-xl-3 col-md-4">Per Customer</label>
                                                <input style="padding:14px; font-size:15px;" class="form-control col-md-7" name="coupon_limit_per_customer" type="number" >
                                            </div>
                                        <div class="pull-right">
                                            <button type="submit" value="save_coupon" name="save_coupon" class="btn btn-primary">Save</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>


    </div>

</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type=text/javascript>
    $(document).on('change','#parent_category',function(){
        var category_name = $('#parent_category').val();
        // alert(category_type);
        $.ajax({
            url : "{{ url('getcategories') }}/"+category_name,
            type : "get",
            data : { category_name:category_name },
            success:function(data){
                $('#category').empty().append(data);
            }
        });
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
//     $(document).on('change','#category',function(){
//         var category_ = $('#parent_category').val();
//         // alert(category_type);
//         $.ajax({
//             url : "{{ url('getcategories') }}/"+category_type,
//             type : "get",
//             data : { category_type:category_type },
//             success:function(data){
//                 $('#category').empty().append(data);
//             }
//         });
//     });
  
  
//   $('#category_type').change(function(){
//   var type = $(this).val();  
    
//   if(type){
//     $.ajax({
//       type:"GET",
//       url:"{{url('getcategories')}}?category_id="+type,
//       success:function(res){        
//       if(res){
//         $("#category").empty();
//         $("#category").append('<option>Select category</option>');
//         $.each(res,function(key,value){
//           $("#category").append('<option value="'+key+'">'+value+'</option>');
//         });
      
//       }else{
//         $("#category").empty();
//       }
//       }
//     });
//   }else{
//     $("#category").empty();
//     $("#city").empty();
//   }   
//   });
//   $('#categories').on('change',function(){
//   var stateID = $(this).val();  
//   if(stateID){
//     $.ajax({
//       type:"GET",
//       url:"{{url('getCity')}}?state_id="+stateID,
//       success:function(res){        
//       if(res){
//         $("#city").empty();
// 		$("#city").append('<option>Select City</option>');
//         $.each(res,function(key,value){
//           $("#city").append('<option value="'+key+'">'+value+'</option>');
//         });
      
//       }else{
//         $("#city").empty();
//       }
//       }
//     });
//   }else{
//     $("#city").empty();
//   }
    
//   });
</script>



