<?php

namespace App\Http\Livewire\Backend\Employer;

use App\Models\CMP\JobSubjective;
use App\Models\CMP\ObjectiveResults;
use App\Models\CMP\SubjectiveResults;
use App\Models\Globals\ApplicantJobs;
use Illuminate\Support\Facades\View;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CMP\JobPosted;
use App\Models\CMP\JobQuestions;

class ResumeRecieved extends Component
{
    public function render()
    {
        $EMP_ID = Auth::guard('Employer')->user()->id;
        $Resumes = ApplicantJobs::with([
            'jobseeker' => function ($q) {
                $q->select('id', 'name', 'Applicant_Resume');
            },
            'job' => function ($q) {
                $q->select('id', 'Job_Title');
            }
        ])->where('EMP_ID', $EMP_ID)->get();

        $page_name = "resumes";

        // return dd($Resumes);


        return view('livewire.backend.employer.resume-recieved', compact('Resumes' , 'page_name'))->layout('layouts.employer' ,compact("page_name"));
    }

    //
    public function interviewResults(Request $request): string
    {
        if ($request->ajax()) {
            // $data = JobPosted::with([
            //     'applicants',
            //     'job_questions.answer',
            //     'subjective.answer'
            // ])
            //     ->whereRelation('applicants', 'USR_ID', '=', $request->USR_ID)
            //     ->find($request->JOB_ID);
                $data = JobPosted::with([
                'applicants' => function ($query) use($request) {
                    $query->where('USR_ID',$request->USR_ID);
                },
                'job_questions.answer' => function ($query) use($request) {
                    $query->where('USR_ID',$request->USR_ID);
                },
                'subjective.answer' => function ($query) use($request) {
                    $query->where('USR_ID',$request->USR_ID);
                }
            ])->find($request->JOB_ID);

                // return $data;

            $correctCount = $data->job_questions->pluck('answer')->where('Remarks', 'True')->count();
            $wrongCount = $data->job_questions->pluck('answer')->where('Remarks', 'False')->count();

            $output = view('partials.results.interview_results', [
                'data' => $data->job_questions,
                'correctCount' => $correctCount,
                'wrongCount' => $wrongCount,
            ])->render();

            $output2 = view('partials.results.subjective_results', [
                'data2' => $data->subjective,
            ])->render();

            return $output . $output2;
        }
        return 'Ajax Failed!';
    }
}
