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

class LoginController extends Component
{
    public function render()
    {
        return view('livewire.backend.auth.admin.login-controller')->layout('layouts.admin-auth');
    }

    public function AdminLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        if (!Auth::guard('admin')->attempt(['email' => $request->ADM_Email, 'password' => $request->ADM_Password])) {
            return back()->with('Error!', 'UnAuthorized \n Bad Request');
        }

        $user = Admin::where('email', $request->ADM_Email)->first();

        if ($user) {
            if (Hash::check($request->ADM_Password, $user->password)) {
                // $tokenResult = $user->createToken('authToken')->plainTextToken;

                // if ($tokenResult) {
                return redirect()->route('Admin.Dashboard')->with('Success!', 'Admin Login Successfully!');
            // } else {
                //     return back()->with('Error!', '400 Bad Request \n Token Not Created!');
            // }
            } else {
                return back()->with('Error!', '400 Bad Request \n Wrong Password!');
            }
        } else {
            return back()->with('Error!', '400 Bad Request \n User does\'nt Exist! \n Invalid Email!');
        }
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('Success!', 'Admin LogOut Successfully!');
    }

    public function CompanyLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        if (!Auth::guard('Company')->attempt(['email' => $request->ADM_Email, 'password' => $request->ADM_Password])) {
            return back()->with('Error!', 'UnAuthorized \n Bad Request');
        }

        $user = Company::where('email', $request->ADM_Email)->first();

        if ($user) {
            if (Hash::check($request->ADM_Password, $user->password)) {
                // $tokenResult = $user->createToken('authToken')->plainTextToken;

                // if ($tokenResult) {
                return redirect()->route('Company.Dashboard')->with('Success!', 'Company Login Successfully!');
            // } else {
                //     return back()->with('Error!', '400 Bad Request \n Token Not Created!');
            // }
            } else {
                return back()->with('Error!', '400 Bad Request \n Wrong Password!');
            }
        } else {
            return back()->with('Error!', '400 Bad Request \n User does\'nt Exist! \n Invalid Email!');
        }
    }

    public function CompanyLogout(Request $request)
    {
        Auth::guard('Company')->logout();
        return redirect()->route('Company.Login')->with('Success!', 'Company LogOut Successfully!');
    }

        public function JobSeekerLogin(Request $request)
        {
            $validator = Validator::make($request->all(), [
                        'ADM_Email' => 'required|email',
                        'ADM_Password' => 'required'
                    ]);
            // dd($request->all());
            if ($validator->fails()) {
                return back()->with('Error!', '400 Bad Request \n Validations Failed');
            }

            if (!Auth::guard('JobSeeker')->attempt(['email' => $request->ADM_Email, 'password' => $request->ADM_Password])) {
                return back()->with('Error!', 'UnAuthorized \n Bad Request');
            }

            $user = JobSeeker::where('email', $request->ADM_Email)->first();

            if ($user) {
                if (Hash::check($request->ADM_Password, $user->password)) {
                    // $tokenResult = $user->createToken('authToken')->plainTextToken;

                    // if ($tokenResult) {
                    return redirect()->route('JobSeeker.Dashboard')->with('Success!', 'JobSeeker Login Successfully!');
                // } else {
                //     return back()->with('Error!', '400 Bad Request \n Token Not Created!');
                // }
                } else {
                    return back()->with('Error!', '400 Bad Request \n Wrong Password!');
                }
            } else {
                return back()->with('Error!', '400 Bad Request \n User does\'nt Exist! \n Invalid Email!');
            }
        }

    public function JobSeekerLogout(Request $request)
    {
        Auth::guard('JobSeeker')->logout();
        return redirect()->route('Frontend.index')->with('Success!', 'JobSeeker LogOut Successfully!');
    }

    public function EmployerLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);
        // dd($request->all());
        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        if (!Auth::guard('Employer')->attempt(['email' => $request->ADM_Email, 'password' => $request->ADM_Password])) {
            return back()->with('Error!', 'UnAuthorized \n Bad Request');
        }

        $user = Employer::where('email', $request->ADM_Email)->first();

        if ($user) {
            if (Hash::check($request->ADM_Password, $user->password)) {
                // $tokenResult = $user->createToken('authToken')->plainTextToken;

                // if ($tokenResult) {
                return redirect()->route('Employer.Dashboard')->with('Success!', 'Employer Login Successfully!');
            // } else {
                //     return back()->with('Error!', '400 Bad Request \n Token Not Created!');
            // }
            } else {
                return back()->with('Error!', '400 Bad Request \n Wrong Password!');
            }
        } else {
            return back()->with('Error!', '400 Bad Request \n User does\'nt Exist! \n Invalid Email!');
        }
    }

    public function EmployerLogout(Request $request)
    {
        Auth::guard('Employer')->logout();
        return redirect()->route('Frontend.index')->with('Success!', 'Employer LogOut Successfully!');
    }
}
