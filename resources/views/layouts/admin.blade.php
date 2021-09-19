
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/create-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 20:23:09 GMT -->
<head>

<style>
    mpag{width: 100%;padding: 0px 0px 30px 0}
        .mpag nav div span.relative.z-0.inline-flex.shadow-sm.rounded-md span span{margin-right:-4px;}
        .mpag nav div span.relative.z-0.inline-flex.shadow-sm.rounded-md svg{width: 20px;}
        .mpag nav div.flex.justify-between.flex-1{display: none;}
        .mpag nav div.hidden div:first-child{float: left;}
        .mpag nav div.hidden div:last-child{float: right;}
        .mpag nav div span.px-4.py-2,
        .mpag nav div a.px-4.py-2{padding-left: 20px !important;padding-right: 20px !important;}
</style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    
    <link rel="icon" href="{{ asset('admin_assets') }}/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin_assets') }}/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>
        
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap.min.css">

    <!-- multiselect -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.17/sweetalert2.min.css" rel="stylesheet" type="text/css">
     

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    
    <!-- Plugins css -->
    <link href="{{ asset('admin_assets') }}/css/bundled.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets') }}/css/dianujStyles.css" rel="stylesheet" type="text/css" />
    <!--Pagination CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/pagination.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/all.min.css">-->

    <!-- Font Awesome -->
        
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <!-- card css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/card.css">
    
    <!-- Ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/icofont.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/admin.css">
    
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index.html"><img  class="blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i class="fas fa-search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        
                    <!-- <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }} -->
                        <h6>Welcome, {{ Auth::user()->name }}</h6></a>
                        
                        <ul class="language-dropdown onhover-show-div p-20">
                            
                            <li><a href="" data-lng="es"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="" data-lng="sp"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
                        </ul>
                    </li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span class="badge badge-pill badge-primary pull-right notification-badge">3</span><span class="dot"></span>
                        <ul class="notification-dropdown onhover-show-div p-0">
                            <li>Notification <span class="badge badge-pill badge-primary pull-right">3</span></li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0"><span><i class="shopping-color" data-feather="shopping-bag"></i></span>Your order ready for Ship..!</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-success"><span><i class="download-color font-success" data-feather="download"></i></span>Download Complete</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="media-body">
                                        <h6 class="mt-0 txt-danger"><span><i class="alert-color font-danger" data-feather="alert-circle"></i></span>250 MB trash files</h6>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="bg-light txt-dark"><a href="#">All</a> notification</li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('uploads') }}/profile_pic/{{ Auth::user()->profile_pic }}" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="{{ route('admin.profile') }}"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                            <li><a  id="logout_user" data-id="{{Auth::user()->id}}"><i data-feather="log-out"></i>Logout</a>
                            </li>
                                
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="{{ route('admin.home') }}"><img class="blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle blur-up lazyloaded" src="{{ asset('uploads') }}/profile_pic/{{ Auth::user()->profile_pic }}" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">Welcome, {{ Auth::guard('admin')->user()->name }}</h6>
                    <p>general manager.</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="{{ route('admin.home') }}"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    
                    <li><a class="sidebar-header" href=""><i data-feather="box"></i> <span>Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Physical</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                        <li><a href="{{ route('admin.PhysicalCategory.add') }}" class="active"><i class="fa fa-circle"></i>Category</a></li>
                                        <li><a href="{{ route('admin.SubPhysicalCategory.add') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
                                        <li><a href="{{ route('admin.product.show') }}"><i class="fa fa-circle"></i>Product List</a></li>
                                        <li><a href="{{ route('admin.product.add') }}"><i class="fa fa-circle"></i>Add Product</a></li>

                                    </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-circle"></i>
                                    <span>Digital</span> <i class="fa fa-angle-right pull-right"></i>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li><a href="{{ route('admin.DigitalCategory.add') }}"><i class="fa fa-circle"></i>Category</a></li>
                                    <li><a href="{{ route('admin.SubDigitalCategory.add') }}"><i class="fa fa-circle"></i>Sub Category</a></li>
                                    <li><a href="{{ route('admin.digital_product.show') }}"><i class="fa fa-circle"></i>Product List</a></li>
                                    <li><a href="{{ route('admin.digital_product.add') }}"><i class="fa fa-circle"></i>Add Product</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    
                    <li><a class="sidebar-header" href="{{ route('admin.company.add') }}"><i data-feather="dollar-sign"></i><span>Sales</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href=""><i class="fa fa-circle"></i>Orders</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{ route('admin.company.add') }}"><i data-feather="tag"></i><span>Coupons</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.coupon.show') }}"><i class="fa fa-circle"></i>List Coupons</a></li>
                            <li><a href="{{ route('admin.coupon.add') }}"><i class="fa fa-circle"></i>Create Coupons </a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{ route('admin.company_category.add') }}"><i data-feather="align-left"></i><span>Companies Category</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.company_category.add') }}"><i class="fa fa-circle"></i>All Categories</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{ route('admin.company.add') }}"><i data-feather="align-left"></i><span>Menus</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.menu.show') }}"><i class="fa fa-circle"></i>Menu Lists</a></li>
                            <li><a href="{{ route('admin.menu.add') }}"><i class="fa fa-circle"></i>Create Menu</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="align-left"></i><span>Companies</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.company.add') }}"><i class="fa fa-circle"></i>All Companies Lists</a></li>
                            
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.user.show') }}"><i class="fa fa-circle"></i>User List</a></li>
                            <li><a href="{{ route('admin.user.add') }}"><i class="fa fa-circle"></i>Create User</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>Roles & Permission</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.add.role') }}"><i class="fa fa-circle"></i>Roles List</a></li>
                            <li><a href="{{ route('admin.add.permission') }}"><i class="fa fa-circle"></i>Permissions List</a></li>
                            <li><a href="{{ route('admin.add.role_permission') }}"><i class="fa fa-circle"></i>Role To Permissions</a></li>
                        </ul>
                    </li>
                   
                    <li><a class="sidebar-header" href=""><i data-feather="users"></i><span>Vendors</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.vendor.show') }}"><i class="fa fa-circle"></i>Vendor List</a></li>
                            <li><a href="{{ route('admin.vendor.add') }}"><i class="fa fa-circle"></i>Create Vendor</a></li>
                        </ul>
                    </li>
                    <ul class="sidebar-submenu">
                        <li><a href=""><i class="fa fa-circle"></i>Translations</a></li>
                        <li><a href=""><i class="fa fa-circle"></i>Currency Rates</a></li>
                        <li><a href=""><i class="fa fa-circle"></i>Taxes</a></li>
                    </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('admin.report.show')}}"><i data-feather="bar-chart"></i><span>Reports</span></a></li>
                    <li><a class="sidebar-header" href="#"><i data-feather="settings" ></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('admin.profile')}}"><i class="fa fa-circle"></i>Profile</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="{{route('admin.invoice.show')}}"><i data-feather="archive"></i><span>Invoice</span></a>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="log-in"></i><span>Login</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                @foreach($users_data as $data)
                                    <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('uploads') }}/profile_pic/{{$data->profile_pic}}" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">{{$data->name}}</div>
                                            @if($data->activation_status == "online")
                                                <span class="text-success">Online</span>
                                            @else
                                                <span class="text-secondary">Offline</span>
                                            @endif
                                            <div class="status">{{  \Carbon\Carbon::parse($data->activation_time)->diffForHumans()}}</div>
                                        </div>
                                    </li>
                                @endforeach    
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">          <!-- Start Page Content here -->
            <!-- ============================================================== -->
            @yield('content')
                <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2019 © Multikart All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>  

