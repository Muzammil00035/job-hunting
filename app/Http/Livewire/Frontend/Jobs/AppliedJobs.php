<?php

namespace App\Http\Livewire\Frontend\Jobs;

use App\Models\Auth\JobSeeker;
use App\Models\CMP\JobQuestions;
use App\Models\CMP\JobSubjective;
use App\Models\Globals\ApplicantJobs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AppliedJobs extends Component
{
    public function render(Request $request)
    {

        $authUser = Auth::guard('JobSeeker')->user();

        $JOB_ID = $request->JOB_ID;
        $EMP_ID = $request->EMP_ID;
        $Job_Objective = JobQuestions::where('JOB_ID', $JOB_ID)->get();
        $Job_Subjective = JobSubjective::where('JOB_ID', $JOB_ID)->get();
// dd($Job_Objective->toArray());
        return view('livewire.frontend.jobs.applied-jobs', compact('JOB_ID', 'EMP_ID', 'Job_Objective', 'Job_Subjective', 'authUser'))->layout('layouts.main');
    }

    public function JobRequest(Request $request): RedirectResponse
    {
        // dd($request->all());
        $authUser = Auth::guard('JobSeeker')->user();
        $lastUserID = JobSeeker::orderBy('id', 'DESC')->first();
        $L_PID = 0;
        if ($lastUserID == null) {
            $L_PID = 1;
        } else {
            $L_PID = $lastUserID->id + 1;
        }

        // $validator = Validator::make($request->all(), [
        //     'Applicant_Email' => 'required|email',
        //     'Applicant_Name' => 'required',
        //     'Applicant_Password' => 'required',
        //     'Applicant_Phone' => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return back()->with('Error!', '400 Bad Request \n Validations Failed');
        // }

        $JOB_ID = $request->JOB_ID;
        $EMP_ID = $request->EMP_ID;

        $JobSeeker = JobSeeker::where('email', $authUser->email)->first();

        if (!empty($JobSeeker)) {
            $this->JobInfoUploadResume($request, $JobSeeker, $L_PID);

            if ($JobSeeker->update()) {
                $Applicant = ApplicantJobs::where('USR_ID', $authUser->id)->where('JOB_ID', $JOB_ID)->first();
                if (!empty($Applicant)) {
                    return back()->with('Error!', 'Your Already Applied on Current Job!');
                } else {
                    return $this->JobApplicant($JobSeeker, $JOB_ID, $EMP_ID, $request);

                }
            }
        } else {
            $JobSeeker = new JobSeeker();
            $this->JobInfo($request, $JobSeeker, $L_PID);

            if ($JobSeeker->save()) {
                return $this->JobApplicant($JobSeeker, $JOB_ID, $EMP_ID, $request);

            }
        }
        return back()->with('Error!', 'Bad Request 404!');
    }

    /**
     * @param Request $request
     * @param JobSeeker $JobSeeker
     * @param int $L_PID
     * @return void
     */
    public function JobInfo(Request $request, JobSeeker $JobSeeker, int $L_PID): void
    {
        $JobSeeker->name = $request->Applicant_Name;
        $JobSeeker->email = $request->Applicant_Email;
        $JobSeeker->phone = $request->Applicant_Phone;
        $JobSeeker->password = bcrypt($request->Applicant_Password);
        $JobSeeker->Applicant_Designation = $request->Applicant_Designation;
        $JobSeeker->Applicant_CMP_Address = $request->Applicant_CMP_Address;
        $JobSeeker->Job_SDate = $request->Job_SDate;
        $JobSeeker->Notice_Period = $request->Notice_Period;
        $JobSeeker->Applicant_Skills = $request->Applicant_Skills;
        $JobSeeker->Applicant_Role = $request->Applicant_Role;
        $JobSeeker->Applicant_Specilization = $request->Applicant_Specilization;
        $JobSeeker->Applicant_College = $request->Applicant_College;
        $JobSeeker->Applicant_Passing = $request->Applicant_Passing;

        $Resume = $request->file('Applicant_Resume');
        $logoName = 'Resume_' . time() . '.' . $Resume->extension();
        $Resume->move(public_path('Uploads/USR/' . $L_PID . '/'), $logoName);
        $JobSeeker->Applicant_Resume = 'Uploads/USR/' . $L_PID . '/' . $logoName;
    }

    public function JobInfoUploadResume(Request $request, JobSeeker $JobSeeker, int $L_PID): void
    {

        $Resume = $request->file('Applicant_Resume');
        $logoName = 'Resume_' . time() . '.' . $Resume->extension();
        $Resume->move(public_path('Uploads/USR/' . $L_PID . '/'), $logoName);
        $JobSeeker->Applicant_Resume = 'Uploads/USR/' . $L_PID . '/' . $logoName;
    }

    /**
     * @param JobSeeker $JobSeeker
     * @param $JOB_ID
     * @param $EMP_ID
     * @param Request $request
     * @return RedirectResponse
     */
    public function JobApplicant(JobSeeker $JobSeeker, $JOB_ID, $EMP_ID, Request $request): RedirectResponse
    {

        // dd($request->QA_SID);
        $Applicant = new ApplicantJobs();
        $Applicant->USR_ID = $JobSeeker->id;
        $Applicant->JOB_ID = $JOB_ID;
        $Applicant->EMP_ID = $EMP_ID;
        $Applicant->save();
        foreach ($request->Correct_Answers as $key => $value) {
            $Remarks = ($request->Correct_Answers[$key] == $request->Answer[$key]) ? 'True' : 'False';
            DB::insert("INSERT INTO `objective_results`(`Correct_Option`, `Mark_Option`, `Remarks`, `USR_ID`, `JOB_ID`, `QA_ID`) VALUES ('" . $request->Correct_Answers[$key] . "', '" . $request->Answer[$key] . "', '" . $Remarks . "', '" . $JobSeeker->id . "', '" . $JOB_ID . "', '" . $request->QA_OID[$key] . "')");
        }
        foreach ($request->Subjective_Answers as $key => $value) {
            $Remarks = $this->SubjectiveResults($request->Subjective_Answers[$key], $request->Candidate_Answer[$key]);
            DB::insert("INSERT INTO `subjective_results`(`Correct_Answer`, `Candidate_Answer`, `Remarks`, `USR_ID`, `JOB_ID`, `QA_ID`) VALUES ('" . $request->Subjective_Answers[$key] . "', '" . $request->Candidate_Answer[$key] . "', '" . $Remarks . "', '" . $JobSeeker->id . "', '" . $JOB_ID . "', '" . $request->QA_SID[$key] . "')");
        }
        return back()->with('Success!', 'Applied Successfully!');
    }

    private function SubjectiveResults($s1, $s2)
    {
        $response = Http::post('https://damp-scrubland-56346.herokuapp.com/similarity', [
            'string1' => $s1,
            'string2' => $s2,
        ]);

        if ($response->ok()) {
            $responseData = $response->json(); // get response as json
            return $responseData['similarity_score'] * 100;
            // do something with the response data
        } else {
            // handle error response
            // get error message from response body
            return $response->body();
        }
    }
}
