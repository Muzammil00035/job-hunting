<?php

namespace App\Http\Livewire\Backend\Employer;

use Livewire\Component;
use App\Models\CMP\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageJobs extends Component
{
    public function render()
    {
        $userID = Auth::guard('Employer')->user()->id;
        $Jobs = JobPosted::where('EMP_ID', $userID)->withCount('applicants')->orderBy('id', 'DESC')->get();
        return view('livewire.backend.employer.manage-jobs', compact('Jobs'))->layout('layouts.employer');
    }

    public function DeleteJob(Request $request)
    {
        // dd($request->all());
        $JobID = $request->id;
        $userID = Auth::guard('Employer')->user()->id;
        $DeleteJob = JobPosted::where('id', $JobID)->where('EMP_ID', $userID)->delete();
        if ($DeleteJob) {
            return back()->with('Success!', 'Job Deleted Successfully!');
        }
        return back()->with('Error!', 'Bad Request! => 400 \n Job Not Deleted');
    }
}
