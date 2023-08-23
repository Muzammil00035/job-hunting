<?php

namespace App\Models\Globals;

use App\Models\Auth\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CMP\CompanyProfiles;
use App\Models\Auth\JobSeeker;
use App\Models\CMP\JobPosted;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantJobs extends Model
{
    use HasFactory;
    protected $table = 'applicant_jobs';

    public function company()
    {
        return $this->belongsTo(CompanyProfiles::class, 'CMP_ID');
    }

    public function jobseeker(): BelongsTo
    {
        return $this->belongsTo(JobSeeker::class, 'USR_ID');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'EMP_ID');
    }

    /**
     * Get the job that owns the ApplicantJobs
     *
     * @return BelongsTo
     */
    public function job(): BelongsTo
    {
        return $this->belongsTo(JobPosted::class, 'JOB_ID');
    }
}
