<!-- Candidate Detail V2 START -->
<div class="section-full p-b90 bg-white">
    <div class="twm-candi-self-wrap-2 overlay-wraper"
         style="background-image:url(images/candidates/candidate-bg2.jpg);">
        <div class="overlay-main site-bg-primary opacity-01"></div>
        <div class="container">
            <div class="twm-candi-self-info-2">
                <div class="twm-candi-self-top">
                    <div class="twm-candi-fee">$20 / Day</div>
                    <div class="twm-media">
                        <img src="images/candidates/pic-l1.jpg" alt="#">
                    </div>
                    <div class="twm-mid-content">

                        <h4 class="twm-job-title">{{!empty($jobSeeker) ? !empty($jobSeeker->name) ? $jobSeeker->name : "---" : "---" }} </h4>

                        <p>{{!empty($jobSeeker) ? !empty($jobSeeker->jobInfo) ? $jobSeeker->jobInfo->Job_Cate : "---" : "---" }}</p>
                        <p class="twm-candidate-address"><i class="feather-map-pin"></i>{{!empty($jobSeeker) ? !empty($jobSeeker->Country) ? $jobSeeker->Country : "---" : "---" }}</p>

                    </div>
                </div>

                {{-- Share button --}}
                {{-- <div class="twm-ep-detail-tags">
                    <button class="de-info twm-bg-green"><i class="fa fa-share-alt"></i> Share</button>
                    <button class="de-info twm-bg-brown"><i class="fa fa-file-signature"></i> Shortlist</button>
                    <button class="de-info twm-bg-purple"><i class="fa fa-exclamation-triangle"></i> Report
                    </button>
                    <button class="de-info twm-bg-sky"><i class="fa fa-save"></i> Save</button>
                </div> --}}
                <div class="twm-candi-self-bottom">
                    <a href="contact.html" class="site-button">Contact Us</a>
                    <a href="{{asset(!empty($jobSeeker) ? !empty($jobSeeker->Applicant_Resume) ? $jobSeeker->Applicant_Resume : "" : "")}}" class="site-button secondry">Download CV</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">


        <div class="section-content">

            <div class="row d-flex justify-content-center">

                <div class="col-lg-9 col-md-12">
                    <!-- Candidate detail START -->
                    <div class="cabdidate-de-info">

                        <div class="twm-s-info-wrap mb-5">
                            <h4 class="section-head-small mb-4">Profile Info</h4>
                            <div class="twm-s-info-4">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-money-bill-wave"></i>
                                            <span class="twm-title">Offered Salary</span>
                                            <div class="twm-s-info-discription">{{!empty($jobSeeker) ? !empty($jobSeeker->jobInfo) ? $jobSeeker->jobInfo->C_Salary : "0" : "" }} / Day</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-clock"></i>
                                            <span class="twm-title">Experience</span>
                                            <div class="twm-s-info-discription">{{!empty($jobSeeker) ? !empty($jobSeeker->jobInfo) ? $jobSeeker->jobInfo->Experience : "0" : "" }} Year</div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-venus-mars"></i>
                                            <span class="twm-title">Job Category</span>
                                            <div class="twm-s-info-discription">{{!empty($jobSeeker) ? !empty($jobSeeker->jobInfo) ? $jobSeeker->jobInfo->Job_Cate : "---" : "---" }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-mobile-alt"></i>
                                            <span class="twm-title">Phone</span>
                                            <div class="twm-s-info-discription">{{!empty($jobSeeker) ? $jobSeeker->phone : "" }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-at"></i>
                                            <span class="twm-title">Email</span>
                                            <div class="twm-s-info-discription">{{!empty($jobSeeker) ? $jobSeeker->email : "" }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="twm-s-info-inner">
                                            <i class="fas fa-book-reader"></i>
                                            <span class="twm-title">Qualification</span>
                                            <div class="twm-s-info-discription">MCA</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="twm-s-info-inner">

                                            <i class="fas fa-map-marker-alt"></i>
                                            <span class="twm-title">Address</span>
                                            <div class="twm-s-info-discription">
                                                {{!empty($jobSeeker) ? !empty($jobSeeker->Full_Address) ? $jobSeeker->Full_Address : "---" : "" }}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <h4 class="twm-s-title m-t0">About Me</h4>

                        <p> {{!empty($jobSeeker) ? !empty($jobSeeker->My_Desc) ? $jobSeeker->My_Desc : "---" : "" }}</p>

                        {{-- Skilss tab --}}
                        {{-- <h4 class="twm-s-title">Skills</h4>

                        <div class="tw-sidebar-tags-wrap">
                            <div class="tagcloud">
                                <a href="javascript:void(0)">Finance</a>
                                <a href="javascript:void(0)">Sales</a>
                                <a href="javascript:void(0)">Part-time</a>
                                <a href="javascript:void(0)">Administration</a>
                                <a href="javascript:void(0)">Retail</a>
                                <a href="javascript:void(0)">Engineering</a>
                                <a href="javascript:void(0)">Developer</a>
                                <a href="javascript:void(0)">Work from home</a>
                                <a href="javascript:void(0)">IT Consulting</a>
                                <a href="javascript:void(0)">Manufacturing</a>
                            </div>
                        </div> --}}


                        {{-- Work Experience Tab --}}
                        {{-- <h4 class="twm-s-title">Work Experience</h4>
                        <div class="twm-timing-list-wrap">

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2012 to 2016</div>
                                <div class="twm-time-list-title">Bluetech, Inc</div>
                                <div class="twm-time-list-position">Senior PHP Developer</div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2016 to 2020</div>
                                <div class="twm-time-list-title">Amazon, Inc</div>
                                <div class="twm-time-list-position">IT & Development</div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2020 to 2022</div>
                                <div class="twm-time-list-title">BGoogle, Inc</div>
                                <div class="twm-time-list-position">Senior UI / UX Designer and Developer</div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                        </div> --}}

                        {{-- Education tab --}}
                        {{-- <h4 class="twm-s-title">Education & Training</h4> --}}
                        {{-- <div class="twm-timing-list-wrap">

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2004 to 2006</div>
                                <div class="twm-time-list-title">BCA - Bachelor of Computer Applications</div>
                                <div class="twm-time-list-position">International University</div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2006 to 2008</div>
                                <div class="twm-time-list-title">MCA - Master of Computer Application</div>
                                <div class="twm-time-list-position">Middle East Technical University</div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                            <div class="twm-timing-list">
                                <div class="twm-time-list-date">2008 to 2011</div>
                                <div class="twm-time-list-title">Design Communication Visual</div>
                                <div class="twm-time-list-position">Design at Massachusetts Institute of
                                    Technology & Marketing
                                </div>
                                <div class="twm-time-list-discription">
                                    <p>One of the main areas that I work on with my clients is shedding these
                                        non-supportive beliefs and
                                        replacing them with beliefs that will help them to accomplish their
                                        desires.</p>
                                </div>
                            </div>

                        </div> --}}


                    </div>

                    {{-- Location Tab --}}
                    {{-- <div class="twm-s-map mb-5">
                        <h4 class="section-head-small mb-4">Location</h4>
                        <div class="twm-s-map-iframe twm-s-map-iframe-2">
                            <iframe height="270"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                        </div>
                    </div> --}}


                    <div class="twm-s-contact-wrap mb-5">
                        <h4 class="section-head-small mb-4">Contact us</h4>
                        <div class="twm-s-contact twm-s-contact-2">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="username" type="text" required class="form-control"
                                               placeholder="Name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="email" type="text" class="form-control" required
                                               placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <input name="phone" type="text" class="form-control" required
                                               placeholder="Phone">
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                                <textarea name="message" class="form-control" rows="3"
                                                          placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="site-button">Submit Now</button>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>


            </div>

        </div>

    </div>

</div>
<!-- Candidate Detail V2 END -->
