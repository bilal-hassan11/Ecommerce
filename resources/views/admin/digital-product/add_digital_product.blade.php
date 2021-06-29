@extends('layouts.admin')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
   <div class="page-header">
      <div class="row">
         <div class="col-lg-6">
            <div class="page-header-left">
               <h3>Add Products
                  <small>Multikart Admin panel</small>
               </h3>
            </div>
         </div>
         <div class="col-lg-6">
            <ol class="breadcrumb pull-right">
               <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i data-feather="home"></i></a></li>
               <li class="breadcrumb-item">Digital</li>
               <li class="breadcrumb-item active">Add Product</li>
            </ol>
         </div>
      </div>
   </div>
</div>
<!-- Container-fluid Ends-->
<!-- Container-fluid starts-->
<div class="container-fluid">
   <div class="row product-adding">
      <div class="col-xl-6">
         <div class="card">
            <div class="card-header">
               <h5>General</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.digital_product.save') }}" id="configform" enctype="multipart/form-data" method="Post" >
                  @Csrf
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span> Title:</label>
                     <input class="form-control" name="product_title" type="text" >
                     @if($errors->has('product_title'))
                     <div style="color:red;" class="error">{{ $errors->first('product_title') }}</div>
                     @endif
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                  </div>
                  <div class="form-group">
                     <label class="col-form-label"><span>*</span> Categories:</label>
                     <select name="product_category"  class="form-control" required>
                        <option value="">Select Parent Category</option>
                        @foreach($DigitalCategories as  $category)
                        <option value="{{ $category->name }}"  >{{ $category->name }}</option>
                        @endforeach
                     </select>
                     @if($errors->has('product_category'))
                     <div style="color:red;" class="error">{{ $errors->first('product_category') }}</div>
                     @endif
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label"><span>*</span> Product Price:</label>
                     <input class="form-control"  type="number" name="product_price" >
                     @if($errors->has('product_price'))
                     <div style="color:red;" class="error">{{ $errors->first('product_price') }}</div>
                     @endif
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span>Product Weight: </label>
                     <input class="form-control" type="number" name="product_weight">
                     @if($errors->has('product_weight'))
                     <div style="color:red;" class="error">{{ $errors->first('product_weight') }}</div>
                     @endif
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span>Product Qty: </label>
                     <input class="form-control" type="text" name="product_quantity">
                     @if($errors->has('product_quantity'))
                     <div style="color:red;" class="error">{{ $errors->first('product_quantity') }}</div>
                     @endif
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                  </div>
                  <div class="form-group mb-3 row hide" >
                     <label  class="col-xl-3 col-sm-4 mb-0">Product Type :</label>
                     <input class="form-control col-xl-8 col-sm-7" name="product_type" type="text" value="digital" >
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Type.</div>
                  </div>
                  <div class="form-group mb-3 row hide" >
                     <label  class="col-xl-3 col-sm-4 mb-0">Product code :</label>
                     <input class="form-control col-xl-8 col-sm-7" name="product_code" type="text" value="{{ $product_code }}" >
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Type.</div>
                  </div>
                  <div class="form-group mb-3 row hide" >
                     <label  class="col-xl-3 col-sm-4 mb-0">user id :</label>
                     <input class="form-control col-xl-8 col-sm-7" name="user_id" type="text" value="{{ Auth::user()->id }}" >
                     <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Type.</div>
                  </div>
                  <div class="form-group">
                     <div class="form-group row">
                        <label  class="col-xl-3 col-sm-4 mb-0">Select Size: </label>
                        <select class="selectpicker form-control digits col-xl-8 col-sm-7"  multiple data-live-search="true" name="size[]" >
                           <option>Small</option>
                           <option>Medium</option>
                           <option>Large</option>
                           <option>Extra Large</option>
                        </select>
                        @if($errors->has('size'))
                        <div style="color:red;" class="error">{{ $errors->first('size') }}</div>
                        @endif
                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                     </div>
                  </div>
                  &nbsp
                  <div class="form-group">
                     <label class="col-xl-3 col-sm-4" style="margin-left:-15px;" > Barcode:</label>
                     <div style="margin-left:5px;" class="ckeditor col-xl-8 col-sm-7 pl-0 description-sm">
                     <div style="display:block !important">{!! DNS1D::getBarcodeHTML( $product_code,'c39') !!}</div></br>
                                                    </div>
                     </div>
                  </div>
                  &nbsp&nbsp
                  <div class="form-group">
                     <label class="col-form-label" style="margin-top:18px; margin-left:2px;"><span>*</span> Status:</label>
                     <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                        <input class="radio_animated" style="float:left; margin-top:-18px; margin-left:150px;" value="enable" type="radio" name="product_status"><span style="margin-left:15px; margin-top:-21px;" checked>Enable &nbsp&nbsp</span>
                        <input class="radio_animated" style="float:left; margin-top:-17px; margin-left:30px;" type="radio" value="disable" name="product_status"><span style="margin-left:15px; margin-top:-21px;">Disable &nbsp&nbsp</span>
                        @if($errors->has('product_status'))
                        <div style="color:red;" class="error">{{ $errors->first('product_status') }}</div>
                        @endif
                        <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                     </div>
                  </div>
                  <label class="col-form-label pt-0" style="margin-top:40px;">Image Upload:</label>
                  <div class="dz-message needsclick">
                     <input type="file" style="float:right; margin-top:-25px;"name="product_image" name="product_image">
                  </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="card">
                    <div class="card-header">
                    <h5>Add Description</h5>
                    </div>
                    <div class="card-body">
                    <div class="digital-add needs-validation">
                    <div class="form-group mb-0">
                    <div class="description-sm">
                    <textarea  class="ckeditor" name="product_description" cols="10" rows="4"></textarea>
                        @if($errors->has('product_description'))
                            <div style="color:red;" class="error">{{ $errors->first('product_description') }}</div>
                        @endif
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <div class="card">
                    <div class="card-header">
                    <h5>Meta Data</h5>
                    </div>
                    <div class="card-body">
                    <div class="digital-add needs-validation">
                    <div class="form-group">
                    <label  class="col-form-label pt-0"> Meta Title</label>
                    <input class="form-control" name="product_meta" type="text" >
                    </div>
                    <div class="form-group">
                    <label class="col-form-label">Meta Description</label>
                    <textarea rows="4" name="product_meta_description" cols="12"></textarea>
                    </div>
                    <div class="form-group mb-0">
                    <div class="product-buttons text-center">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" id="configreset" value="Reset" class="btn btn-light ">Discard</button>
                    </div>
                    </div>
                </form>
      </div>
      </div>
      </div>
      </div>
   </div>
</div>
<!-- Container-fluid Ends-->
</div>
@endsection
<script>

@if(session("status"))
    
    swal({
    title: "Good job!",
    //   text: "You clicked the button!",
    icon: "{{ session('digitalProduct') }}",
    button: "Aww yiss!",
    });

@endif

$('#configreset').click(function(){
        $('#configform')[0].reset();
  });
</script>