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
                                <h3>Assign Role
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Assign Role</li>
                                <li class="breadcrumb-item active">Assign Role</li>
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
                                <h5>Role</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Role</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Role for Admin</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" action="{{ route('admin.save.role') }}" enctype="multipart/form-data">
                                                        @Csrf
                                                        <div class="form-group">
                                                            <label  class="mb-1">Role Name :</label>
                                                            <input class="form-control" name="name" type="text">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label  class="mb-1">Role Assign To :</label>
                                                            <select class="js-example-basic-multiple form-control" style="width:450px;" type ="text" name="role" required>
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
                                                <th>Guard</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($Roles as $k => $role)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->guard_name }}</td>
                                                    <td> <a href=""><button type="button" style="color:red; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-danger">Delete</button></a>
                                                        <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4"  >No Record Found</td>
                                                </tr>
                                            @endforelse   
                                        </tbody>
                                    </table>
                                    &nbsp<span>{{ $Roles->links() }}</span>&nbsp 
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

