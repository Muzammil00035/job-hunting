<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Employer;
use App\Models\Globals\ApplicantJobs;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyProfiles extends Model
{
    use HasFactory;
    // protected $table = [];
    protected $table = 'company_profiles';

    public function jobs()
    {
        return $this->hasMany(JobPosted::class, 'CMP_ID', 'id');
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, 'EMP_ID');
    }

    /**
     * Get all of the applicants for the JobPosted
     *
     * @return HasMany
     */
    public function applicants()
    {
        return $this->hasMany(ApplicantJobs::class, 'JOB_ID');
    }

}
