@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Post A Job</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('Employer.Dashboard') }}">Home</a></li>
                        <li>Job Post</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection

<form action="{{ route('Post.Meting') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!--Basic Information-->
    <div class="panel panel-default">
        <div class="panel-heading wt-panel-heading p-a20">
            <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
        </div>
        <div class="panel-body wt-panel-body p-a20 m-b30 ">

            <div class="row">
                <!--Job title-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Job Title</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Topic" type="text" placeholder="Topic"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Type</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Type" type="text" placeholder="Topic"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Type</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Duration" type="text" placeholder="Duration"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Type</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Agenda" type="text" placeholder="Agenda"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Type</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="host_video" type="number" min="1" placeholder="Host Video"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Type</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="participant_video" type="number" min="1" placeholder="Participant Video"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>

                <!--Email Address-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Email Address</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Email" type="email" required
                                   placeholder="Devid@example.com"
                                   value="{{ !empty($Company_Info->CMP_Email)? $Company_Info->CMP_Email : '' }}">
                            <i class="fs-input-icon fas fa-at"></i>
                        </div>
                    </div>
                </div>

                <!--Start Date-->
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Start Date</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="StartTime"
                                   required type="datetime-local" placeholder="mm/dd/yyyy" value="">
                            <i class="fs-input-icon fa fa-calendar"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button m-r5">Publish Job</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</form>
