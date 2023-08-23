<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobSubjective extends Model
{
    use HasFactory;
    protected $table = 'job_subjectives';

    protected $fillable = ['Sub_Questions', 'Sub_Answers', 'EMP_ID', 'JOB_ID', 'CMP_ID'];

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
        return $this->belongsTo(JobPosted::class, 'JOB_ID');
    }

    public function answer(): HasOne
    {
        return $this->hasOne(SubjectiveResults::class, 'QA_ID');
    }
}
