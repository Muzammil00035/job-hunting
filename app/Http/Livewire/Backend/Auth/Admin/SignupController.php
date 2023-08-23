<?php

namespace App\Http\Livewire\Backend\Auth\Admin;

use Livewire\Component;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Auth\Admin;
use App\Models\Auth\Company;
use App\Models\Auth\JobSeeker;
use App\Models\Auth\Employer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Component
{
    public function render()
    {
        return view('livewire.backend.auth.admin.signup-controller')->layout('layouts.admin-auth');
    }

    public function AdminSignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $Admin = new Admin();
        $Admin->name = $request->ADM_Name;
        $Admin->email = $request->ADM_Email;
        $Admin->password = bcrypt($request->ADM_Password);

        if ($Admin->save()) {
            return redirect()->route('login_form')->with('Success!', 'Admin Register Successfylly!');
        }
    }

    public function CompanySignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $Admin = new Company();
        $Admin->name = $request->ADM_Name;
        $Admin->email = $request->ADM_Email;
        $Admin->password = bcrypt($request->ADM_Password);

        if ($Admin->save()) {
            return redirect()->route('Company.Login')->with('Success!', 'Company Register Successfylly!');
        }
    }
    public function JobSeekerSignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'UserEmail' => 'required|email',
                    'UserName' => 'required',
                    'UserPassword' => 'required',
                    'UserPhone' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $JobSeeker = new JobSeeker();
        $JobSeeker->name = $request->UserName;
        $JobSeeker->email = $request->UserEmail;
        $JobSeeker->phone = $request->UserPhone;
        $JobSeeker->password = bcrypt($request->UserPassword);

        if ($JobSeeker->save()) {
            return redirect()->route('JobSeeker.Login')->with('Success!', 'JobSeeker Register Successfylly!');
        }
    }

    public function EmployerSignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'UserEmail' => 'required|email',
                    'UserName' => 'required',
                    'UserPassword' => 'required',
                    'UserPhone' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $Employer = new Employer();
        $Employer->name = $request->UserName;
        $Employer->email = $request->UserEmail;
        $Employer->phone = $request->UserPhone;
        $Employer->password = bcrypt($request->UserPassword);

        if ($Employer->save()) {
            return redirect()->route('Employer.Login')->with('Success!', 'Employer Register Successfylly!');
        }
    }
}
