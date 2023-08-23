<!-- HEADER START -->
<header class="site-header header-style-3 mobile-sider-drawer-menu">

    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container-fluid clearfix">

                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('Frontend.index') }}">
                            <img src="{{ asset('images/logo-dark.png') }}" alt="">
                        </a>
                    </div>
                </div>

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button"
                    class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-center">

                    <ul class=" nav navbar-nav">
                        <li class="has-child"><a href="{{ route('Frontend.index') }}">Home</a>
                        </li>
                        <li class="has-child"><a href="{{ route('Frontend.About') }}">About Us</a></li>
                        <li class="has-child"><a href="javascript:void(0);">Jobs</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('Frontend.JobListing') }}">All Jobs</a></li>
                                {{-- <li><a href="{{ route('Frontend.appliedJobs') }}">Apply Jobs</a></li> --}}
                            </ul>
                        </li>
                        <li class="has-child"><a href="{{ route('Frontend.FAQ') }}">FAQ's</a></li>
                        <li class="has-child"><a href="{{ route('Frontend.Contact') }}">Contact Us</a></li>
                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <div class="header-search">
                            <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                        </div>
                        {{-- @if(isset($page_name))
                        <div class="header-search">
                            <a href="#search" class="header-search-icon"><i class="feather-search"></i></a>
                        </div>
                        @endif --}}
                        
                    </div>
                    <div class="extra-cell">
                        <div class="header-nav-btn-section">

                            @if (Auth::guard('JobSeeker')->check())
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" href="{{ route('JobSeeker.Dashboard') }}" role="button">
                                        <i class="feather-log-in"></i> Dashboard
                                    </a>
                                </div>
                                <div class="twm-nav-btn-right">
                                    <a href="" class="twm-nav-post-a-job">
                                        <i class="feather-briefcase"></i> Jobs
                                    </a>
                                </div>
                            @elseif(Auth::guard('Employer')->check())
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" href="{{ route('Employer.Dashboard') }}" role="button">
                                        <i class="feather-log-in"></i> Dashboard
                                    </a>
                                </div>
                                <div class="twm-nav-btn-right">
                                    <a href="{{ route('Employer.JobPost') }}" class="twm-nav-post-a-job">
                                        <i class="feather-briefcase"></i> Job Post
                                    </a>
                                </div>
                            @else
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup"
                                        role="button">
                                        <i class="feather-user"></i> Sign Up
                                    </a>
                                </div>
                                <div class="twm-nav-btn-left">
                                    <a class="twm-nav-sign-up" data-bs-toggle="modal" href="#sign_up_popup2"
                                        role="button">
                                        <i class="feather-log-in"></i> Sign In
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>



            </div>


        </div>

        <!-- SITE Search -->
        <div id="search">
            <span class="close"></span>
            <form role="search" id="searchform" action="{{route('Frontend.JobListing')}}" method="get" class="radius-xl">
                <input class="form-control search-box" value="" name="search" type="search"
                    placeholder="Type to search" />
                <span class="input-group-append">
                    <button type="button" class="search-btn">
                        <i class="fa fa-paper-plane"></i>
                    </button>
                </span>
            </form>
            <div id="all-jobs"></div>
        </div>
    </div>








</header>
<!-- HEADER END -->
