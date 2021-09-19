@extends('layouts.admin')
    
@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Digital Category
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Digital Category</li>
                                <li class="breadcrumb-item active">Digital Category</li>
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
                                <h5>Digital Sub Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Digital Sub Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Digital Sub Category</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" action="{{ route('admin.SubCategory.save') }}" enctype="multipart/form-data">
                                                        @Csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label  class="mb-1">Category Name :</label>
                                                                <input class="form-control" name="sub_category" type="text">
                                                            </div>
                                                            
                                                            <div class="form-group mb-0">
                                                                <label class="mb-1">Parent Category Name :</label>
                                                                <select name="parent_category"  class="form-control" required>
                                                                    @forelse($DigitalCategories as  $category)
                                                                        <option value="{{ $category->name }}"  >{{ $category->name }}</option>
                                                                    @empty
                                                                        <option value="" >No categories Exist</option>
                                                                    @endforelse
                                                                </select>
                                                            </div>&nbsp
                                                            <div class="form-group mb-0">
                                                                <label class="mb-1">Category Image :</label>
                                                                <input class="form-control" name="category_image" type="File">
                                                            </div>
                                                            <input class="form-control" id="type" readonly name="category_type" type="hidden" value="digital" >
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                                        </div>    
                                                    </form>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <div id="basicScenario" >
                                    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Parent Category Name</th>
                                                <th>Sub Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($sub_category as $k => $category)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td><img src="{{ asset('uploads') }}/category/{{ $category->image }}" style="width:60px;" alt=""></td>
                                                    <td>{{ $category->parent_category}}</td>
                                                    <td>{{ $category->sub_category }}</td>
                                                    <td> 
                                                        <a class="delete" data-id="{{$category->id}}"><button type="button" style="border-radius:30px;" class="btn btn-outline-info"><span><i class="far fa-trash-alt"></i></span></button></a>  
                                                        <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" >No Record Found</td>
                                                </tr>    
                                            @endforelse
                                        </tbody>
                                    </table>
                                        <div class="mpag mt-2">
                                            &nbsp<span>{{ $sub_category->links() }}</span>&nbsp
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
        </div>
@endsection

