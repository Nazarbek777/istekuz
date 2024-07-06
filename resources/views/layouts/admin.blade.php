<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin Panel | Istek®</title>
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
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png">


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
                <a href="/admin/dashboard" class="logo-light">
                    <img src="/assets/img/logo/logo1.png" alt="">
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
                        <a href="/admin/dashboard" class="menu-link waves-effect waves-light">
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

                        <li class="nav-link" id="theme-mode">
                            <i class="bx bx-moon font-size-24"></i>
                        </li>

                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="/admin-panel/assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                                <span class="ms-1 d-none d-md-inline-block">
                                    Admin <i class="mdi mdi-chevron-down"></i>
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
