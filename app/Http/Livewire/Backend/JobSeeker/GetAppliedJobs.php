<?php

namespace App\Http\Livewire\Backend\JobSeeker;

use App\Models\CMP\JobQuestions;
use App\Models\CMP\JobSubjective;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Globals\ApplicantJobs;

class GetAppliedJobs extends Component
{
    public function render()
    {
        $USR_ID = Auth::guard('JobSeeker')->user()->id;
        $ApplicantJobs = ApplicantJobs::with('job.company')->where('USR_ID', $USR_ID)->get();
//         dd($ApplicantJobs->toArray());
        return view('livewire.backend.job-seeker.get-applied-jobs', compact('ApplicantJobs'))->layout('layouts.job-seeker');
    }

    public function InterviewResults(Request $request)
    {
        if ($request->ajax()) {
            $data = JobQuestions::with('answer')->where('JOB_ID', $request->JOB_ID)->get();
            $output = '';
            if (count($data) > 0) {
                $i = 0;
                $Correct = 0;
                $Wrong = 0;
                foreach ($data as $Job) {
                    $OptionA = ($Job->is_Correct == 'Option A') ? 'checked' : '';
                    $OptionB = ($Job->is_Correct == 'Option B') ? 'checked' : '';
                    $OptionC = ($Job->is_Correct == 'Option C') ? 'checked' : '';
                    $OptionD = ($Job->is_Correct == 'Option D') ? 'checked' : '';

                    $OptionA_Class = ($Job->answer->Mark_Option == 'Option A' && $Job->answer->Remarks == 'False') ? 'text-danger' : '';
                    $OptionB_Class = ($Job->answer->Mark_Option == 'Option B' && $Job->answer->Remarks == 'False') ? 'text-danger' : '';
                    $OptionC_Class = ($Job->answer->Mark_Option == 'Option C' && $Job->answer->Remarks == 'False') ? 'text-danger' : '';
                    $OptionD_Class = ($Job->answer->Mark_Option == 'Option D' && $Job->answer->Remarks == 'False') ? 'text-danger' : '';


                    if ($Job->answer->Remarks == 'True') {
                        $Correct += 1;
                    } else {
                        $Wrong += 1;
                    }

                    $output .= '<div class="col-xl-6 col-lg-6">
                                                            <div class="form-group">
                                                                <label>' . $Job->Questions . '</label>
                                                                <div class="row twm-form-radio-inline">

                                                                    <div class="col-md-12">
                                                                        <input class="form-check-input" type="radio"' . $OptionA . '

                                                                            name="Answer[' . $i . ']"
                                                                            id="Answer1_' . $i . '"
                                                                            value="Option A">
                                                                        <label class="form-check-label ' . $OptionA_Class . '"
                                                                            for="Answer1_' . $i . '">
                                                                            ' . $Job->Option_A . '
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <input class="form-check-input" type="radio"' . $OptionB . '
                                                                            name="Answer[' . $i . ']"
                                                                            id="Answer2_' . $i . '"
                                                                            value="Option B">
                                                                        <label class="form-check-label ' . $OptionB_Class . '"
                                                                            for="Answer2_' . $i . '">
                                                                            ' . $Job->Option_B . '
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <input class="form-check-input" type="radio"' . $OptionC . '
                                                                            name="Answer[' . $i . ']"
                                                                            id="Answer3_' . $i . '"
                                                                            value="Option C">
                                                                        <label class="form-check-label ' . $OptionC_Class . '"
                                                                            for="Answer3_' . $i . '">
                                                                            ' . $Job->Option_C . '
                                                                        </label>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <input class="form-check-input" type="radio"' . $OptionD . '
                                                                            name="Answer[' . $i . ']"
                                                                            id="Answer4_' . $i . '"
                                                                            value="Option D">
                                                                        <label class="form-check-label ' . $OptionD_Class . '"
                                                                            for="Answer4_' . $i . '">
                                                                            ' . $Job->Option_D . '
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>';
                    $i++;
                }
                $output .= '<h4>Correct: ' . $Correct . ' <==> Wrong: ' . $Wrong . '</h4>';
            } else {
                $output .= '';
            }
            return $output;
        }
    }
}
