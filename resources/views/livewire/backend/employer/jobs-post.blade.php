<style>
    textarea {
        /* min-height: calc(1.5em + 0.75rem + 2px); */
        height: 100% !important;
    }
</style>
@section('JobPost', 'active')
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

<form action="{{ route('Employer.PostJob') }}" method="POST" enctype="multipart/form-data">
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
                            <input class="form-control" name="Job_Title" type="text" placeholder="Devid Smith"
                                   required>
                            <i class="fs-input-icon fa fa-address-card"></i>
                        </div>
                    </div>
                </div>

                <!--Job Category-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group city-outer-bx has-feedback">
                        <label>Job Category</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="Job_Category" data-live-search="true"
                                    title="" id="j-category" data-bv-field="size" required>
                                <option disabled selected value="">Select Category</option>
                                <option value="Full Stack Developer">Full Stack Developer</option>
                                <option value="Backend Developer">Backend Developer</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                <option value="Content Writer">Content Writer</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Human Resources">Human Resources</option>
                            </select>
                            <i class="fs-input-icon fa fa-border-all"></i>
                        </div>

                    </div>
                </div>

                <!--Job Type-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Job Type</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" name="Job_Type" data-live-search="true"
                                    title="" id="s-category" data-bv-field="size" required>
                                <option class="bs-title-option" value="">Select Category</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Internship">Internship</option>
                                <option value="Temporary">Temporary</option>
                            </select>
                            <i class="fs-input-icon fa fa-file-alt"></i>
                        </div>
                    </div>
                </div>


                <!--Offered Salary-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Offered Salary</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Salary" type="number" min="0" placeholder="$5000" required>
                            <i class="fs-input-icon fa fa-dollar-sign"></i>
                        </div>
                    </div>
                </div>

                <!--Experience-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Experience</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Experience" type="number"
                                   placeholder="E.g. Minimum 3 years" min="0" required>
                            <i class="fs-input-icon fa fa-user-edit"></i>
                        </div>
                    </div>
                </div>

                <!--Qualification-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Qualification</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Qualification" type="text"
                                   placeholder="Qualification Title" required>
                            <i class="fs-input-icon fa fa-user-graduate"></i>
                        </div>
                    </div>
                </div>

                <!--Gender-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" data-live-search="true" title=""
                                    id="gender" data-bv-field="size" name="Job_Gender">
                                <option class="bs-title-option" value="">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Both">Both</option>
                                <option value="Other">Other</option>
                            </select>
                            <i class="fs-input-icon fa fa-venus-mars"></i>
                        </div>
                    </div>
                </div>

                <!--Country-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Country</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" data-live-search="true" title=""
                                    id="country" data-bv-field="size" name="Job_Country" required>
                                <option class="bs-title-option" value="">Country</option>
                                <option
                                    {{!empty($Company_Info) ?  ($Company_Info->CMP_Country == 'Pakistan')? 'selected' : '' : ''}} value="Pakistan">
                                    Pakistan
                                </option>
                            </select>
                            <i class="fs-input-icon fa fa-globe-americas"></i>
                        </div>
                    </div>
                </div>


                <!--City-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>City</label>
                        <div class="ls-inputicon-box">
                            <select class="wt-select-box selectpicker" data-live-search="true" required
                                    name="Job_City" title="" id="city" data-bv-field="size">
                                <option class="bs-title-option" value="">City</option>
                                <option {{!empty($Company_Info) ?  ($Company_Info->CMP_City == 'Karachi')? 'selected' : '' : ''}} value="Karachi">
                                    Karachi
                                </option>
                            </select>
                            <i class="fs-input-icon fa fa-map-marker-alt"></i>
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

                <!--Website-->
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Website</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Website" type="url" placeholder="https://..."
                                   required
                                   value="{{ !empty($Company_Info->CMP_Website)? $Company_Info->CMP_Website : '' }}">
                            <i class="fs-input-icon fa fa-globe-americas"></i>
                        </div>
                    </div>
                </div>

                <!--Complete Address-->
                <div class="col-xl-12 col-lg-6 col-md-12">
                    <div class="form-group">
                        <label>Complete Address</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_Address" type="text"
                                   placeholder="1363-1385 Sunset Blvd Los Angeles, CA 90026, USA" required
                                   value="{{ !empty($Company_Info->CMP_Address)? $Company_Info->CMP_Address : '' }}">
                            <i class="fs-input-icon fa fa-home"></i>
                        </div>
                    </div>
                </div>

                <!--Start Date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Start Date</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_SDate"
                                   required type="date" placeholder="mm/dd/yyyy" value="">
                            <i class="fs-input-icon fa fa-calendar"></i>
                        </div>
                    </div>
                </div>

                <!--End Date-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>End Date</label>
                        <div class="ls-inputicon-box">
                            <input class="form-control" name="Job_EDate"
                                   required type="date" placeholder="mm/dd/yyyy">
                            <i class="fs-input-icon fa fa-calendar"></i>
                        </div>
                    </div>
                </div>

                <!--Description-->
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control tinymce-editor" row="10" name="Job_Desc"
                                  value="Greetings! We are Galaxy Software Development Company. We hope you enjoy our services and quality."></textarea>
                    </div>
                </div>

                {{-- Job Requirements --}}
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Requirements</label>
                        <div class="ls-inputicon-box requirement">
                            <input class="form-control" name="Job_Req[]" type="text"
                                   placeholder="Enter Any Requirements">
                            <i class="fs-input-icon fa fa-user"></i>
                        </div>
                        <div class="text-right m-tb10">
                            <button class="add_field_custom " id="requirements">Add More Req <i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                {{-- Job Requirements --}}
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Responsibilities</label>
                        <div class="ls-inputicon-box responsi">
                            <input class="form-control" name="Job_Respons[]" type="text"
                                   placeholder="Enter Any Responsibility">
                            <i class="fs-input-icon fa fa-user"></i>
                        </div>
                        <div class="text-right m-tb10">
                            <button class="add_field_custom" id="responsibility">Add More Res <i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                {{-- Job Skills --}}
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="form-group">
                        <label>Skills</label>
                        <div class="ls-inputicon-box skills">
                            <input class="form-control" name="Job_Skills[]" type="text"
                                   placeholder="Enter Any Skill">
                            <i class="fs-input-icon fa fa-user"></i>
                        </div>
                        <div class="text-right m-tb10">
                            <button class="add_field_custom" id="Skills">Add More Skill <i
                                    class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>

                <div class="panel-heading wt-panel-heading p-a20 m-b20">
                    <h4 class="panel-tittle m-a0">Make a Test For Current Job</h4>
                </div>

                <div class="row row-subjective">
                    <!--Question-->
                    <div class="col-xl-12 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Enter Any Question Relevent to Job.</label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="Job_Questions[]" type="text"
                                       placeholder="Ex: What is the key difference between HTML Elements and Tags?">
                                <i class="fs-input-icon fa fa-question"></i>
                            </div>
                        </div>
                    </div>
                    {{-- Answers --}}
                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>Option A</label>
                            <input class="form-control" name="Option_A[]" type="text" placeholder="Ex: Answer A">
                            <input class="form-check-input" type="radio" name="Is_Correct[]" id="Option_A_0"
                                   value="Option A">
                            <label class="form-check-label" for="Option_A_0">Correct A</label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>Option B</label>
                            <input class="form-control" name="Option_B[]" type="text" placeholder="Ex: Answer B">
                            <input class="form-check-input" type="radio" name="Is_Correct[]" id="Option_B_0"
                                   value="Option B">
                            <label class="form-check-label" for="Option_B_0">Correct B</label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>Option C</label>
                            <input class="form-control" name="Option_C[]" type="text" placeholder="Ex: Answer C">
                            <input class="form-check-input" type="radio" name="Is_Correct[]" id="Option_C_0"
                                   value="Option C">
                            <label class="form-check-label" for="Option_C_0">Correct C</label>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>Option D</label>
                            <input class="form-control" name="Option_D[]" type="text" placeholder="Ex: Answer D">
                            <input class="form-check-input" type="radio" name="Is_Correct[]" id="Option_D_0"
                                   value="Option D">
                            <label class="form-check-label" for="Option_D_0">Correct D</label>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="button" id="add-question" class="btn btn-success m-r5">Add</button>
                    </div>

                </div>

                <div id="questions"></div>

                <div class="row">
                    <!--Job Question-->
                    <div class="col-xl-12 col-lg-6 col-md-12">
                        <div class="form-group">
                            <label>Subjective </label>
                            <div class="ls-inputicon-box">
                                <input class="form-control" name="Job_Subjective_Question[]" type="text"
                                       placeholder="Introduced Yourself?" required>
                                <i class="fs-input-icon fa fa-question"></i>
                            </div>
                        </div>
                    </div>
                    <!--Description-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Answers</label>
                            <textarea class="form-control" row="3" name="Job_Subjective_Answers[]"
                                      value="Greetings! We are Galaxy Software Development Company. We hope you enjoy our services and quality."></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="button" id="add-question_I" class="btn btn-success m-r5">Add</button>
                    </div>
                </div>

                <div id="subjective-questions-job"></div>

                <div class="col-lg-12 col-md-12">
                    <div class="text-left">
                        <button type="submit" class="site-button m-r5">Publish Job</button>
                        {{-- <button type="submit" class="site-button outline-primary">Save Draft</button> --}}
                    </div>
                </div>


            </div>

        </div>
    </div>
