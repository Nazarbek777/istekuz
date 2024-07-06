<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin Panel | DORA®</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/fav/favicon-32x32.png">
    <script src="https://cdn.tiny.cloud/1/fue1smszaahitfvslyp73bv383xmg4xray62oa8cdh5jlsvw/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="/admin-panel/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="/admin-panel/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="/admin-panel/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/admin-panel/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/admin-panel/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="/admin-panel/assets/js/config.js"></script>
    <link href="/admin-panel/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/admin-panel/assets/css/icons.min.css" rel="stylesheet" type="text/css">


    <link href="/admin-panel/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/admin-panel/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <style>
        .uz,
        .ru,
        .en {
            display: none;
        }

        .btn_change_lang {
            background: inherit;
            border: 1px solid #775252;
            color: #704f4f;
            padding: 5px 10px;
        }

        .removeBtn {
            background: none;
            border: none;
            padding: 0;
            margin: 0;
            color: #346ee0;
        }

        .removeBtn {
            background: none;
            border: none;
            padding: 0;
            margin: 0;
            color: #346ee0;
        }

        .aaa {
            border: none;
        }
    </style>
    <script src="/admin-panel/assets/js/config.js"></script>


</head>
<style>

</style>


<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        <!-- ========== Left Sidebar ========== -->
        <div class="main-menu">
            <!-- Brand Logo -->
            <div class="logo-box">
                <!-- Brand Logo Light -->
                <a href="/" class="logo-light">
                    <img src="/admin-panel/assets/images/logo-light.png" alt="logo" class="logo-lg" height="28">
                    <img src="/assets/images/fav/favicon-32x32.png" alt="small logo" class="logo-sm" height="28">
                </a>

                <!-- Brand Logo Dark -->
                {{-- <a href="" class="logo-dark"> --}}
                {{-- <img src="/admin-panel/assets/images/logo-dark.png" alt="dark logo" class="logo-lg" height="28"> --}}
                {{-- <img src="/admin-panel/assets/images/logo-sm.png" alt="small logo" class="logo-sm" height="28"> --}}
                {{-- </a> --}}
            </div>

            <!--- Menu -->
            <div data-simplebar>
                <ul class="app-menu">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item">
                        <a href="#" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-home-smile"></i></span>
                            <span class="menu-text"> Bosh sahifa </span>
                            <span class="badge bg-primary rounded ms-auto">01</span>
                        </a>
                    </li>
                    <li class="menu-item">
                            <span class="menu-icon"></span>
                            <span class="menu-text"> Jadvallar </span>
                    </li>

                    <li class="menu-item">
                        <a href="{{ route('category.index')}}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Kategoriya </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('product.index')}}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Mahsulotlar </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('about.index')}}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Biz Haqimizda </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('news.index') }}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Yangiliklar </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('team.index') }}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Jamoa </span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('logo.index') }}" class="menu-link waves-effect waves-light">
                            <span class="menu-icon"><i class="bx bx-calendar"></i></span>
                            <span class="menu-text"> Logo </span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>


        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar">
                    <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Brand Logo -->
                        {{-- <div class="logo-box">
                        <!-- Brand Logo Light -->
                        <a href="/" class="logo-light">

                                <img src="/admin-panel/assets/images/logo-light.png" alt="logo" class="logo-lg" height="28">

                        </a>

                        <!-- Brand Logo Dark -->
                        <a href="/" class="logo-dark">

                                <img src="/admin-panel/assets/images/logo-dark.png" alt="logo" class="logo-lg" height="28">

                        </a>
                    </div> --}}

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <div class="row align-items-center flex-nowrap">
                                <div class="col-auto d-md-none"> <!-- Display only on mobile (<= 768px) -->
                                    <img src="/assets/images/fav/favicon-32x32.png" alt="" class="logo-lg" height="28">
                                </div>
                                <div class="col-auto">
                                    <i class="mdi mdi-menu"></i>
                                </div>
                            </div>
                        </button>

                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-4">

                        <li class="d-none d-md-inline-block">
                            <a class="nav-link" href="" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen font-size-24"></i>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-magnify font-size-24"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                                <form class="form-inline ml-3" action="{{ route('search') }}" method="GET">
                                    <input type="search" name="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>



                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell font-size-24"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-size-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-1" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-size-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp
                                                        <small class="fw-normal text-muted ms-1">1 min ago</small>
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar
                                                        commented on
                                                        Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user
                                                        registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="/admin-panel/assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Cristina Pride
                                                        <small class="fw-normal text-muted ms-1">1 day ago</small>
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What
                                                        about
                                                        our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-size-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar
                                                        commented on
                                                        Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-1">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="/admin-panel/assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-size-14">Karen Robinson
                                                    </h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks
                                                        good
                                                        and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/admin-panel/assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    Jamie D. <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">


                                <!-- item-->

                                <i class="fe-log-out"></i>
                                <span>
                                    <form method="post" action="{{ route('logout') }}">
                                        @csrf
                                        <button class=" btn btn-danger menu-text">Log Out</button>
                                    </form>
                                </span>


                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            @yield('content')

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                © Dashtrap
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                                <p class="mb-0">Design & Develop by <a href="https://dora.uz/" target="_blank">Dora</a>
                                </p>
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

    <!-- App js -->
    <script src="/admin-panel/assets/js/vendor.min.js"></script>
    <script src="/admin-panel/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="/admin-panel/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="/admin-panel/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="/admin-panel/assets/libs/morris.js/morris.min.js"></script>

    <script src="/admin-panel/assets/libs/raphael/raphael.min.js"></script>


    <script src="/admin-panel/assets/js/vendor.min.js"></script>
    <script src="/admin-panel/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="/admin-panel/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="/admin-panel/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="/admin-panel/assets/libs/morris.js/morris.min.js"></script>

    <script src="/admin-panel/assets/libs/raphael/raphael.min.js"></script>

    <script src="/admin-panel/assets/js/vendor.min.js"></script>
    <script src="/admin-panel/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="/admin-panel/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="/admin-panel/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="/admin-panel/assets/libs/morris.js/morris.min.js"></script>

    <script src="/admin-panel/assets/libs/raphael/raphael.min.js"></script>


    <!-- Dashboard init-->

    <script src="/admin-panel/assets/js/pages/dashboard.js"></script>


    <script>
        function changeLang(lang) {
            console.log('foiuewgf8yew')
            const classes = ['uz', 'ru', 'en'];
            classes.forEach(cls => {
                const elements = document.querySelectorAll(`.${cls}`);
                elements.forEach(element => {
                    element.style.display = cls === lang ? 'block' : 'none';
                });
            });
        }
        changeLang('uz')
    </script>


</body>

</html>
