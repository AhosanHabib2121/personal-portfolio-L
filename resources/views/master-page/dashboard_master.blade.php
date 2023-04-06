<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 17:04:03 GMT -->
<head>

        <meta charset="utf-8" />
        <title>{{env('APP_NAME')}} - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('upload-photos/favicon')}}/{{App\Models\Logo_and_favicon::first()->favicon}}">

        <!-- App css -->
        <link href="{{asset('deshboard-file')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- custom_range_wrap_bubble css -->
        <link href="{{asset('deshboard-file')}}/css/custom_range_wrap_bubble.css" rel="stylesheet" type="text/css">

        <!-- datatable-plugin -->
        <link href="{{asset('deshboard-file')}}/libs/datatable-plugin/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- icons -->
        <link href="{{asset('deshboard-file')}}/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        {{-- <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>

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

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('deshboard-file')}}/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="{{asset('deshboard-file')}}/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </li> --}}

                        {{-- <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li> --}}

                        {{-- <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
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
                                            <img src="{{asset('deshboard-file')}}/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                            <img src="{{asset('deshboard-file')}}/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
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
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>

                            </div>
                        </li> --}}

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('upload-photos/admin-profile-photo')}}/{{auth()->user()->profile_photo}}" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    {{auth()->user()->name}} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <a href="{{route('index')}}" class="dropdown-item notify-item">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <span>Visit Website</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('admin_profile.page')}}" class="dropdown-item notify-item">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>Profile</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>

                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="{{asset('upload-photos/logo')}}/{{App\Models\Logo_and_favicon::first()->logo_image}}" alt="" height="16">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <h4 class="page-title-main">
                                @yield('title_bar')
                            </h4>
                        </li>

                    </ul>

                    <div class="clearfix"></div>

            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                     <!-- User box -->
                    <div class="user-box text-center">

                        <img src="{{asset('upload-photos/admin-profile-photo')}}/{{auth()->user()->profile_photo}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">{{auth()->user()->name}}</a>
                                <div class="dropdown-menu user-pro-dropdown">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-user me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-settings me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-lock me-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fe-log-out me-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </div>

                        <p class="text-muted left-user-info">Admin</p>

                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">
                            <li>
                                <a href="{{route('home')}}">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            {{-- Banner-area --}}
                            <li>
                                <a href="#banner_area" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $banner_area_id=App\Models\Banner_area::first();
                                    @endphp
                                    <span>Banner Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="banner_area">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('update.page',$banner_area_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- About-area --}}
                            <li>
                                <a href="#about_area" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $about_area_id=App\Models\About_area::first();
                                    @endphp
                                    <span>About area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="about_area">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('about_update.page',$about_area_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Self_information-area --}}
                            <li>
                                <a href="#self_information_area" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $self_information_area_id=App\Models\Self_information::first();
                                    @endphp
                                    <span>Self information-area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="self_information_area">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('self_info_update.page',$self_information_area_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Education_part --}}
                            <li>
                                <a href="#education_part" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Education Part</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="education_part">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('educations.create')}}">Create</a>
                                            <a href="{{route('educations.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Experiance_part --}}
                            <li>
                                <a href="#experianc_part" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Experianc Part</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="experianc_part">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('experiance.create')}}">Create</a>
                                            <a href="{{route('experiance.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Logo_and_favicon --}}
                            <li>
                                <a href="#logo_and_favicon" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $logo_and_favicon_id=App\Models\Logo_and_favicon::first();
                                    @endphp
                                    <span>Logo & favicon</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="logo_and_favicon">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('logo_favicon_update.page',$logo_and_favicon_id->id)}}">Logo & Favicon Update</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Social icons area --}}
                            <li>
                                <a href="#social_icons" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Social Icons</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="social_icons">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('social_icons.create')}}">Create</a>
                                            <a href="{{route('social_icons.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Services area --}}
                            <li>
                                <a href="#services" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Services Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="services">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('services.create')}}">Create</a>
                                            <a href="{{route('services.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Skills area --}}
                            <li>
                                <a href="#skill" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Skills Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="skill">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('skills_create')}}">Skills Create</a>
                                            <a href="{{route('skills_index')}}">Skills Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Category area --}}
                            <li>
                                <a href="#category" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Category</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="category">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('category.create')}}">Create</a>
                                            <a href="{{route('category.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Portfolio_area area --}}
                            <li>
                                <a href="#portfolio_area" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Portfolio Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="portfolio_area">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('potfolio.create')}}">Create</a>
                                            <a href="{{route('potfolio.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Hire_text --}}
                            <li>
                                <a href="#hire_text" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $hire_text_id=App\Models\Hire_text::first();
                                    @endphp
                                    <span>Hire Text</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="hire_text">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('hire_update.page',$hire_text_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Testimonial_area --}}
                            <li>
                                <a href="#testimonial_area" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Testimonial Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="testimonial_area">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('testimonial.create')}}">Create</a>
                                            <a href="{{route('testimonial.index')}}">Index</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                             {{-- contact_description-area --}}
                             <li>
                                <a href="#contact_description" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $contact_description_area_id=App\Models\Contact_description::first();
                                    @endphp
                                    <span>Contact Descr Area</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="contact_description">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('contact_desc_update.page',$contact_description_area_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                             {{-- contact_form-area --}}
                             <li>
                                <a href="#contact_form" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    <span>Contact</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="contact_form">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('contact_data')}}">Form data</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- download cv part --}}
                            <li>
                                <a href="#cv_download" data-bs-toggle="collapse">
                                    <i class="fa fa-folder" aria-hidden="true"></i>
                                    @php
                                        $cvdownload_id=App\Models\Cvdownload::first();
                                    @endphp
                                    <span>CV</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="cv_download">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('cv_update.page',$cvdownload_id->id)}}">Update Page</a>
                                        </li>
                                    </ul>
                                </div>
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
                <div class="content">
                    <div class="container">
                        @yield('main_content')
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="#">Coderthemes</a>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </footer>
            <!-- end Footer -->

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>

                <!-- Tab panes -->
                <div class="tab-content pt-0">

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="{{asset('deshboard-file')}}/libs/jquery/jquery.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/simplebar/simplebar.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/node-waves/waves.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/feather-icons/feather.min.js"></script>

        <!-- knob plugin -->
        <script src="{{asset('deshboard-file')}}/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="{{asset('deshboard-file')}}/libs/morris.js06/morris.min.js"></script>
        <script src="{{asset('deshboard-file')}}/libs/raphael/raphael.min.js"></script>

        <!-- Dashboar init js-->
        <script src="{{asset('deshboard-file')}}/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="{{asset('deshboard-file')}}/js/app.min.js"></script>

        <!-- datatable-plugin-->
        <script src="{{asset('deshboard-file')}}/libs/datatable-plugin/js/jquery.dataTables.min.js"></script>

        {{-- dashboard_js_code area start here --}}
        @yield('dashboard_js_code')
        {{-- dashboard_js_code area end here --}}

    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Aug 2022 17:06:07 GMT -->
</html>
