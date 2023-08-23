<?php

use App\Http\Livewire\Backend\Employer\PreOnlineTest;
use App\Http\Livewire\Backend\JobSeeker\JobsAlert;
use App\Http\Livewire\Backend\JobSeeker\MyResume;
use App\Http\Livewire\Backend\JobSeeker\ViewProfile;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Backend\Auth\Admin\LoginController;
use App\Http\Livewire\Backend\Auth\Admin\SignupController;
use App\Http\Livewire\Frontend\Jobs\AppliedJobs;
use App\Http\Livewire\Frontend\Jobs\JobListing;
use App\Http\Livewire\Frontend\Jobs\JobListingDetail;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Frontend\AboutUs;
use App\Http\Livewire\Frontend\ContactUs;
use App\Http\Livewire\Frontend\FAQ;
use App\Http\Livewire\Backend\Admin\AdminDashboard;
use App\Http\Livewire\Backend\Company\CompanyDashboard;
use App\Http\Livewire\Backend\JobSeeker\JobSeekerDashboard;
use App\Http\Livewire\Backend\JobSeeker\GetAppliedJobs;
use App\Http\Livewire\Backend\Employer\EmployerDashboard;
use App\Http\Livewire\Backend\Employer\JobsPost;
use App\Http\Livewire\Backend\Employer\ManageJobs;
use App\Http\Livewire\Backend\Employer\GetJobApplicants;
use App\Http\Livewire\Backend\Employer\ResumeRecieved;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('event:clear');
    Artisan::call('optimize:clear');
    return back()->with('Success!', 'Cache Clear Successfully!');
});

// Admin Routes

Route::prefix('admin')->group(function () {
    Route::get('/Login-Form', LoginController::class,)->name('Admin.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'AdminLogin'])->name('Admin.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class,)->name('Admin.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'AdminSignup'])->name('Admin.SignUp.Submit');
    Route::get('/Admin-Dashboard', AdminDashboard::class,)->name('Admin.Dashboard')->middleware('admin');
    Route::get('/Admin-LogOut', [LoginController::class, 'AdminLogout'])->name('Admin.Logout')->middleware('admin');
});

Route::prefix('Company')->group(function () {
    Route::get('/Login-Form', LoginController::class,)->name('Company.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'CompanyLogin'])->name('Company.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class,)->name('Company.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'CompanySignup'])->name('Company.SignUp.Submit');
    Route::get('/Company-Dashboard', CompanyDashboard::class,)->name('Company.Dashboard')->middleware('Company');
    Route::get('/Company-LogOut', [LoginController::class, 'CompanyLogout'])->name('Company.Logout')->middleware('Company');
});


Route::prefix('JobSeeker')->group(function () {
    Route::get('/Login-Form', LoginController::class,)->name('JobSeeker.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'JobSeekerLogin'])->name('JobSeeker.Login.Submit');
    Route::get('/SignUp-Form', SignupController::class,)->name('JobSeeker.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'JobSeekerSignup'])->name('JobSeeker.SignUp.Submit');
    Route::get('/JobSeeker-Dashboard', JobSeekerDashboard::class,)->name('JobSeeker.Dashboard')->middleware('JobSeeker');
    Route::post('/Update-Basic-Info', [JobSeekerDashboard::class, 'updateBasicInfo'])->name('JobSeeker.Update.Info')->middleware('JobSeeker');
    Route::get('/Applied-Jobs', GetAppliedJobs::class,)->name('Get.Appllied.Jobs')->middleware('JobSeeker');
    Route::post('/Job-Request-Post', [AppliedJobs::class, 'JobRequest'])->name('Job.Request.Post');
    Route::get('/Job-Alerts', JobsAlert::class,)->name('JobSeeker.Job.Alerts')->middleware('JobSeeker');
    Route::get('/My-Resume', MyResume::class,)->name('JobSeeker.Resume')->middleware('JobSeeker');
    Route::get('/JobSeeker-LogOut', [LoginController::class, 'JobSeekerLogout'])->name('JobSeeker.Logout')->middleware('JobSeeker');
});

Route::prefix('Employer')->group(function () {
    Route::get('/Login-Form', LoginController::class,)->name('Employer.Login');
    Route::post('/Login-Form/Submit', [LoginController::class, 'EmployerLogin'])->name('login.submit');
    Route::get('/SignUp-Form', SignupController::class,)->name('Employer.SignUp');
    Route::post('/SignUp-Form/Submit', [SignupController::class, 'EmployerSignup'])->name('Employer.SignUp.Submit');
    Route::get('/Employer-Dashboard', EmployerDashboard::class,)->name('Employer.Dashboard')->middleware('Employer');
    Route::post('/Employer-Company-Post', [EmployerDashboard::class, 'postCompany'])->name('Employer.CompanyPost')->middleware('Employer');
    Route::get('/Employer-Job-Post', JobsPost::class,)->name('Employer.JobPost')->middleware('Employer');
    Route::post('/Employer-Post-Job', [JobsPost::class, 'JobPost'])->name('Employer.PostJob')->middleware('Employer');
    Route::get('/Employer-Manage-Jobs', ManageJobs::class,)->name('Employer.ManageJobs')->middleware('Employer');
    Route::get('/Employer-Delete-Job/{id}', [ManageJobs::class, 'DeleteJob'])->name('Employer.DeleteJob')->middleware('Employer');
    Route::get('/Get-Jobs-Requests/{JOB_ID}', GetJobApplicants::class,)->name('Get.Job.Requests')->middleware('Employer');
    Route::get('/Get-All-Resume', ResumeRecieved::class,)->name('Get.All.Resume')->middleware('Employer');
    Route::get('/Pre-Online-Test', PreOnlineTest::class,)->name('Pre.Online.Test')->middleware('Employer');
    Route::get('/Employer-LogOut', [LoginController::class, 'EmployerLogout'])->name('Employer.Logout')->middleware('Employer');
});

Route::get('/', HomePage::class,)->name('Frontend.index');
Route::get('/About-Us', AboutUs::class,)->name('Frontend.About');
Route::get('/Contact-Us', ContactUs::class,)->name('Frontend.Contact');
Route::get('/Frequently-Asked-Question', FAQ::class,)->name('Frontend.FAQ');
Route::get('/Jobs/Applied-Jobs/{JOB_ID}/{EMP_ID}', AppliedJobs::class,)->name('Frontend.appliedJobs');
Route::get('/Jobs/Jobs-List', JobListing::class,)->name('Frontend.JobListing');
Route::get('/Jobs/Jobs-List-Detail/{id}', JobListingDetail::class,)->name('Frontend.JobListingDetail');
Route::get('/Job-Search', [JobsPost::class, 'SearchJobs'])->name('Get.Jobs');
Route::get('/Get-Results', [ResumeRecieved::class, 'interviewResults'])->name('Get.Results');

Route::get('/Applicant-View-Profile/{id}', ViewProfile::class)->name('Frontend.ApplicantProfile');
Route::post('/Send-Email', [ViewProfile::class, 'sendEmail'])->name('Frontend.ApplicantProfileEmail');
