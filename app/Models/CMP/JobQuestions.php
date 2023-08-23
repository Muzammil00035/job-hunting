<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobQuestions extends Model
{
    use HasFactory;
    protected $table = 'job_questions';

    protected $fillable = ['Questions', 'Option_A', 'Option_B', 'Option_C', 'Option_D', 'is_Correct', 'EMP_ID', 'JOB_ID', 'CMP_ID'];

    public function company()
    {
        return $this->belongsTo(CompanyProfiles::class, );
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, );
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo(JobPosted::class, 'JOB_ID');
    }

    /**
     * Get the answer associated with the JobQuestions
     *
     * @return HasOne
     */
    public function answer(): HasOne
    {
        return $this->hasOne(ObjectiveResults::class, 'QA_ID');
    }
}
