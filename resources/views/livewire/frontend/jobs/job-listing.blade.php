<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">The Most Exciting Jobs</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                    <li>Registerd Jobs</li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->


<!-- OUR BLOG START -->
<div class="section-full p-t120  p-b90 site-bg-white">


    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <!--Block one-->
                    @forelse ($JobsList as $Job)
                        <div class="col-lg-6 col-md-12 m-b30">

                            <div class="twm-jobs-grid-style1">
                                <div class="twm-media">
                                    <img src="{{ $Job->company->CMP_Logo ? $Job->company->CMP_Logo : asset('images/jobs-company/pic1.jpg') }}"
                                        alt="#">
                                </div>
                                <span class="twm-job-post-duration">1 days ago</span>
                                <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                <div class="twm-mid-content">
                                    <a href="/Jobs/Jobs-List-Detail/{{ $Job->id }}" class="twm-job-title">
                                        <h4>{{ $Job->Job_Title }}</h4>
                                    </a>
                                    <p class="twm-job-address">{{ $Job->Job_Address }}</p>
                                    <a href="{{ $Job->Job_Website }}"
                                        class="twm-job-websites site-text-primary">Company
                                        Website</a>
                                </div>
                                <div class="twm-right-content">

                                    <div class="twm-jobs-amount">Rs.
                                        {{ number_format(intval($Job->Job_Salary)) }} <span>/
                                            Month</span></div>
                                    <a href="/Jobs/Jobs-List-Detail/{{ $Job->id }}"
                                        class="twm-jobs-browse site-text-primary">Browse
                                        Job</a>
                                </div>
                            </div>

                        </div>
                    @empty
                        <h1>There is no Jobs</h1>
                    @endforelse

                </div>



                {{-- <div class="pagination-outer">
                    <div class="pagination-style1">
                        <ul class="clearfix">
                            <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i>
                                    </span></a></li>
                            <li><a href="javascript:;">1</a></li>
                            <li class="active"><a href="javascript:;">2</a></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i>
                                    </span></a></li>
                        </ul>
                    </div>
                </div> --}}

            </div>

        </div>
    </div>
</div>
<!-- OUR BLOG END -->
