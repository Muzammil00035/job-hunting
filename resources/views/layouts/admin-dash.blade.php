<!DOCTYPE html>

<html lang="en">

<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <!-- META -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="author" content="Yasir Amin" />
        <meta name="robots" content="" />
        <meta name="description" content="" />

        <!-- FAVICONS ICON -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

        <!-- PAGE TITLE HERE -->
        <title>Job Hunting Platform | Final Year Project</title>

        <!-- MOBILE SPECIFIC -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/feather.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/lc_lightbox.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/select.bootstrap5.min.css') }}">
        <!-- DASHBOARD select bootstrap  STYLE SHEET  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/scrollbar.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        @livewireStyles
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function zoom() {
                document.body.style.zoom = "85%"
            }
        </script>
    </head>

<body onload="zoom()">

    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">

        <header id="header-admin-wrap" class="header-admin-fixed">

            <!-- Header Start -->
            <div id="header-admin">
                <div class="container">

                    <!-- Left Side Content -->
                    <div class="header-left">
                        <div class="nav-btn-wrap">
                            <a class="nav-btn-admin" id="sidebarCollapse">
                                <span class="fa fa-angle-left"></span>
                            </a>
                        </div>
                    </div>
                    <!-- Left Side Content End -->

                    <!-- Right Side Content -->
                    <div class="header-right">
                        <ul class="header-widget-wrap">

                            <!--Account-->
                            <li class="header-widget">
                                <div class="dashboard-user-section">
                                    <div class="listing-user">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle"
                                                id="ID-ACCOUNT_dropdown" data-bs-toggle="dropdown">
                                                <div class="user-name text-black">
                                                    <span>
                                                        <img src="{{ asset('images/user-avtar/pic4.jpg') }}"
                                                            alt="">
                                                    </span>
                                                    @if (Auth::guard('admin')->check())
                                                        Hi {{ Auth::guard('admin')->user()->name }}
                                                    @elseif(Auth::guard('Company')->check())
                                                        {{ Auth::guard('Company')->user()->name }}
                                                    @endif
                                                    {{-- {{ Auth::guard('admin')->user()->name }} --}}
                                                </div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="ID-ACCOUNT_dropdown">

                                                <ul>
                                                    <li><a href="{{ route('Admin.Dashboard') }}"><i
                                                                class="fa fa-home"></i>Dashboard</a></li>
                                                    <li><a href="dash-my-profile.html"><i class="fa fa-user"></i>
                                                            Profile</a></li>
                                                    @if (Auth::guard('admin')->check())
                                                        <li><a href="{{ route('Admin.Logout') }}"><i
                                                                class="fa fa-share-square"></i>
                                                            Logout</a></li>
                                                    @elseif(Auth::guard('Company')->check())
                                                        <li><a href="{{ route('Company.Logout') }}"><i
                                                                class="fa fa-share-square"></i>
                                                            Logout</a></li>
                                                    @endif

                                                </ul>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Right Side Content End -->

                </div>
            </div>
            <!-- Header End -->

        </header>

        <!-- Sidebar Holder -->
        <nav id="sidebar-admin-wraper">
            <div class="page-logo">
                <a href="{{ route('Admin.Dashboard') }}"><img src="{{ asset('images/logo-dark.png') }}"
                        alt=""></a>
            </div>

            <div class="admin-nav scrollbar-macosx">
                <ul>
                    <li class="active">
                        <a href="{{ route('Admin.Dashboard') }}"><i class="fa fa-home"></i><span
                                class="admin-nav-text">Dashboard</span></a>
                    </li>

                    <li>
                        <a href="dash-company-profile.html"><i class="fa fa-user-tie"></i><span
                                class="admin-nav-text">Company Profile</span></a>
                    </li>

                    <li>
                        <a href="javascript:"><i class="fa fa-suitcase"></i><span
                                class="admin-nav-text">Jobs</span></a>
                        <ul class="sub-menu">
                            <li> <a href="dash-post-job.html"><span class="admin-nav-text">Post a New Jobs</span></a>
                            </li>
                            <li> <a href="dash-manage-jobs.html"><span class="admin-nav-text">Manage Jobs</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="dash-candidates.html"><i class="fa fa-user-friends"></i><span
                                class="admin-nav-text">Candidates</span></a>
                    </li>
                    <li>
                        <a href="dash-bookmark.html"><i class="fa fa-bookmark"></i><span
                                class="admin-nav-text">Bookmark Resumes</span></a>
                    </li>

                    <li>
                        <a href="dash-package.html"><i class="fa fa-money-bill-alt"></i><span
                                class="admin-nav-text">Packages</span></a>
                    </li>

                    <li>
                        <a href="javascript:"><i class="fa fa-envelope"></i><span class="admin-nav-text">Messages
                                <sup class="twm-msg-noti">5</sup></span></a>
                        <ul class="sub-menu">
                            <li> <a href="dash-messages.html"><span class="admin-nav-text">MSG Style-1</span></a></li>
                            <li> <a href="dash-messages_2.html"><span class="admin-nav-text">MSG Style-2</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="dash-resume-alert.html"><i class="fa fa-bell"></i><span
                                class="admin-nav-text">Resume Alerts</span></a>
                    </li>

                    <li>
                        <a href="dash-my-profile.html"><i class="fa fa-user"></i><span class="admin-nav-text">My
                                Profile</span></a>
                    </li>

                    <li>
                        <a href="dash-change-password.html"><i class="fa fa-fingerprint"></i><span
                                class="admin-nav-text">Change Password</span></a>
                    </li>

                    <li>
                        <a href="javascript:" data-bs-toggle="modal" data-bs-target="#delete-dash-profile"><i
                                class="fa fa-trash-alt"></i><span class="admin-nav-text">Delete Profile</span></a>
                    </li>

                    <li>
                        <a href="javascript:" data-bs-toggle="modal" data-bs-target="#logout-dash-profile"><i
                                class="fa fa-share-square"></i><span class="admin-nav-text">Logout</span></a>
                    </li>

                </ul>
            </div>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                {{ $slot }}

            </div>

        </div>

        <!--Delete Profile Popup-->
        <div class="modal fade twm-model-popup" id="delete-dash-profile" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title">Do you want to delete your profile?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                        <button type="button" class="site-button outline-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>


        <!--Logout Profile Popup-->
        <div class="modal fade twm-model-popup" id="logout-dash-profile" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title">Do you want to Logout your profile?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button" data-bs-dismiss="modal">No</button>
                        <button type="button" class="site-button outline-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- JAVASCRIPT  FILES ========================================= -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
    <script src="{{ asset('js/lc_lightbox.lite.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollbar.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    @livewireScripts
</body>

</html>
