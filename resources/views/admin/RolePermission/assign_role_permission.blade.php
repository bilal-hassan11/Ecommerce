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
                                <h3>Role To Permission
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Role & Permission</li>
                                <li class="breadcrumb-item active">Role & Permission</li>
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
                                <h5>Role To Permission</h5>
                            </div>
                            <div class="card-body">
                                <div class="btn-popup pull-right">
                                    <button type="button" style="border-radius:15px;" class="btn btn-primary" data-toggle="modal" data-original-title="test" data-target="#exampleModal">Assign Role To Permission</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Assign Role To Permission </h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form  method="Post" class="ajaxform" action="{{ route('admin.save.role_permission') }}" >
                                                        @Csrf
                                                        <div class="form-group ">
                                                            <label  class="mb-1">Select Guard</label>
                                                            <select class="js-example-basic-multiple  form-control guard" style="width: 450px;"  name="guard" required>
                                                                <option value=""> --- select Guard --- </option>
                                                                <option value="Company">Company</option>
                                                                <option value="web">User & Vendor</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="mb-1">Select Role</label>
                                                            <select class="js-example-basic-multiple" style="width: 450px;" id="role" name="role" >
                                                                
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label  class="mb-1">Permission Name :</label>
                                                            <select class="js-example-basic-multiple" style="width: 450px;" id="permission" name="permission[]" multiple="multiple" >
                                                              
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
@section('page-script')
    <script>
        $(document).on('change','.guard',function(){
            var guard_name = $('.guard').val();
            
            $.ajax({
                url : "{{ url('getroles') }}/"+guard_name,
                type : "get",
                data : { guard_name:guard_name },
                success:function(data){
                    $('#role').empty().append(data);
                }
            });
        });
        
        $(document).on('change','.guard',function(){
            var guard = $('.guard').val();
            
            $.ajax({
                url : "{{ url('getpermission') }}/"+guard,
                type : "get",
                data : { guard:guard },
                success:function(data){
                    $('#permission').empty().append(data);
                }
            });
        });

    </script>
@endsection    
<!-- <script type=text/javascript>
    
    $(document).on('change','#guard',function(){
        var guard_name = $('#guard').val();
         alert(guard_name);
        $.ajax({
            url : "{{ url('getroles') }}/"+guard_name,
            type : "get",
            data : { guard_name:guard_name },
            success:function(data){
                $('#role').empty().append(data);
            }
        });
    });
</script>     -->
<!-- <script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
console.log(country_id);
$("#state-dropdown").html('');
$.ajax({
url:"{{url('get-states-by-country')}}",
type: "POST",
data: {
country_id: country_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
$.each(result.states,function(key,value){
    alert("changes the country value");
$("#state-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
});
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
var state_id = this.value;
$("#city-dropdown").html('');
$.ajax({
url:"{{url('get-cities-by-state')}}",
type: "POST",
data: {
state_id: state_id,
_token: '{{csrf_token()}}'
},
dataType : 'json',
success: function(result){
$.each(result.cities,function(key,value){
$("#city-dropdown").append('<option value="'+value.id+'">'+value.name+'</option>');
});
}
});
});
});
</script>     -->