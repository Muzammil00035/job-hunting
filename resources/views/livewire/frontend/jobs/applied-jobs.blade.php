<!-- INNER PAGE BANNER -->
<div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
    <div class="overlay-main site-bg-white opacity-01"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <div class="banner-title-outer">
                <div class="banner-title-name">
                    <h2 class="wt-title">Apply For This Job</h2>
                </div>
            </div>
            <!-- BREADCRUMB ROW -->

            <div>
                <ul class="wt-breadcrumb breadcrumb-style-2">
                    <li><a href="{{ route('Frontend.index') }}">Home</a></li>
                    <li>Apply For This Job</li>
                </ul>
            </div>

            <!-- BREADCRUMB ROW END -->
        </div>
    </div>
</div>
<!-- INNER PAGE BANNER END -->

<!-- Employer Account START -->
<div class="section-full p-t120  p-b90 site-bg-white bg-cover twm-ac-fresher-wrap"
    style="background-image:url({{ asset('images/background/pattern.jpg') }})">
    <span class="twm-section-bg-img">
        <img src="{{ asset('images/reg-bg2.png') }}" alt="">
    </span>


    <div class="container">
        <div class="row d-flex justify-content-center">

            <div class="col-lg-10 col-md-12">
                <div class="twm-right-section-panel-wrap2">
                    <!--Filter Short By-->
                    <div class="twm-right-section-panel site-bg-primary">

                        <!--Basic Information-->
                        <div class="panel panel-default">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0">Register as Professional</h4>
                            </div>

                            <div class="panel-body wt-panel-body p-a20 ">

                                @if (!empty($authUser))


                                    <div class="twm-tabs-style-1">
                                        <ul class="nav nav-tabs" id="myTab3" role="tablist">

                                            <li class="nav-item">
                                                <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#Personal" type="button" role="tab">Personal
                                                </button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#Employment" type="button"
                                                    role="tab">Employment
                                                </button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#Education" type="button" role="tab">Education
                                                </button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#Test"
                                                    type="button" role="tab">Interview Questions
                                                </button>
                                            </li>

                                            <li class="nav-item">
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#Subjective" type="button" role="tab">Interview
                                                    Questions II
                                                </button>
                                            </li>

                                        </ul>
                                        <form action="{{ route('Job.Request.Post') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="JOB_ID" value="{{ $JOB_ID }}">
                                            <input type="hidden" name="EMP_ID" value="{{ $EMP_ID }}">
                                            <div class="tab-content" id="myTab3Content">
                                                <div class="tab-pane fade show active" id="Personal">

                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Your Name</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control" name="Applicant_Name"
                                                                        type="text" value="{{$authUser->name}}" placeholder="Devid Smith"
                                                                       disabled required>
                                                                    <i class="fs-input-icon fa fa-user "></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Email Address</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control" name="Applicant_Email"
                                                                        type="email" placeholder="Devid@example.com"
                                                                        disabled autocomplete="off" value="{{$authUser->email}}" required>
                                                                    <i class="fs-input-icon fas fa-at"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Create Password</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Password" autocomplete="off"
                                                                        type="password" placeholder="Create Password"
                                                                        required>
                                                                    <i class="fs-input-icon fas fa-asterisk"></i>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Phone Number</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control phone-number"
                                                                        name="Applicant_Phone" type="text"
                                                                        disabled placeholder="(251) 1234-456-7890" value="{{$authUser->phone}}" required>
                                                                    <i class="fs-input-icon fa fa-phone-alt"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Address" type="text"
                                                                        placeholder="Tell us about your current city"
                                                                        disabled  value="{{$authUser->Full_Address}}"
                                                                        required>
                                                                    <i class="fs-input-icon fa fa-globe-americas"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group city-outer-bx has-feedback">
                                                                <label>Upload Your Resume</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Resume" type="file"
                                                                        accept="application/pdf" required>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="Employment">
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Current Desination*</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Designation" type="text"
                                                                        placeholder="Your Job Title">
                                                                    <i class="fs-input-icon fa fa-address-card "></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Current Company*</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_CMP_Address" type="text"
                                                                        placeholder="Where you are currently working">
                                                                    <i class="fs-input-icon fas fa-building"></i>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Working_Since</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control" name="Job_SDate"
                                                                        required type="date"
                                                                        placeholder="mm/dd/yyyy">
                                                                    <i class="fs-input-icon fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <label>Duration of Notice Period</label>
                                                                <div class="ls-inputicon-box">
                                                                    <select class="wt-select-box selectpicker"
                                                                        data-live-search="true" name="Notice_Period"
                                                                        title="" id="s-Days_1"
                                                                        data-bv-field="size">
                                                                        <option class="bs-title-option"
                                                                            value="">
                                                                            Days
                                                                        </option>
                                                                        <option value="05 Days">05 Days</option>
                                                                        <option value="10 Days">10 Days</option>
                                                                        <option value="15 Days">15 Days</option>
                                                                        <option value="30 Days">30 Days</option>
                                                                        <option value="2 Months">2 Months</option>
                                                                        <option value="3 Months">3 Months</option>
                                                                    </select>
                                                                    <i class="fs-input-icon fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Skills</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control" type="text"
                                                                        name="Applicant_Skills"
                                                                        value="Finance, Sales, Retail, Engineering">
                                                                    <i class="fs-input-icon fas fa-asterisk"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Your Role</label>
                                                                <div class="ls-inputicon-box input_fields_custom">
                                                                    <input class="form-control" name="Applicant_Role"
                                                                        type="text"
                                                                        placeholder="Your Role in Current Company">
                                                                    <i class="fs-input-icon fa fa-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="Education">

                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Highest Qualification</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Qualification" type="text"
                                                                        placeholder="Your Highest Qualification">
                                                                    <i class="fs-input-icon fa fa-user-graduate"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>Specialization</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Specilization" type="text"
                                                                        placeholder="Your Specialization">
                                                                    <i class="fs-input-icon fas fa-asterisk"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                                            <div class="form-group">
                                                                <label>University/College</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_College" type="text"
                                                                        placeholder="University/College">
                                                                    <i class="fs-input-icon fa fa-building"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label>Passing Year</label>
                                                                <div class="ls-inputicon-box">
                                                                    <input class="form-control"
                                                                        name="Applicant_Passing" required
                                                                        type="date" placeholder="mm/dd/yyyy">
                                                                    <i class="fs-input-icon fa fa-calendar"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="Test">

                                                    <div class="row">

                                                        @php
                                                            $i = 0;
                                                        @endphp
                                                        @foreach ($Job_Objective as $Job)
                                                            <input type="hidden"
                                                                name="Correct_Answers[{{ $i }}]"
                                                                value="{{ $Job->is_Correct }}">
                                                            <input type="hidden" name="QA_OID[{{ $i }}]"
                                                                value="{{ $Job->id }}">
                                                            <div class="col-xl-12 col-lg-12">
                                                                <div class="form-group">
                                                                    <label>{{ $Job->Questions }}</label>
                                                                    <div class="row twm-form-radio-inline">

                                                                        <div class="col-md-12">
                                                                            <input class="form-check-input"
                                                                                type="radio"
                                                                                name="Answer[{{ $i }}]"
                                                                                id="Answer1_{{ $i }}"
                                                                                value="Option A">
                                                                            <label class="form-check-label"
                                                                                for="Answer1_{{ $i }}">
                                                                                {{ $Job->Option_A }}
                                                                            </label>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <input class="form-check-input"
                                                                                type="radio"
                                                                                name="Answer[{{ $i }}]"
                                                                                id="Answer2_{{ $i }}"
                                                                                value="Option B">
                                                                            <label class="form-check-label"
                                                                                for="Answer2_{{ $i }}">
                                                                                {{ $Job->Option_B }}
                                                                            </label>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <input class="form-check-input"
                                                                                type="radio"
                                                                                name="Answer[{{ $i }}]"
                                                                                id="Answer3_{{ $i }}"
                                                                                value="Option C">
                                                                            <label class="form-check-label"
                                                                                for="Answer3_{{ $i }}">
                                                                                {{ $Job->Option_C }}
                                                                            </label>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <input class="form-check-input"
                                                                                type="radio"
                                                                                name="Answer[{{ $i }}]"
                                                                                id="Answer4_{{ $i }}"
                                                                                value="Option D">
                                                                            <label class="form-check-label"
                                                                                for="Answer4_{{ $i }}">
                                                                                {{ $Job->Option_D }}
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $i++;
                                                            @endphp
                                                        @endforeach

                                                    </div>

                                                </div>

                                                <div class="tab-pane fade" id="Subjective">

                                                    <div class="row">
                                                        @php
                                                            $j = 0;
                                                        @endphp
                                                        @foreach ($Job_Subjective as $Job)
                                                            <input type="hidden"
                                                                name="Subjective_Answers[{{ $j }}]"
                                                                value="{{ $Job->Sub_Answers }}">
                                                            <input type="hidden" name="QA_SID[{{ $j }}]"
                                                                value="{{ $Job->id }}">
                                                            <div class="col-xl-12 col-lg-12">
                                                                <!--Description-->
                                                                <div class="form-group">
                                                                    <label>{{ $Job->Sub_Questions }}</label>
                                                                    <textarea class="form-control" rows="3" name="Candidate_Answer[]"></textarea>
                                                                </div>
                                                            </div>
                                                            @php
                                                                $j++;
                                                            @endphp
                                                        @endforeach

                                                        <div class="col-xl-12 col-lg-12">
                                                            <div class="form-group">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="flexRadioDefault" id="flexRadioDefault2"
                                                                    checked required>
                                                                <label class="form-check-label"
                                                                    for="flexRadioDefault2">
                                                                    I agree to the Terms and Conditions and Privacy
                                                                    Policy.
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                                            <div class="text-left">
                                                                <button type="submit" class="site-button">Apply
                                                                    Now
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                @else
                                    <div class="alert alert-danger">
                                        You need to login first to apply for a job </div>
                                @endif

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- Employer Account START END -->
