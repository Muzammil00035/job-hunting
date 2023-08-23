<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CMP\JobPosted;

class JobRequirements extends Model
{
    use HasFactory;

    protected $table = "job_requirements";
    protected $fillable = ['Requirement', 'EMP_ID', 'JOB_ID', 'CMP_ID'];

    public function company()
    {
        return $this->belongsTo(CompanyProfiles::class, );
    }

    public function employee()
    {
        return $this->belongsTo(Employer::class, );
    }

    public function job()
    {
        return $this->belongsTo(JobPosted::class, );
    }
}
