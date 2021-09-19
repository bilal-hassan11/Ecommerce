@extends('layouts.admin')

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <div class="page-header-left">
                                <h3>Create Menu
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Menus</li>
                                <li class="breadcrumb-item active">Create Menu</li>
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
                                <h5>Add Menu</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.menu.save')}}" method="post" class="ajaxForm" enctype="multipart/form-data">
                                    @Csrf    
                                    <div class="form-group row">
                                        <label  class="col-xl-3 col-md-4"><span>*</span>Menu Name</label>
                                        <input class="form-control col-md-8" name="title" type="text" required>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-xl-3 col-md-4"><span>*</span>Menu Logo</label>
                                        <input class="form-control col-md-8" name="menu_logo" type="file" required="">
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-xl-3 col-md-4"><span>*</span>Menu Price</label>
                                        <input class="form-control col-md-8" name="price" type="number" required="">
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-xl-3 col-md-4"><span>*</span>Menu Description</label>
                                        <input class="form-control col-md-8" name="description" type="text" required="">
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Status</label>
                                        <div class="checkbox checkbox-primary col-xl-9 col-md-8">
                                            <input id="checkbox-primary-2" name="status" type="checkbox" data-original-title="" title="">
                                            <label for="checkbox-primary-2">Enable the Menu</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary d-block">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection        