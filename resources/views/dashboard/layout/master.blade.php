<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Hisaab Kitaab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard') }}/images/favicon.ico">
    <!-- App css -->
    <link href="{{ asset('public/dashboard') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{ asset('public/dashboard') }}/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="{{ asset('public/dashboard') }}/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="{{ asset('public/dashboard') }}/css/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="{{ asset('public/dashboard') }}/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{ asset('public/dashboard') }}/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/dashboard') }}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/dashboard') }}/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('public/dashboard') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- custom style -->
    <link href="{{ asset('public/dashboard') }}/css/hansol-style.css" rel="stylesheet">
    <!-- style css -->
    <link href="{{ asset('public/dashboard') }}/css/style.css" rel="stylesheet">
    @stack('css')
</head>
<!-- body start -->
<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box dropdown">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="Search..." id="top-search">
                                    <button class="btn input-group-text" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                                <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-home me-1"></i>
                                        <span>Analytics Report</span>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-aperture me-1"></i>
                                        <span>How can I help you?</span>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>User profile settings</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown d-inline-block d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="fe-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>
                    <li class="dropdown d-none d-lg-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen"
                            href="#">
                            <i class="fe-maximize noti-icon"></i>
                        </a>
                    </li>
                    <li class="dropdown d-none d-lg-inline-block topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="{{ asset('public/dashboard') }}/images/flags/us.jpg" alt="user-image" height="16">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('public/dashboard') }}/images/flags/germany.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('public/dashboard') }}/images/flags/italy.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('public/dashboard') }}/images/flags/spain.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{ asset('public/dashboard') }}/images/flags/russia.jpg" alt="user-image" class="me-1" height="12">
                                <span class="align-middle">Russian</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge bg-danger rounded-circle noti-icon-badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>
                            <div class="noti-scroll" data-simplebar>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon">
                                        <img src="{{ asset('public/dashboard') }}/images/users/user-1.jpg" class="img-fluid rounded-circle" />
                                    </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Hi, How are you? What about our next meeting</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">1 min ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="{{ asset('public/dashboard') }}/images/users/user-4.jpg" class="img-fluid rounded-circle"
                                            alt="" />
                                    </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Wow ! this admin looks good and awesome design</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all"> View all
                                <i class="fe-arrow-right"></i>
                            </a>

                        </div>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="{{ asset('public/dashboard') }}/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ms-1">
                                Richard <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                    <li class="dropdown notification-list">
                        <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                            <i class="fe-settings noti-icon"></i>
                        </a>
                    </li>
                </ul>
                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-sm">
                            <img src="{{ asset('public/dashboard') }}/images/logo-sm.png" alt="" height="44">
                            <!-- <span class="logo-lg-text-light">Codefox</span> -->
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/dashboard') }}/images/logo-dark.png" alt="" height="44">
                            <!-- <span class="logo-lg-text-light">U</span> -->
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <img src="{{ asset('public/dashboard') }}/images/logo-sm.png" alt="" height="44">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('public/dashboard') }}/images/logo-light.png" alt="" height="44">
                        </span>
                    </a>
                </div>
                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <!-- Mobile menu toggle (Horizontal Layout)-->
                        <a class="navbar-toggle nav-link" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li>
                            <a href="index.html">
                                <i class="fe-airplay"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="menu-title mt-2">Modules</li>
                        <!-- Products Module -->
                        <li>
                            <a href="#sidebarEmail" data-bs-toggle="collapse">
                                <i class="fe-mail"></i>
                                <span> Products </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ url('categories') }}">Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('products') }}">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('variations') }}">Variations</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('brands') }}">Brands</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('units') }}">Units</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('base_units') }}">Base Units</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('print_parcode') }}">Print Barcode</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Adjustments Module -->
                        <li>
                            <a href="{{ url('adjustments') }}">
                                <i class="fe-users"></i>
                                <span> Adjustments </span>
                            </a>
                        </li>
                        <!-- Quotations Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Quotations </span>
                            </a>
                        </li>
                        <!-- Purchases Module -->
                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="fe-book-open"></i>
                                <span> Purchases </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="pages-starter.html">Purchases</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Purchases Returns</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Sales Module -->
                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="fe-book-open"></i>
                                <span> Sales </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="pages-starter.html">Sales</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Sales Returns</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Transfers Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Transfers </span>
                            </a>
                        </li>
                        <!-- Expenses Module -->
                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="fe-book-open"></i>
                                <span> Expenses </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="pages-starter.html">Expenses</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Expenses Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Peoples Module -->
                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="fe-book-open"></i>
                                <span> Peoples </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="pages-starter.html">Suppliers</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Customers</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">Users</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Roles/Permissions Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Roles/Permissions </span>
                            </a>
                        </li>
                        <!-- Warehouse Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Warehouse </span>
                            </a>
                        </li>
                        <!-- Reports Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Reports </span>
                            </a>
                        </li>
                        <!-- Currencies Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Currencies </span>
                            </a>
                        </li>
                        <!-- Languages Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Languages </span>
                            </a>
                        </li>
                        <!-- Templates Module -->
                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                                <i class="fe-book-open"></i>
                                <span> Templates </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="pages-starter.html">Email Template</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">SMS Template</a>
                                    </li>
                                    <li>
                                        <a href="pages-timeline.html">SMS API</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Settings Module -->
                        <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            @yield('content')
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <script>document.write(new Date().getFullYear())</script> &copy; Developed by <a  href="#">HANSOL Technologies</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
</div>
<!-- END wrapper -->
<!-- Right Sidebar -->
<div class="right-bar">
<div data-simplebar class="h-100">
    <h6 class="fw-semibold px-3 m-0 py-2 font-16 bg-light">
        <span class="d-block py-2">Theme Settings</span>
    </h6>

    <div class="p-3">
        <div class="alert alert-warning" role="alert">
            <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
        </div>
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="light"
                id="light-mode-check" checked />
            <label class="form-check-label" for="light-mode-check">Light Mode</label>
        </div>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="color-scheme-mode" value="dark"
                id="dark-mode-check" />
            <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
        </div>

        <!-- Width -->
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="width" value="fluid" id="fluid-check" checked />
            <label class="form-check-label" for="fluid-check">Fluid</label>
        </div>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="width" value="boxed" id="boxed-check" />
            <label class="form-check-label" for="boxed-check">Boxed</label>
        </div>

        <!-- Menu positions -->
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="menus-position" value="fixed" id="fixed-check"
                checked />
            <label class="form-check-label" for="fixed-check">Fixed</label>
        </div>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="menus-position" value="scrollable"
                id="scrollable-check" />
            <label class="form-check-label" for="scrollable-check">Scrollable</label>
        </div>
        <!-- Left Sidebar-->
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="light"
                id="light-check" />
            <label class="form-check-label" for="light-check">Light</label>
        </div>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="dark"
                id="dark-check" checked />
            <label class="form-check-label" for="dark-check">Dark</label>
        </div>

        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="brand"
                id="brand-check" />
            <label class="form-check-label" for="brand-check">Brand</label>
        </div>

        <div class="form-check form-switch mb-3">
            <input type="checkbox" class="form-check-input" name="leftsidebar-color" value="gradient"
                id="gradient-check" />
            <label class="form-check-label" for="gradient-check">Gradient</label>
        </div>

        <!-- size -->
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="default"
                id="default-size-check" checked />
            <label class="form-check-label" for="default-size-check">Default</label>
        </div>

        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="condensed"
                id="condensed-check" />
            <label class="form-check-label" for="condensed-check">Condensed <small>(Small)</small></label>
        </div>

        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="leftsidebar-size" value="compact"
                id="compact-check" />
            <label class="form-check-label" for="compact-check">Compact <small>(Icon View)</small></label>
        </div>

        <!-- Topbar -->
        <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="topbar-color" value="dark"
                id="darktopbar-check" checked />
            <label class="form-check-label" for="darktopbar-check">Dark</label>
        </div>
        <div class="form-check form-switch mb-1">
            <input type="checkbox" class="form-check-input" name="topbar-color" value="light"
                id="lighttopbar-check" />
            <label class="form-check-label" for="lighttopbar-check">Light</label>
        </div>
        <div class="d-grid mt-4">
            <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            <a href="javascript:void(0)"
                class="btn btn-danger mt-2" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
        </div>
    </div>
</div> <!-- end simplebar-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- Vendor js -->
<script src="{{ asset('public/dashboard') }}/js/vendor.min.js"></script>
<!-- Plugins js-->
<script src="{{ asset('public/dashboard') }}/libs/apexcharts/apexcharts.min.js"></script>
<!-- Dashboar 1 init js-->
<script src="{{ asset('public/dashboard') }}/js/pages/dashboard-1.init.js"></script>
<!-- Plugins js-->
<script src="{{ asset('public/dashboard') }}/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{ asset('public/dashboard') }}/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="{{ asset('public/dashboard') }}/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="{{ asset('public/dashboard') }}/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Init js-->
<script src="{{ asset('public/dashboard') }}/js/pages/form-advanced.init.js"></script>
<script src="{{ asset('public/dashboard') }}/js/pages/form-pickers.init.js"></script>
 <!-- third party js -->
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/datatables.net-select/js/dataTables.select.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/pdfmake/build/pdfmake.min.js"></script>
 <script src="{{ asset('public/dashboard') }}/libs/pdfmake/build/vfs_fonts.js"></script>
 <!-- third party js ends -->
 <!-- Datatables init -->
 <script src="{{ asset('public/dashboard') }}/js/pages/datatables.init.js"></script>
<!-- App js-->
<script src="{{ asset('public/dashboard') }}/js/app.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (Session::has('message'))
    <script>
        Swal.fire({
            title: "{{ Session::get('title') }}",
            text: "{{ Session::get('message') }}",
            icon: "{{ Session::get('type') }}"
        });
    </script>
@endif
@stack('js')
</body>
</html>