<script src="https://parsleyjs.org/dist/parsley.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" ></script> 
<script src="{{ asset('admin_assets') }}/js/custom.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  -->

<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.17/sweetalert2.all.min.js"></script> 



<!-- Bootstrap js-->
<script src="{{ asset('admin_assets') }}/js/bootstrap.js"></script>
<script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script>

<!-- feather icon js-->
<script src="{{ asset('admin_assets') }}/js/icons/feather-icon/feather.min.js"></script>
<script src="{{ asset('admin_assets') }}/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="{{ asset('admin_assets') }}/js/sidebar-menu.js"></script>

<!--Customizer admin-->
<script src="{{ asset('admin_assets') }}/js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="{{ asset('admin_assets') }}/js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="{{ asset('admin_assets') }}/js/chat-menu.js"></script>

<!--script admin-->
<script src="{{ asset('admin_assets') }}/js/admin-script.js"></script>
@yield('page-script')
<!-- deleting Category -->
<script type="text/javascript">
    $(document).on('click', '.delete', function (e) {
        e.preventDefault();
        
        var id = $(this).data('id');
        var type = $("#type").val();
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    type: "POST",
                    url: "{{route('admin.category.delete')}}",
                    data: {id:id,type:type},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        Swal.fire(
                            'Deleted!',
                            'Data Deleted Successfully!',
                            'success'
                            )
                    }         
                });
                
                
            }
            location.reload();
        });
        
    });
        
