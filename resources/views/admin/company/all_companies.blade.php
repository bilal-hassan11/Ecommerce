@extends('layouts.admin')
<style>
.pagination-rounded .page-link{
        border-radius: 0 !important;
        border-color: #fff !important;
    }
    .pagination.pagination-rounded{
        margin-top: 8px !important;
    }

    .page-item.active .page-link{
        color: #333 !important;
        border: 1px solid #979797;
        background-color: white;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc)) !important;
        background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%) !important;
        background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%) !important;
        background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%) !important;
        background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%) !important;
        background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%) !important;
        border: 1px solid #dcdcdc!important;
    }
    .paginate_button.page-item a{
        padding: 0.5em 1em !important;
        border: 1px solid transparent;
    }
    .paginate_button.page-item a:hover{
    outline: none;
    background-color: #2b2b2b;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #2b2b2b), color-stop(100%, #0c0c0c));
    background: -webkit-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -moz-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -ms-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: -o-linear-gradient(top, #2b2b2b 0%, #0c0c0c 100%);
    background: linear-gradient(to bottom, #2b2b2b 0%, #0c0c0c 100%);
    box-shadow: inset 0 0 3px #111;
    color: #fff;
    border: 1px solid #111;
    }
    .table_main {
	    display: block;
	    overflow-x: scroll;
	}
</style>


@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Company
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Company</li>
                                <li class="breadcrumb-item active">Company</li>
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
                                <h5>Company</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Company</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Company</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" action="{{ route('admin.Company.save') }}" class="ajaxForm" enctype="multipart/form-data">
                                                        @Csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" class="form-control" placeholder="Enter Company Name"  name="name" value="" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="logo">Logo</label>
                                                                <input type="file" class="form-control" name="logo" value="" required>
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" placeholder="Enter Email"  name="email" value="" required>
                                                            </div>&nbsp
                                                            <div class="form-group mb-0 ">
                                                                <label for="password">Password</label>
                                                                <input type="password" class="form-control" id="password" placeholder="Enter Password" onkeyup='check();' name="password" value="" required>
                                                            </div>
                                                            <div class="form-group mb-0 ">
                                                                <label for="c_password">Confirm Password</label>
                                                                <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm Password" onkeyup='check();'  name="c_password" value="" required>
                                                            </div>&nbsp
                                                            <span id='message'></span>
                                                            <div class="form-group mb-0">
                                                                <label for="contact_no">Contact No</label>
                                                                <input type="text" class="form-control" placeholder="Enter Contact No" id="phone_number" name="contact_no" value="" required>
                                                            </div>&nbsp
                                                            <div class=form-group >
                                                                <label class="col-form-label"><span>*</span> Categories:</label>
                                                                <select name="category"  class="form-control" >
                                                                    <option value="">Select Category</option>
                                                                    @foreach($CompaniesCategory as  $c)
                                                                    <option value="{{ $c->name }}"  >{{ $c->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-form-label">Address: </label> 
                                                                <textarea class="ckeditor form-control" name="address"></textarea>
                                                            </div>
                                                            <div class=form-group >
                                                                <input type="hidden" class="form-control" name="company_id" value="" required>
                                                            </div>
                                                            <div class=form-group >
                                                                <input type="hidden" class="form-control" name="type" value="show">
                                                            </div>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($companies as $k => $company)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td><img src="{{ asset('uploads') }}/company_logo/{{ $company->logo }}" style="width:60px;" alt=""></td>
                                                    <td>{{ $company->title }}</td>
                                                    <td>{{ $company->email }}</td>
                                                    <td>{{ $company->contact_no }}</td>
                                                    <td> <a href=""><button type="button" style="color:red; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-danger">Delete</button></a>
                                                        <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach    
                                        </tbody>
                                    </table>
                                    &nbsp<span>{{ $companies->links() }}</span>&nbsp
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

