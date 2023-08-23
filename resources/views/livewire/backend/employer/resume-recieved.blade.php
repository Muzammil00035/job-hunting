<style>
    .progress {
        width: 80px;
        height: 80px;
        /*line-height: 100px;*/
        background: none;
        margin: 0 auto;
        box-shadow: none;
        position: relative;
    }

    .progress:after {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 12px solid #fff;
        position: absolute;
        top: 0;
        left: 0;
    }

    .progress>span {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        top: 0;
        z-index: 1;
    }

    .progress .progress-left {
        left: 0;
    }

    .progress .progress-bar {
        width: 100%;
        height: 100%;
        background: none;
        border-width: 12px;
        border-style: solid;
        position: absolute;
        top: 0;
    }

    .progress .progress-left .progress-bar {
        left: 100%;
        border-top-right-radius: 80px;
        border-bottom-right-radius: 80px;
        border-left: 0;
        -webkit-transform-origin: center left;
        transform-origin: center left;
    }

    .progress .progress-right {
        right: 0;
    }

    .progress .progress-right .progress-bar {
        left: -100%;
        border-top-left-radius: 80px;
        border-bottom-left-radius: 80px;
        border-right: 0;
        -webkit-transform-origin: center right;
        transform-origin: center right;
        animation: loading-1 1.8s linear forwards;
    }

    .progress .progress-value {
        width: 90%;
        height: 90%;
        border-radius: 50%;
        background: #44484b;
        font-size: 14px;
        color: #fff;
        line-height: 80px;
        text-align: center;
        position: absolute;
        top: 5%;
        left: 5%;
    }

    .progress.blue .progress-bar {
        border-color: #049dff;
    }

    .progress.blue .progress-left .progress-bar {
        animation: loading-2 1.5s linear forwards 1.8s;
    }

    .progress.yellow .progress-bar {
        border-color: #fdba04;
    }

    .progress.yellow .progress-left .progress-bar {
        animation: loading-3 1s linear forwards 1.8s;
    }

    .progress.pink .progress-bar {
        border-color: #ed687c;
    }

    .progress.pink .progress-left .progress-bar {
        animation: loading-4 0.4s linear forwards 1.8s;
    }

    .progress.green .progress-bar {
        border-color: #1abc9c;
    }

    .progress.green .progress-left .progress-bar {
        animation: loading-5 1.2s linear forwards 1.8s;
    }

    textarea {
        height: 100% !important;
    }

    @keyframes loading-1 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    }

    @keyframes loading-2 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(144deg);
            transform: rotate(144deg);
        }
    }

    @keyframes loading-3 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }
    }

    @keyframes loading-4 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(36deg);
            transform: rotate(36deg);
        }
    }

    @keyframes loading-5 {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(126deg);
            transform: rotate(126deg);
        }
    }

    @media only screen and (max-width: 990px) {
        .progress {
            margin-bottom: 20px;
        }
    }
</style>

