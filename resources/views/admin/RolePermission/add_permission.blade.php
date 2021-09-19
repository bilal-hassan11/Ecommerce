@extends('layouts.admin') 

@section('content')
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Permission
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Permission</li>
                                <li class="breadcrumb-item active">Permission</li>
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
                                <h5>Permission</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Permission</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Permission</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" action="{{ route('admin.save.permission') }}" enctype="multipart/form-data">
                                                        @Csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label  class="mb-1">Permission Name :</label>
                                                                <input class="form-control" name="name" type="text" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="mb-1">Permission Assign To :</label>
                                                            <select class="js-example-basic-multiple form-control" style="width:450px;" name="guard" >
                                                                <option value=""> --- select Guard --- </option>
                                                                <option value="Company">Company</option>
                                                                <option value="web">Vendors & User</option>
                                                            </select>
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
                                                <th>Name</th>
                                                <th>Guard sName</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($permissions as $k => $permission)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>{{ $permission->guard_name }}</td>
                                                    <td> <a href=""><button type="button" style="color:red; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-danger">Delete</button></a>
                                                        <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" >No Record Found</td>
                                                </tr>
                                            @endforelse   
                                        </tbody>
                                    </table>
                                    &nbsp<span>{{ $permissions->links() }}</span>&nbsp 
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
