<?php

namespace App\Http\Livewire\Backend\Employer;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Globals\ApplicantJobs;

class GetJobApplicants extends Component
{
    public function render(Request $request)
    {
        $JOB_ID = $request->JOB_ID;
        $Jobs = ApplicantJobs::with(['company', 'job'])->where('JOB_ID', $JOB_ID)->get();
//         dd($Jobs->toArray());
        return view('livewire.backend.employer.get-job-applicants', compact('Jobs'))->layout('layouts.employer');
    }
}