</form>


<script>
    $(document).ready(function () {
        // Date Validations
        $('.datepicker', this).change(function () {
            var GivenDate = $(this).val();
            var CurrentDate = new Date();
            GivenDate = new Date(GivenDate);
            if (GivenDate < CurrentDate) {
                alert('Plz Select Valid Date.');
                $(this).val(CurrentDate);
            }
        });

        // Date Validation
        var dtToday = new Date();
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
            day = '0' + day.toString();
        var minDate = year + '-' + month + '-' + day;
        $('input[type="date"]').attr('min', minDate);

        // Multiples Questions Add
        var min_question = 1;
        var max_question = 25;
        let count = 1;

        // var new_questions =;

        $("#add-question").click(function () {
            if (min_question <= max_question) {
                $("#questions").append(
                    '<div class="row row-subjective"><!--Question--><div class="col-xl-12 col-lg-6 col-md-12"><div class="form-group"><label>Enter Any Question Relevent to Job.</label><div class="ls-inputicon-box"><input class="form-control" name="Job_Questions[]" type="text"placeholder="Ex: What is the key difference between HTML Elements and Tags?"><i class="fs-input-icon fa fa-question"></i></div></div></div>{{-- Answers --}}<div class="col-xl-3 col-lg-3 col-md-3"><div class="form-group"><label>Option A</label><input class="form-control" name="Option_A[]" type="text" placeholder="Ex: Answer A"><input class="form-check-input" type="radio" name="Is_Correct[' +
                    count + ']" id="Option_A_' +
                    count + '" value="Option A"><label class="form-check-label" for="Option_A_' +
                    count +
                    '">Correct A</label></div></div><div class="col-xl-3 col-lg-3 col-md-3"><div class="form-group"><label>Option B</label><input class="form-control" name="Option_B[]" type="text" placeholder="Ex: Answer B"><input class="form-check-input" type="radio" name="Is_Correct[' +
                    count + ']" id="Option_B_' +
                    count + '"value="Option B"><label class="form-check-label" for="Option_B_' +
                    count +
                    '">Correct B</label></div></div><div class="col-xl-3 col-lg-3 col-md-3"><div class="form-group"><label>Option C</label><input class="form-control" name="Option_C[]" type="text" placeholder="Ex: Answer C"><input class="form-check-input" type="radio" name="Is_Correct[' +
                    count + ']" id="Option_C_' +
                    count + '"value="Option C"><label class="form-check-label" for="Option_C_' +
                    count +
                    '">Correct C</label></div></div><div class="col-xl-3 col-lg-3 col-md-3"><div class="form-group"><label>Option D</label><input class="form-control" name="Option_D[]" type="text" placeholder="Ex: Answer D"><input class="form-check-input" type="radio" name="Is_Correct[' +
                    count + ']" id="Option_D_' +
                    count + '"value="Option D"><label class="form-check-label" for="Option_D_' +
                    count +
                    '">Correct D</label></div></div><div class="text-right"><button type="button" id="remove-question" class="btn btn-danger m-r5">Remove</button></div></div>'
                );
                min_question++;
            }
            count++;
        });
        $("#questions").on('click', '#remove-question', function () {
            count--;
            $(this).closest('.row').remove();
            min_question--;
        });

        // Multiples Questions Add
        var min_question_I = 1;
        var max_question_I = 25;

        // var new_questions =;

        $("#add-question_I").click(function () {
            if (min_question_I <= max_question_I) {
                $("#subjective-questions-job").append(
                    '<div class="row"><!--Job Question--><div class="col-xl-12 col-lg-6 col-md-12"><div class="form-group"><label>Subjective </label><div class="ls-inputicon-box"><input class="form-control" name="Job_Subjective_Question[]" type="text" placeholder="Introduced Yourself?" required><i class="fs-input-icon fa fa-question"></i></div></div></div><!--Description--><div class="col-md-12"><div class="form-group"><label>Answers</label><textarea class="form-control" row="3" name="Job_Subjective_Answers[]"value="Greetings! We are Galaxy Software Development Company. We hope you enjoy our services and quality."></textarea></div></div></div><div class="text-right"><button type="button" id="remove-question_I" class="btn btn-danger m-r5">Remove</button></div>'
                );
                min_question_I++;
            }
        });
        $("#subjective-questions-job").on('click', '#remove-question_I', function () {
            console.log('clicked');
            $(this).closest('.row-subjective').remove();
            min_question_I--;
        });
    });
</script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: 'textarea.tinymce-editor',
        height: 250,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount', 'image'
        ],
        toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_css: '//www.tiny.cloud/css/codepen.min.css'
    });
</script>
