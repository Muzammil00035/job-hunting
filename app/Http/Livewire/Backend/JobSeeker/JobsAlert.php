<?php

namespace App\Http\Livewire\Backend\JobSeeker;

use App\Models\CMP\JobPosted;
use Livewire\Component;

class JobsAlert extends Component
{
    public function render()
    {
        $JobsList = JobPosted::limit(10)->orderBy('id', 'DESC')->get();
        return view('livewire.backend.job-seeker.jobs-alert', compact('JobsList'))->layout('layouts.job-seeker');;
    }
}
