<?php

namespace App\Models\CMP;

use App\Models\Auth\JobSeeker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubjectiveResults extends Model
{
    use HasFactory;
    protected $table = 'subjective_results';

    /**
     * Get the jobseeker that owns the ObjectiveResults
     *
     * @return BelongsTo
     */
    public function jobseeker(): BelongsTo
    {
        return $this->belongsTo(JobSeeker::class, 'USR_ID', 'id');
    }

    /**
     * Get the job that owns the ObjectiveResults
     *
     * @return BelongsTo
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(JobPosted::class, 'JOB_ID', 'id');
    }

    /**
     * Get the question that owns the ObjectiveResults
     *
     * @return BelongsTo
     */
    public function question(): BelongsTo
    {
        return $this->belongsTo(JobSubjective::class, 'QA_ID', 'id');
    }
}
