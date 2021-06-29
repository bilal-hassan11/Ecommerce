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
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Add Product</li>
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
                                <h5>Add Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="row product-adding">
                                    <div class="col-xl-5">
                                        <div class="add-product">
                                            <div class="row">
                                                <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                    <img src="{{ asset('admin_assets') }}/images/pro3/1.jpg" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded">
                                                </div>
                                                
                                                <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                                    <ul class="file-upload-product">
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                        <li><div class="box-input-file"><input class="upload" type="file"><i class="fa fa-plus"></i></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                    
                                    <div class="col-xl-7">
                                        <form  action="{{ route('admin.product.save') }}" method="Post" id="configform" enctype="multipart/form-data">
                                            @Csrf
                                            <div class="form">
                                                <div class="form-group mb-3 row">
                                                    <label class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="product_title" type="text" >
                                                    @if($errors->has('product_title'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_title') }}</div>
                                                    @endif
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Product Image :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;  margin-top:-5px;" name="product_image" type="file" >
                                                    @if($errors->has('product_image'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_image') }}</div>
                                                    @endif
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="product_price" type="number" >
                                                    @if($errors->has('product_price'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_price') }}</div>
                                                    @endif
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="form-group mb-3 row " >
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Product Weight :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="product_weight" type="number" value="" >
                                                    @if($errors->has('product_weight'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_weight') }}</div>
                                                    @endif
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose valid Weight.</div>
                                                </div>
                                                <div class="form-group mb-3 row hide" >
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Product Code :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="product_code" type="number" value="{{ $product_code }}" >
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-xl-3 col-sm-4 mb-0"><span>*</span> Categories:</label>
                                                    <select name="product_category" style="margin-left:205px; padding:-40px;" class="form-control" required>
                                                        <option value="">Select Parent Category</option>
                                                        @foreach($PhysicalCategories as  $category)
                                                        <option value="{{ $category->name }}"  >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('product_category'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_category') }}</div>
                                                    @endif
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                </div>
                                                <div class="form-group mb-3 row hide" >
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Product Type :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="product_type" type="text" value="physical" >
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Type.</div>
                                                </div>
                                                <div class="form-group mb-3 row hide" >
                                                    <label  class="col-xl-3 col-sm-4 mb-0">user id :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="padding:18px;" name="user_id" type="text" value="{{ Auth::user()->id }}" >
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Type.</div>
                                                </div>
                                            </div>&nbsp
                                            <div class="form">
                                                <div class="form-group row">
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Select Size :</label>
                                                    <select class="selectpicker form-control digits col-xl-8 col-sm-7" multiple data-live-search="true" name="size[]" >
                                                        <option>Small</option>
                                                        <option>Medium</option>
                                                        <option>Large</option>
                                                        <option>Extra Large</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <label style="margin-top:40px; " class="col-xl-3 col-sm-4 mb-0">Product Quantity :</label>
                                                    <input class="form-control col-xl-8 col-sm-7" style="margin-top:40px; padding:18px;" name="product_quantity" type="number" value="" >
                                                    @if($errors->has('product_quantity'))
                                                    <div style="color:red;" class="error">{{ $errors->first('product_quantity') }}</div>
                                                    @endif
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-xl-3 col-sm-4">Product Barcode :</label>
                                                    <div class="ckeditor col-xl-8 col-sm-7 pl-0 description-sm">
                                                    <div>{!! DNS1D::getBarcodeHTML('4445645656', 'C39') !!}</div></br>
                                                    </div>
                                                </div>&nbsp&nbsp
                                            </div>
                                            <div class="form-group row">
                                                    <label  class="col-xl-3 col-sm-4 mb-0">Product Description :</label>
                                                    <textarea  class="ckeditor" name="product_description" cols="10" rows="4"></textarea>
                                                    @if($errors->has('product_description'))
                                                        <div style="color:red;" class="error">{{ $errors->first('product_description') }}</div>
                                                    @endif
                                                        </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-form-label" style="margin-top:8px;"><span>*</span> Status</label>
                                                <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                                                        <input class="radio_animated" style="float:left; margin-top:-15px; margin-left:150px;" value="enable" type="radio" name="product_status"><span style="margin-left:15px; margin-top:-17px;" checked>Enable &nbsp&nbsp</span>
                                                        <input class="radio_animated" style="float:left; margin-top:-14px; margin-left:30px;" type="radio" value="disable" name="product_status"><span style="margin-left:15px; margin-top:-17px;">Disable &nbsp&nbsp</span>
                                                        @if($errors->has('product_status'))
                                                        <div style="color:red;" class="error">{{ $errors->first('product_status') }}</div>
                                                        @endif
                                                    <div class="invalid-feedback offset-sm-4 offset-xl-3">Please choose Valid Code.</div>
                                                </div>
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" value="save_product"  class="btn btn-primary">Add</button>
                                                <button type="reset" id="configreset" value="Reset"  class="btn btn-light">Discard</button>
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

         
<script type="text/javascript">
$('#configreset').click(function(){
        $('#configform')[0].reset();
  });
    $(document).ready(function() {
      
      $('.ckeditor').ckeditor();
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
</script>
       