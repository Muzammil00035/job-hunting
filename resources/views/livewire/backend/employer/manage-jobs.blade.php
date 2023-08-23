@section('ManageJobs', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Manage Jobs</h2>
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
<form>
    <!--Basic Information-->
    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Manage jobs</h4>
        </div>
        <div class="panel-body wt-panel-body m-b30 ">
            <div class="twm-D_table p-a20 table-responsive">
                <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Category</th>
                            <th>Job Types</th>
                            <th>Applications</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($Jobs == null)
                            <tr>
                                <td colspan="6" class="text-center">Jobs are not Posted</td>
                            </tr>
                        @endif

                        @foreach ($Jobs as $Job)
                            <tr>
                                <td>
                                    <div class="twm-bookmark-list">

                                        <div class="twm-mid-content">
                                            <a href="#" class="twm-job-title">
                                                <h4>{{ $Job->Job_Title }}</h4>
                                                <p class="twm-bookmark-address">
                                                    <i class="feather-map-pin"></i>{{ $Job->Job_Address }}
                                                </p>
                                            </a>

                                        </div>

                                    </div>
                                </td>
                                <td>{{ $Job->Job_Category }}</td>
                                <td>
                                    <div class="twm-jobs-category"><span
                                            class="twm-bg-green">{{ $Job->Job_Type }}</span></div>
                                </td>
                                <td><a href="javascript:" class="site-text-primary">{{ $Job->applicants_count }} Applied</a></td>
                                <td>
                                    <span class="text-clr-green2">Active</span>
                                </td>

                                <td>
                                    <div class="twm-table-controls">
                                        <ul class="twm-DT-controls-icon list-unstyled">
                                            <li>
                                                <a title="View profile" type="button" data-bs-toggle="tooltip"
                                                    data-bs-placement="top">
                                                    <span class="fa fa-eye"></span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('Employer.DeleteJob', ['id' => $Job->id]) }}" title="Delete" data-bs-toggle="tooltip" data-bs-placement="top">
                                                    <span class="fa fa-trash-alt"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Job Title</th>
                            <th>Category</th>
                            <th>Job Types</th>
                            <th>Applications</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</form>
