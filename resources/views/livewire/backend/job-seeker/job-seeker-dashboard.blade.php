@section('Dashboard', 'active')
@section('InnerBanner')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url({{ asset('images/banner/1.jpg') }});">
        <div class="overlay-main site-bg-white opacity-01"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Dashboard</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->

                <div>
                    <ul class="wt-breadcrumb breadcrumb-style-2">
                        <li><a href="{{ route('JobSeeker.Dashboard') }}">Home</a></li>
                        <li>Dashboard</li>
                    </ul>
                </div>

                <!-- BREADCRUMB ROW END -->
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
@endsection
<div class="col-xl-9 col-lg-8 col-md-12 m-b30">
    <!--Filter Short By-->
    <div class="twm-right-section-panel site-bg-gray">
        <form action="{{ route('JobSeeker.Update.Info') }}" method="POST">
            @csrf
            <!--Basic Information-->
            <div class="panel panel-default">
                <div class="panel-heading wt-panel-heading p-a20">
                    <h4 class="panel-tittle m-a0">Basic Informations</h4>
                </div>
                <div class="panel-body wt-panel-body p-a20 m-b30 ">

                    <div class="row">

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Your Name</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Name" type="text"
                                           placeholder="Devid Smith"
                                           value="{{ !empty($UserInfo->name)? $UserInfo->name : '' }}">
                                    <i class="fs-input-icon fa fa-user "></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Phone" type="text"
                                           placeholder="(251) 1234-456-7890"
                                           value="{{ !empty($UserInfo->phone)? $UserInfo->phone : '' }}">
                                    <i class="fs-input-icon fa fa-phone-alt"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Email" type="email"
                                           placeholder="Devid@example.com"
                                           value="{{ !empty($UserInfo->email)? $UserInfo->email : '' }}">
                                    <i class="fs-input-icon fas fa-at"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Job Category</label>
                                <div class="ls-inputicon-box">
                                    <select class="wt-select-box selectpicker" name="USR_Cate" data-live-search="true"
                                            title="" id="j-category" data-bv-field="size" required>
                                        <option disabled selected value="">Select Category</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Full Stack Developer" ? 'selected' : '' : ''}}  value="Full Stack Developer">Full Stack Developer</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Backend Developer" ? 'selected' : '' : ''}} value="Backend Developer">Backend Developer</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Search Engine Optimization" ? 'selected' : '' : ''}} value="Search Engine Optimization">Search Engine Optimization</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Content Writer" ? 'selected' : '' : ''}} value="Content Writer">Content Writer</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Social Media Marketing" ? 'selected' : '' : ''}} value="Social Media Marketing">Social Media Marketing</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Digital Marketing" ? 'selected' : '' : ''}} value="Digital Marketing">Digital Marketing</option>
                                        <option {{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate == "Human Resources" ? 'selected' : '' : ''}} value="Human Resources">Human Resources</option>
                                    </select>
                                    <i class="fs-input-icon fa fa-border-all"></i>
                                </div>
        
                            </div>
                        </div>
                        {{-- <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Job Category</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Cate" type="text"
                                           placeholder="IT & Software"
                                           value="{{ !empty($UserInfo->jobInfo->Job_Cate)? $UserInfo->jobInfo->Job_Cate : '' }}">
                                    <i class="fs-input-icon fa fa-border-all"></i>
                                </div>

                            </div>
                        </div> --}}

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Experience</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Exp" type="text" placeholder="05 Years"
                                           value="{{ !empty($UserInfo->jobInfo->Experience)? $UserInfo->jobInfo->Experience : '' }}">
                                    <i class="fs-input-icon fa fa-user-edit"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Current Salary</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_C_Salary" type="text" placeholder="65K"
                                           value="{{ !empty($UserInfo->jobInfo->C_Salary)? $UserInfo->jobInfo->C_Salary : '' }}">
                                    <i class="fs-input-icon fa fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Expected Salary</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_E_Salary" type="text" placeholder="75K"
                                           value="{{ !empty($UserInfo->jobInfo->E_Salary)? $UserInfo->jobInfo->E_Salary : '' }}">
                                    <i class="fs-input-icon fa fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Country</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_Country" type="text" placeholder="USA"
                                           value="{{ !empty($UserInfo->Country)? $UserInfo->Country : '' }}">
                                    <i class="fs-input-icon fa fa-globe-americas"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>City</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_City" type="text" placeholder="Texas"
                                           value="{{ !empty($UserInfo->City)? $UserInfo->City : '' }}">
                                    <i class="fs-input-icon fa fa-globe-americas"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Postcode</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="USR_ZipCode" type="text" placeholder="75462"
                                           value="{{ !empty($UserInfo->ZipCode)? $UserInfo->ZipCode : '' }}">
                                    <i class="fs-input-icon fas fa-map-pin"></i>
                                </div>

                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="form-group city-outer-bx has-feedback">
                                <label>Full Address</label>
                                <div class="ls-inputicon-box">
                                    <input class="form-control" name="Full_Address" type="text"
                                           placeholder="1363-1385 Sunset Blvd Angeles, CA 90026 ,USA"
                                           value="{{ !empty($UserInfo->Full_Address)? $UserInfo->Full_Address : '' }}">
                                    <i class="fs-input-icon fas fa-map-marker-alt"></i>
                                </div>

                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="My_Desc" class="form-control" rows="3">Greetings! when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</textarea>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12">
                            <div class="text-left">
                                <button type="submit" class="site-button">Save Changes</button>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
