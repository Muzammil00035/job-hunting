<?php

namespace App\Http\Livewire\Backend\JobSeeker;

use App\Models\Auth\JobSeeker;
use App\Models\JobSeeker\JobInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class JobSeekerDashboard extends Component
{
    public function render()
    {
        $USR_ID = Auth::guard('JobSeeker')->user()->id;
        $UserInfo = JobSeeker::with('jobInfo')->where('id', $USR_ID)->first();
        return view('livewire.backend.job-seeker.job-seeker-dashboard', compact('UserInfo'))->layout('layouts.job-seeker');
    }

    public function updateBasicInfo(Request $request)
    {
        $USR_ID = Auth::guard('JobSeeker')->user()->id;
        $JobSeeker = JobSeeker::where('id', $USR_ID)->first();
        $JobInfo = JobInfo::where('USR_ID', $USR_ID)->first();

        $JobSeeker->name = $request->USR_Name;
        $JobSeeker->email = $request->USR_Email;
        $JobSeeker->phone = $request->USR_Phone;
        $JobSeeker->Country = $request->USR_Country;
        $JobSeeker->City = $request->USR_City;
        $JobSeeker->ZipCode = $request->USR_ZipCode;
        $JobSeeker->Full_Address = $request->Full_Address;
        $JobSeeker->My_Desc = $request->My_Desc;

        if ($JobSeeker->update()) {
            if (empty($JobInfo)) {
                $JobInfo = new JobInfo();
            }
            return $this->extracted($request, $JobInfo, $USR_ID);
        }

    }

    /**
     * @param Request $request
     * @param $JobInfo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function extracted(Request $request, $JobInfo, int $USR_ID): \Illuminate\Http\RedirectResponse
    {
        $JobInfo->Job_Cate = $request->USR_Cate;
        $JobInfo->Experience = $request->USR_Exp;
        $JobInfo->C_Salary = $request->USR_C_Salary;
        $JobInfo->E_Salary = $request->USR_E_Salary;
        $JobInfo->USR_ID = $USR_ID;
        if ($JobInfo->save()) {
            return back()->with('Success!', 'Your Profile has been Updated!');
        } else {
            return back()->with('Error!', 'Bad Request 404!');
        }
    }
}
