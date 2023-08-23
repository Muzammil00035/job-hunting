@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Applicant Jobs</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('Employer.Dashboard') }}">Home</a></li>
                        <li>Jobs Manager</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection
<div class="col-xl-9 col-lg-8 col-md-12 m-b30 w-100">
    <div class="product-filter-wrap d-flex justify-content-between align-items-center">
        <span class="woocommerce-result-count-left">Applied 250 jobs</span>
    </div>
    <div class="twm-right-section-panel candidate-save-job site-bg-gray">

        <div class="twm-jobs-list-wrap">
            <ul>

                @forelse ($Jobs as $Job)
                    <li>
                        <div class="twm-jobs-list-style1 mb-5">
                            <div class="twm-media">
                                <img src="{{ $Job->company->CMP_Logo ? $Job->company->CMP_Logo : asset('images/jobs-company/pic1.jpg') }}"
                                    alt="#">
                            </div>
                            <div class="twm-mid-content">
                                <a href="/Jobs/Jobs-List-Detail/{{ $Job->JOB_ID }}" class="twm-job-title">
                                    <h4>{{ $Job->job->Job_Title }}<span class="twm-job-post-duration">/ 1 days
                                            ago</span></h4>
                                </a>
                                <p class="twm-job-address">{{ $Job->job->Job_Address }}</p>
                                <a href="{{ $Job->job->Job_Website }}" class="twm-job-websites site-text-primary">View
                                    Website</a>
                            </div>
                            <div class="twm-right-content">
                                <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                <div class="twm-jobs-amount">Rs.
                                    {{ number_format(intval($Job->job->Job_Salary)) }} <span>/
                                        Month</span></div>
                                <a href="/Jobs/Jobs-List-Detail/{{ $Job->JOB_ID }}"
                                    class="twm-jobs-browse site-text-primary">Apply Job</a>
                            </div>
                        </div>
                    </li>
                @empty
                    No One Applied on This Job.
                @endforelse

            </ul>
        </div>
    </div>
</div>
