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
    </head>

    <script>
        function zoom() {
            document.body.style.zoom = "85%"
        }
    </script>

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
        @if (isset($page_name))
        @include('layouts.header' , ['page_name'=>$page_name])

        @else
        @include('layouts.header')

        @endif

        <!-- CONTENT START -->
        <div class="page-content">

            @yield('InnerBanner')


            <!-- OUR BLOG START -->
            <div class="section-full p-t120  p-b90 site-bg-white">


                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-12 rightSidebar m-b30">

                            <div class="side-bar-st-1">

                                <div class="twm-candidate-profile-pic">

                                    <img src="{{ asset('images/jobs-company/pic1.jpg') }}" alt="">
                                    <div class="upload-btn-wrapper">

                                        <div id="upload-image-grid"></div>
                                        <button class="site-button button-sm">Upload Photo</button>
                                        <input type="file" name="myfile" id="file-uploader"
                                            accept=".jpg, .jpeg, .png">
                                    </div>

                                </div>

                                <div class="twm-mid-content text-center">
                                    <a href="" class="twm-job-title">
                                        <h4>{{ Auth::guard('Employer')->user()->name }}</h4>
                                    </a>
                                    <p>IT Contractor</p>
                                </div>

                                <div class="twm-nav-list-1">
                                    <ul>
                                        <li class="@yield('Dashboard')"><a href="{{ route('Employer.Dashboard') }}"><i
                                                    class="fa fa-user"></i> Company Profile</a></li>
                                        <li class="@yield('ManageJobs')"><a href="{{ route('Employer.ManageJobs') }}"><i
                                                    class="fa fa-suitcase"></i>
                                                Manage Jobs</a></li>
                                        <li class="@yield('JobPost')"><a href="{{ route('Employer.JobPost') }}"><i
                                                    class="fa fa-book-reader"></i>
                                                Post A Jobs</a></li>
                                        <li class="@yield('Resume')"><a href="{{ route('Get.All.Resume') }}"><i
                                                    class="fa fa-receipt"></i>
                                                Resume Recieved</a></li>
                                        <li><a href="{{ route('Employer.Logout') }}"><i
                                                    class="fa fa-share-square"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-9 col-lg-8 col-md-12 m-b30">
                            {{ $slot }}
                        </div>

                    </div>
                </div>
            </div>
            <!-- OUR BLOG END -->



        </div>
        <!-- CONTENT END -->

        @include('layouts.footer')

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

    <script>
        $('.search-box').on('keyup', function() {
            var query = $(this).val();

            $.ajax({
                url: '{{ route('Get.Jobs') }}',
                type: 'GET',
                data: {
                    'name': query
                },
                success: function(data) {
                    $('#all-jobs').html(data);
                    // $('.carrier-all-request').DataTable();
                }
            });

        });
        $(document).on('click', '#all-jobs li', function() {
            var value = $(this).text();
            $('search-box').val(value);
            $('#all-jobs').html("");
        });
        function onlyNumberKey(evt) {
            // Only ASCII character in that range allowed
            var ASCIICode = evt.which ? evt.which : evt.keyCode;
            return !(ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57));

        }
    </script>

</body>

</html>
