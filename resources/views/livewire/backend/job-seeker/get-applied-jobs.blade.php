@section('AppliedJob', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Applied jobs</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('JobSeeker.Dashboard') }}">Home</a></li>
                        <li>Applied Jobs</li>
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

        <div class="twm-jobs-list-wrap">
            <ul>
                @forelse ($ApplicantJobs as $Applicant)
                    <li>
                        <div class="twm-jobs-list-style1 mb-5">
                            <div class="twm-media">
                                <img src="{{ $Applicant->job->company->CMP_Logo }}" alt="#">
                            </div>
                            <div class="twm-mid-content">
                                <a href="job-detail.html" class="twm-job-title">
                                    <h4>{{ $Applicant->job->Job_Title }}<span class="twm-job-post-duration">/ 1 days
                                            ago</span></h4>
                                </a>
                                <p class="twm-job-address">{{ $Applicant->job->company->CMP_Address }}</p>
                                <a href="{{ $Applicant->job->company->CMP_Website }}"
                                    class="twm-job-websites site-text-primary">View Website</a>
                            </div>
                            <div class="twm-right-content">
                                <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                <div class="twm-jobs-amount">Rs.
                                    {{ number_format(intval($Applicant->job->Job_Salary)) }}
                                    <span>/ Month</span>
                                </div>
                                <a data-bs-toggle="modal" href="#InterviewResults" role="button"
                                    class="twm-jobs-browse site-text-primary">
                                    <input hidden type="text" class="Resume-ID" value="{{ $Applicant->job->id }}">
                                    Response</a>
                            </div>
                        </div>
                    </li>
                @empty
                    Not Applied on Any JOBS
                @endforelse
            </ul>
        </div>
    </div>
</div>

<!--Login popup -->
<div class="modal fade twm-sign-up" id="InterviewResults" aria-hidden="true" aria-labelledby="InterviewResults"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">


            <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel2">Interview Results</h2>
                <p>Login and get access to all the features of Job Hunters</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row" id="InterViewResults">

                </div>
            </div>
            <div class="modal-footer">
                <span class="modal-f-title">Candidate Submit Through Online</span>
            </div>

        </div>
    </div>
</div>

<script>
    $('.twm-jobs-browse').on('click', function() {
        var getResumeID = $(this).find('.Resume-ID').val();
        // $(".get_Order_ID").html(getResumeID);
        // $(".get_Listed_ID").val(getResumeID);

        $.ajax({
            url: '{{ route('Get.Results') }}',
            type: 'GET',
            data: {
                'JOB_ID': getResumeID
            },
            success: function(data) {
                $('#InterViewResults').html(data);
                // $('.carrier-all-request').DataTable();
            }
        });

    });
</script>
