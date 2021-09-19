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
               <h3>Add Digital Products
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
               <h5>Digital Product</h5>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.digital_product.save') }}" id="configform" class="ajaxForm" enctype="multipart/form-data"  method="Post" >
                  @Csrf
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span> Title:</label>
                     <input class="form-control" name="product_title" type="text" required>
                  </div>
                  
                  <div class="form-group">
                     <label  class="col-form-label"><span>*</span> Product Price:</label>
                     <input class="form-control"  type="number" name="product_price" required>
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span>Product Weight: </label>
                     <select class="js-example-basic-multiple" style="width:120px; !important" name="weight_meter" >
                        <option>gm</option>
                        <option>kg</option>
                        <option>lb</option>
                        <option>Ton</option>  
                     </select>
                     <input class="form-control" type="number" style="margin-left:260px; margin-top:-35px; width:120px; height:35px;" name="product_weight" required>
                     
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label"><span>*</span> Product Size</label>
                     <select class="js-example-basic-multiple" style="width: 450px;" name="size[]" multiple="multiple" required>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                        <option>Xtra large</option>  
                     </select>
                  </div>   
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span>Product Qty: </label>
                     <input class="form-control" type="text" name="product_quantity" required>
                  </div>
                  <div class="form-group">
                     <label  class="col-form-label pt-0"><span>*</span>Product Code: </label>
                     <input class="form-control" readonly value="{{ $productCode }}" type="text" name="product_code">
                  </div>                   
                 
                  <!-- hidden fields  -->  
                  <input class="form-control col-xl-8 col-sm-7" name="user_id" type="hidden" value="{{ Auth::user()->id }}" >
                  <input class="form-control col-xl-8 col-sm-7" name="product_type" type="hidden" value="digital" >
                  
                  <div class="form-group">
                     <label class="col-form-label" style="margin-top:18px; margin-left:2px;"><span>*</span> Status:</label>
                     <div class="m-checkbox-inline mb-0 custom-radio-ml d-flex radio-animated">
                        <input class="radio_animated" style="float:left; margin-top:-18px; margin-left:150px;" value="enable" type="radio" name="product_status"><span style="margin-left:15px; margin-top:-21px;" checked>Enable &nbsp&nbsp</span>
                        <input class="radio_animated" style="float:left; margin-top:-17px; margin-left:30px;" type="radio" value="disable" name="product_status"><span style="margin-left:15px; margin-top:-21px;">Disable &nbsp&nbsp</span>
                     </div>
                  </div>
                  <label class="col-form-label pt-0" style="margin-top:40px;">Image Upload:</label>
                  <div class="dz-message needsclick">
                     <input type="file" style="float:right; margin-top:-25px;"name="product_image" name="product_image" required>
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
                              <div class="digital-add ">
                                 <div class="form-group mb-0">
                                    <div class="description-sm">
                                       <textarea  name="product_description" cols="10" rows="4" required></textarea>
                                    </div>
                                 </div>   
                               </div>
                           </div>
                     </div>
                     <div class="card">
                        <div class="card-header">
                           <h5>Categories </h5>
                        </div>
                        <div class="card-body">
                           <div class="digital-add needs-validation">
                              <div class="form-group row">
                                 <label for="companies" style="margin-left:12px;"> Company:</label>
                                 <select id="companies" name="product_company" style="width:58.4% !important; height: 35px; font-size:15px; margin-left:88px;" class="form-control" required >
                                 <option value="">Select Company</option>
                                    @foreach($Companies as $company)
                                       <option value="{{$company->title}}">{{$company->title}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group row">
                                 <label for="parent_category" style="margin-top:20px; margin-left:12px;">Parent Category:</label>
                                 <select  id="parent_category" name="product_category" style="width:58.4% !important; height: 35px; margin-top:-20px; font-size:15px; margin-left:170px;" class="form-control" required >
                                    <option value="">Select Parent category</option>
                                    @foreach($DigitalCategories as $category)
                                       <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group row">
                                 <label for="category" style="margin-left:12px; margin-top:20px;">Sub Category:</label>
                                 <select id="category"  style="width:58% !important; font-size:15px; height: 35px; margin-top:-20px; margin-left:170px;" name="sub_category" class="form-control"></select>
                              </div>
                        </div>
                     </div> 
                     <div class="form-group mb-0">
                        <div class="product-buttons text-center">
                           <button type="submit" class="btn btn-primary">Add</button>
                           <button type="reset" id="configreset" value="Reset" class="btn btn-light ">Discard</button>
                        </div>   
                     </div>
                  </div> 
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Container-fluid Ends-->
</div>
@endsection