@section('Resume', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Resume Recieved</h2>
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
    {{-- {{dd($Resumes)}} --}}
    <div class="twm-right-section-panel candidate-save-job site-bg-gray">
        <!--Filter Short By-->
        {{-- <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
            <span class="woocommerce-result-count-left">Showing 2,150 Candidates</span>
        </div> --}}

        <div class="twm-candidates-grid-wrap">
            <div class="row">

                @forelse ($Resumes as $Resume)
                    <div class="col-lg-6 col-md-6">
                        <div class="twm-candidates-grid-style1 mb-5">
                            <div class="twm-media">
                                <div class="twm-media-pic">
                                    <img src="{{ asset('images/candidates/pic1.jpg') }}" alt="#">
                                </div>
                            </div>
                            <div class="twm-mid-content">
                                <a href="{{ route('Frontend.ApplicantProfile', ['id' => $Resume->USR_ID]) }}"
                                    class="twm-job-title">
                                    <h4>{{ $Resume->jobseeker->name }}</h4>
                                </a>
                                <p>{{ $Resume->job->Job_Title }}</p>
                                <a href="{{ url(!empty($Resume->jobseeker->Applicant_Resume) ? $Resume->jobseeker->Applicant_Resume:"") }}" target="blank"
                                    title="Download Resume" class="twm-view-prifile site-text-primary">
                                    <i class="fa fa-download"></i>
                                </a>
                                <a href="{{ route('Frontend.ApplicantProfile', ['id' => $Resume->USR_ID]) }}"
                                    class="twm-view-prifile site-text-primary">View Profile</a>

                                <div class="twm-fot-content">
                                    <a data-bs-toggle="modal" href="#InterviewResults" role="button"
                                        class="twm-candidate-address">
                                        <input hidden type="text" class="JOB-ID" value="{{ $Resume->JOB_ID }}">
                                        <input hidden type="text" class="USR-ID" value="{{ $Resume->USR_ID }}">
                                        <i class="feather-map-pin"></i>Interview Result</a>

                                </div>

                                <div class="twm-fot-content">
                                    <a data-bs-toggle="modal" href="#SelectedEmployeeEmail" role="button"
                                        class="twm-candidate-email">
                                        <input hidden type="text" class="JOB-ID" value="{{ $Resume->JOB_ID }}">
                                        <input hidden type="text" class="USR-ID" value="{{ $Resume->USR_ID }}">
                                        <i class="feather-email"></i>Send Email</a>

                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    NO Resume
                @endforelse

            </div>
        </div>
    </div>
</div>

<!--Login popup -->
<div class="modal fade twm-sign-up" id="InterviewResults" aria-hidden="true" aria-labelledby="InterviewResults"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
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

{{-- Send Email Pop For Selected Users --}}

<div class="modal fade twm-sign-up" id="SelectedEmployeeEmail" aria-hidden="true"
    aria-labelledby="SelectedEmployeeEmail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h2 class="modal-title" id="sign_up_popupLabel2">Send Email</h2>
                <p>Send a Zoom Link on email to get connected and for further process</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="px-5 d-none" id="success-message">
                
            </div>
            <div class="modal-body">
                <div class="row" id="">
                    <form method="POST" id="send-email-form">
                        {{ csrf_field() }}

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="emailText">Message</label>
                                <input type="hidden" class="email-job-id" value="">
                                <input type="hidden" class="email-user-id" value="">
                                <textarea class="form-control email-message" row="3"></textarea>

                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <button id="email-submit-button" class="form-control btn btn-primary"
                                    style="background-color:#0d6efd!important">Send</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>


<script>
    $('.twm-candidate-address').on('click', function() {
        var getJOBID = $(this).find('.JOB-ID').val();
        var getUSRID = $(this).find('.USR-ID').val();

        // Send an AJAX request
        $.get('{{ route('Get.Results') }}', {
                JOB_ID: getJOBID,
                USR_ID: getUSRID
            })
            .done(function(data) {
                $('#InterViewResults').html(data);
                // $('.carrier-all-request').DataTable();
            })
            .fail(function(data) {
                // Handle the error case
                console.log(data);
            });
    });

    $('.twm-candidate-email').on('click', function() {
        var getJOBID = $(this).find('.JOB-ID').val();
        var getUSRID = $(this).find('.USR-ID').val();

        $(".email-job-id").val(getJOBID);
        $(".email-user-id").val(getUSRID);

    });



    $('#send-email-form').on('submit', function(e) {
        e.preventDefault();

        $("#email-submit-button").html("Sending....")
        var getJOBID = $(".email-job-id").val();;
        var getUSRID = $(".email-user-id").val();;

        var message  = $(".email-message").val()
        $.post('{{ route('Frontend.ApplicantProfileEmail') }}', {
                _token: '{{ csrf_token() }}',
                job_id: getJOBID,
                user_id: getUSRID,
                message : message
            },
            function(data, status) {
                if (status == "success") {
                    $("#success-message").removeClass('d-none')
                    $("#success-message").html(`
                    <div class="alert alert-success">
                    Email Sent Successfully </div>`)
                }
                $("#email-submit-button").html("Send")

                setTimeout(() => {
                    window.location.reload();
                }, 1000);

            });

        // Send an AJAX request
        // $.get('{{ route('Get.Results') }}', {
        //         JOB_ID: getJOBID,
        //         USR_ID: getUSRID
        //     })
        //     .done(function(data) {
        //         $('#InterViewResults').html(data);
        //         // $('.carrier-all-request').DataTable();
        //     })
        //     .fail(function(data) {
        //         // Handle the error case
        //         console.log(data);
        //     });
    });
</script>
