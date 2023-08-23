<?php

namespace App\Http\Livewire\Backend\Employer;

use App\Models\CMP\CompanyProfiles;
use App\Models\CMP\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class JobsPost extends Component
{
    public function render()
    {
        $EMP_ID = Auth::guard('Employer')->user()->id;
        $Company_Info = CompanyProfiles::where('EMP_ID', $EMP_ID)->first();
        return view('livewire.backend.employer.jobs-post', compact('Company_Info'))->layout('layouts.employer');
    }

    public function JobPost(Request $request)
    {
        // dd($request->all());

        $User_ID = Auth::guard('Employer')->user()->id;
        $CompanyID = CompanyProfiles::where('EMP_ID', $User_ID)->first();
        if (!empty($CompanyID)) {

            // return $User_ID;
            $JobPosted = new JobPosted();
            $JobPosted->Job_Title = $request->Job_Title;
            $JobPosted->Job_Category = $request->Job_Category;
            $JobPosted->Job_Type = $request->Job_Type;
            $JobPosted->Job_Salary = $request->Job_Salary;
            $JobPosted->Job_Experience = $request->Job_Experience;
            $JobPosted->Job_Qualification = $request->Job_Qualification;
            $JobPosted->Job_Gender = $request->Job_Gender;
            $JobPosted->Job_Country = $request->Job_Country;
            $JobPosted->Job_City = $request->Job_City;
            $JobPosted->Job_Email = $request->Job_Email;
            $JobPosted->Job_Website = $request->Job_Website;
            $JobPosted->Job_Address = $request->Job_Address;
            $JobPosted->Job_Desc = $request->Job_Desc;

            $JobPosted->Job_SDate = $request->Job_SDate;
            $JobPosted->Job_EDate = $request->Job_EDate;
            $JobPosted->EMP_ID = $User_ID;
            $CompanyID = CompanyProfiles::where('EMP_ID', $User_ID)->first();
            // dd($CompanyID);
            $JobPosted->CMP_ID = $CompanyID->id;

            if ($JobPosted->save()) {
                $Job_ID = $JobPosted->id;

                foreach ($request->Job_Req as $key => $value) {
                    // $insertQuery = ;
                    DB::insert("INSERT INTO `job_requirements`(`Requirement`, `EMP_ID`, `JOB_ID`, `CMP_ID`) VALUES ('" . $request->Job_Req[$key] . "', '" . $User_ID . "', '" . $Job_ID . "', '" . $CompanyID->id . "')");
                }

                foreach ($request->Job_Respons as $key => $value) {
                    // $insertQuery = ;
                    DB::insert("INSERT INTO `job_responsibilities`(`Responsibilities`, `EMP_ID`, `JOB_ID`, `CMP_ID`) VALUES ('" . $request->Job_Respons[$key] . "', '" . $User_ID . "', '" . $Job_ID . "', '" . $CompanyID->id . "')");
                }

                foreach ($request->Job_Questions as $key => $value) {
                    // $insertQuery = ;
                    DB::insert("INSERT INTO `job_questions`(`Questions`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `is_Correct`, `EMP_ID`, `JOB_ID`, `CMP_ID`) VALUES ('" . $request->Job_Questions[$key] . "', '" . $request->Option_A[$key] . "', '" . $request->Option_B[$key] . "', '" . $request->Option_C[$key] . "', '" . $request->Option_D[$key] . "', '" . $request->Is_Correct[$key] . "', '" . $User_ID . "', '" . $Job_ID . "', '" . $CompanyID->id . "')");
                }

                foreach ($request->Job_Subjective_Question as $key => $value) {
                    // $insertQuery = ;
                    DB::insert("INSERT INTO `job_subjectives`(`Sub_Questions`, `Sub_Answers`, `EMP_ID`, `JOB_ID`, `CMP_ID`) VALUES ('" . $request->Job_Subjective_Question[$key] . "', '" . $request->Job_Subjective_Answers[$key] . "', '" . $User_ID . "', '" . $Job_ID . "', '" . $CompanyID->id . "')");
                }

                foreach ($request->Job_Skills as $key => $value) {
                    // $insertQuery = ;
                    DB::insert("INSERT INTO `job_skills`(`Skills`, `EMP_ID`, `JOB_ID`, `CMP_ID`) VALUES ('" . $request->Job_Skills[$key] . "', '" . $User_ID . "', '" . $Job_ID . "', '" . $CompanyID->id . "')");
                }

                return back()->with('Success!', 'Data Inserted Successfully!');
            }
        }else{
            return back()->with('Error!', 'Please update your company profile first.');

        }
        return back()->with('Error!', 'Bad Request! => 400');
    }
}
