@section('JobAlert', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Jobs Alert</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('JobSeeker.Dashboard') }}">Home</a></li>
                        <li>Job Alert</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection

<div class="col-xl-9 col-lg-8 col-md-12 m-b30">

    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
        <!--Filter Short By-->
        <div class="product-filter-wrap d-flex justify-content-between align-items-center">
            <span class="woocommerce-result-count-left">Job Alerts</span>
        </div>

        <div class="table-responsive">
            <table class="table twm-table table-striped table-borderless">
                <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Jobs Category</th>
                    <th>Jobs Type</th>
                    <th>Jobs Salary</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @forelse($JobsList as $Job)
                    <tr>
                        <td>{{ $Job->Job_Title }}</td>
                        <td>{{ $Job->Job_Category }}</td>
                        <td>{{ $Job->Job_Type }}</td>
                        <td>{{ number_format((int) $Job->Job_Salary) }}</td>
                        <td>{{ date('F d, Y', strtotime($Job->Job_EDate)) }}</td>
                        <td>
                            <a target="_blank" href="{{ route('Frontend.JobListingDetail', ['id' => $Job->id]) }}" role="button" class="custom-toltip">
                                <span class="fa fa-eye"></span>
                                <span class="custom-toltip-block">View</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    No Jobs Found
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
