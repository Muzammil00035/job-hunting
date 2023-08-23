<?php

namespace App\Models\CMP;

use App\Models\Auth\JobSeeker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Employer;
use App\Models\CMP\CompanyProfiles;
use App\Models\Globals\ApplicantJobs;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobPosted extends Model
{
    use HasFactory;
    // protected $table = [];
    protected $table = 'job_posteds';

    public function company()
    {
        return $this->belongsTo(CompanyProfiles::class, 'CMP_ID');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'EMP_ID');
    }

    /**
     * Get all of the job_questions for the JobPosted
     *
     * @return HasMany
     */
    public function job_questions(): HasMany
    {
        return $this->hasMany(JobQuestions::class, 'JOB_ID');
    }

    /**
     * Get all of the subjective for the JobPosted
     *
     * @return HasMany
     */
    public function subjective(): HasMany
    {
        return $this->hasMany(JobSubjective::class, 'JOB_ID');
    }

    /**
     * Get all of the requirements for the JobPosted
     *
     * @return HasMany
     */
    public function requirements()
    {
        return $this->hasMany(JobRequirements::class, 'JOB_ID');
    }

    /**
     * Get all of the responsibilites for the JobPosted
     *
     * @return HasMany
     */
    public function responsibilites()
    {
        return $this->hasMany(JobResponsibilities::class, 'JOB_ID');
    }

    /**
     * Get all of the skills for the JobPosted
     *
     * @return HasMany
     */
    public function skills()
    {
        return $this->hasMany(JobSkills::class, 'JOB_ID');
    }

    public function applicants(): HasMany
    {
        return $this->hasMany(ApplicantJobs::class, 'JOB_ID');
    }

    public function available_applicants() {
        return $this->applicants()->where('USR_ID','=', 17);
    }
}
