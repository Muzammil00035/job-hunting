@foreach ($data as $job)
    <div class="col-xl-3 col-lg-3">
        <div class="form-group">
            <label>{{ $job->Questions }}</label>
            <div class="row twm-form-radio-inline">
                @foreach (['A', 'B', 'C', 'D'] as $option)
                    @php
                        $isChecked = ($job->answer->Mark_Option === 'Option ' . $option) ? 'checked' : '';
                        $optionClass = ($job->answer->Mark_Option !== 'Option ' . $option) ? '' : 'text-danger';
                        $correctOptionClass = ($job->is_Correct === 'Option ' . $option) ? 'text-success' : '';
                    @endphp
                    <div class="col-md-12">
                        <input class="form-check-input" type="radio" {{ $isChecked }} name="Answer[]" id="Answer{{ $option }}_{{ $job->id }}" value="Option {{ $option }}">
                        <label class="form-check-label {{ $optionClass }} {{ $correctOptionClass }}" for="Answer{{ $option }}_{{ $job->id }}">
                            {{ $job->{'Option_' . $option} }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
<h4>Correct: {{ $correctCount }} <==> Wrong: {{ $wrongCount }}</h4>
