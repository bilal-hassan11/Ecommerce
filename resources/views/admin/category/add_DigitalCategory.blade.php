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
                                <h3>Category
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
                                <li class="breadcrumb-item active">Category</li>
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
                                <h5>Products Category</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Add Digital Category</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Add Digital Product</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" action="{{ route('admin.PhysicalCategory.save') }}" enctype="multipart/form-data">
                                                        @Csrf
                                                        <div class="form">
                                                            <div class="form-group">
                                                                <label  class="mb-1">Category Name :</label>
                                                                <input class="form-control" name="category_name" type="text">
                                                            </div>
                                                            <div class="form-group mb-0">
                                                                <label class="mb-1">Category Image :</label>
                                                                <input class="form-control" name="category_image" type="File">
                                                            </div>
                                                            <div class="form-group mb-0 hide">
                                                                <label class="mb-1">Category Type:</label>
                                                                <input class="form-control" name="category_type" type="text" value="digital" >
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
                                    <div id="basicScenario" class="product-physical">
                                    <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($DigitalCategories as $k => $category)
                                                <tr>
                                                    <td>{{ $k + 1 }}</td>
                                                    <td><img src="{{ asset('uploads') }}/physical_category/{{ $category->image }}" style="width:60px;" alt=""></td>
                                                    <td>{{ $category->name }}</td>
                                                    <td> <a href=""><button type="button" style="color:red; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-danger">Delete</button></a>
                                                        <a href=""><button type="button" style="color:yellow; border-radius:19px; width:90px; margin-top:15px;" class="btn btn-outline-info">Edit</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach    
                                        </tbody>
                                    </table>
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

<script>

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
</script>