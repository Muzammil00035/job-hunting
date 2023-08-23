<?php

namespace App\Http\Livewire\Backend\JobSeeker;

use App\Models\Auth\JobSeeker;
use Illuminate\Http\Request;
use Livewire\Component;

class ViewProfile extends Component
{
    public function render(Request $request)
    {

        $jobSeeker = JobSeeker::with('jobInfo')->find($request->id);

        // return dd($jobSeeker->jobInfo);

        return view('livewire.backend.job-seeker.view-profile', compact('jobSeeker'))->layout('layouts.job-seeker-profile');
    }

    public function sendEmail(Request $request)
    {
        if ($request->user_id) {
            $user = JobSeeker::find($request->user_id);
            // Contact::create($input);

            //  Send mail to admin
            if (!empty($user)) {
                \Mail::send('emails.interview', array(
                    'name' => $user->name,
                    'email' => "muzammilarbi00035@gmail.com",

                    'subject' => "Shortlist Alert Email",
                    'm' => $request->message,
                ), function ($message) use ($user) {
                    $message->from("webitaltech@gmail.com");
                    $message->to($user->email, $user->name)->subject("Shortlist Alert Email");
                });
            }

            return $request->all();
        }
        // return redirect()->back()
        // ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);

    }
}