</script>

<!-- logout -->
<script type="text/javascript">
    
    $(document).on('click','#logout_user',function(){
       
        var id = $(this).data('id');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    type: "POST",
                    url: "{{route('admin.logout')}}",
                    data: {id:id},
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        location.reload();
                    }         
                });
            }
        });        
    });
            
</script>
<script>   
    $(document).ready(function(){
        var form = $('#form'),
            original = form.serialize()

        form.submit(function(){
            window.onbeforeunload = null
        })

        window.onbeforeunload = function(){
            if (form.serialize() != original)
                return 'Are you sure you want to leave?'
        }

    });    
    //get sub category with type
    $(document).on('change','#parent_category',function(){
        
      var category_name = $('#parent_category').val();
        
        $.ajax({
            url : "{{ url('getcategories') }}/"+category_name,
            type : "get",
            data : { category_name:category_name },
                success:function(data){
                $('#category').empty().append(data);
            }
        });
    });
    //get sub categories 
    $(document).on('change','#category',function(){
        
        var id = $('#category').val();
        
          $.ajax({
              url : "{{ url('getsubcategories') }}/"+id,
              type : "get",
              data : { id:id },
                  success:function(data){
                  $('#sub_category').empty().append(data);
              }
          });
    });
    //Reset Form
   $('#configreset').click(function(){
         $('#configform')[0].reset();
   });

   $(document).ready(function(){
        
        $('.js-example-basic-multiple').select2();
        $('#phone_number').inputmask('(999)-9999-999');
        $('#nic_number').inputmask('(99999)-9999999-9');
        
    });
</script>
<!-- get countries -->
<script type=text/javascript>
  
  $('#country').change(function(){
  var countryID = $(this).val();  
   
  if(countryID){
    $.ajax({
      type:"GET",
      url:"{{url('get-state-list')}}?country_id="+countryID,
      success:function(res){        
      if(res){
        $("#state").empty();
        $("#state").append('<option>Select State</option>');
        $.each(res,function(key,value){
          $("#state").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#state").empty();
      }
      }
    });
  }else{
    $("#state").empty();
    $("#city").empty();
  }   
  });
  $('#state').on('change',function(){
  var stateID = $(this).val();  
  if(stateID){
    $.ajax({
      type:"GET",
      url:"{{url('get-city-list')}}?state_id="+stateID,
      success:function(res){        
      if(res){
        $("#city").empty();
        $.each(res,function(key,value){
          $("#city").append('<option value="'+key+'">'+value+'</option>');
        });
      
      }else{
        $("#city").empty().append('<option>No City Selected</option>');
      }
      }
    });
  }else{
    $("#city").empty();
  }
    
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
</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/create-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 20:23:09 GMT -->
</html>
  