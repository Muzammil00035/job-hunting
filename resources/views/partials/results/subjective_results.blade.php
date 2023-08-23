<h3 class="modal-title text-center" id="sign_up_popupLabel2">Subjective Results</h3>
@foreach ($data2 as $job)
    <div class="col-xl-12 col-lg-12">
        <p class="text-center">Question: <strong>{{ $job->Sub_Questions }}</strong></p>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="form-group">
                    <label>Correct Answer</label>
                    <textarea readonly class="form-control">{{ $job->answer->Correct_Answer }}</textarea>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="form-group">
                    <label>Your Answer</label>
                    <textarea readonly class="form-control">{{ $job->answer->Candidate_Answer }}</textarea>
                </div>
            </div>
            <div class="col-xl-1 col-lg-1">
                <div class="progress green">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">{{ number_format($job->answer->Remarks, 1, '.', '') }}%</div>
                </div>
            </div>
        </div>
    </div>
@endforeach
