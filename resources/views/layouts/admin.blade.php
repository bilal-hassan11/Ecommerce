<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/create-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 20:23:09 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <link rel="icon" href="{{ asset('admin_assets') }}/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin_assets') }}/images/dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,900&display=swap" rel="stylesheet">

    <!-- Plugins css -->
    <link href="{{ asset('admin_assets') }}/css/bundled.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets') }}/css/dianujStyles.css" rel="stylesheet" type="text/css" />
    <!--Pagination CSS-->
    <link rel="stylesheet" href="{{ asset('admin_assets') }}/css/pagination.css" rel="stylesheet" type="text/css">
        

    <!-- Font Awesome
        
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/fontawesome.css"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/card.css">
    <!-- Ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/icofont.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_assets') }}/css/admin.css">
    <style>
    .select2-container .select2-selection--single .select2-selection__rendered {
        line-height: 1.9;
    }
    .bootstrap-select .inner{
        overflow-y: auto !important;
    }
</style>
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
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize-2"></i></a></li>
                    <li class="onhover-dropdown"><a class="txt-dark" href="#">
                        <h6>Welcome, {{ Auth::user()->name }}</h6></a>
                        <ul class="language-dropdown onhover-show-div p-20">
                            <li><a href="#" data-lng="es"><i class="flag-icon flag-icon-is"></i> English</a></li>
                            <li><a href="#" data-lng="sp"><i class="flag-icon flag-icon-um"></i> Spanish</a></li>
                            <li><a href="#" data-lng="pt"><i class="flag-icon flag-icon-uy"></i> Portuguese</a></li>
                            <li><a href="#" data-lng="fr"><i class="flag-icon flag-icon-nz"></i> French</a></li>
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
                    <li><a href="{{ route('admin.contact.show') }}"><i class="right_side_toggle" data-feather="message-square"></i><span class="dot"></span></a></li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="{{ asset('uploads') }}/profile_pic/{{ Auth::user()->profile_pic }}" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="{{ route('admin.profile') }}"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="#"><i data-feather="mail"></i>Inbox</a></li>
                            <li><a href="#"><i data-feather="lock"></i>Lock Screen</a></li>
                            <li><a href="#"><i data-feather="settings"></i>Settings</a></li>
                            <li><a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Logout</a>
                                     <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form></li>
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
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="{{ asset('admin_assets') }}/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
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
<script src="https://parsleyjs.org/dist/parsley.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script src="Https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script> -->
<!-- latest jquery-->
<script src="{{ asset('admin_assets') }}/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="{{ asset('admin_assets') }}/js/bootstrap.js"></script>
<script src="{{ asset('admin_assets') }}/js/bootstrap.min.js"></script>
<script src="{{ asset('admin_assets') }}/js/sweetalert.min.js"></script>
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

</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/create-menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jan 2021 20:23:09 GMT -->
</html>