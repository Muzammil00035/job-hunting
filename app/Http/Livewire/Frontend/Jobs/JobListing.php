<?php

namespace App\Http\Livewire\Frontend\Jobs;

use App\Models\CMP\JobPosted;
use Livewire\Component;

class JobListing extends Component
{
    public function render()
    {
        $param = isset($_GET['search']);
        if ($param) {
            $paramValue = $_GET['search'];
            $JobsList = JobPosted::where('Job_Title', 'like', '%' . $paramValue . '%')->with(
                [
                    'company',
                ])->get();
        } else {
            $JobsList = JobPosted::with(
                [
                    'company',
                ])->get();
        }

        return view('livewire.frontend.jobs.job-listing', compact('JobsList'))->layout('layouts.main');
    }
}
