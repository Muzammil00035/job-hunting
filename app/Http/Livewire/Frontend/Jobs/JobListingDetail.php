<?php

namespace App\Http\Livewire\Frontend\Jobs;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\CMP\JobPosted;

class JobListingDetail extends Component
{
    public function render(Request $request)
    {
        $JOB_ID = $request->id;
        $JobsList = JobPosted::with(
            [
                'company',
                'job_questions',
                'requirements',
                'responsibilites',
                'skills'
            ])->withCount('applicants')->where('id', $JOB_ID)->first();

        return view('livewire.frontend.jobs.job-listing-detail', compact('JobsList'))->layout('layouts.main');
    }
}
