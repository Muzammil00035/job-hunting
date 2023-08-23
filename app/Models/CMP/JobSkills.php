<?php

namespace App\Models\CMP;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSkills extends Model
{
    use HasFactory;

    protected $table = "job_skills";
    protected $fillable = ['Skills', 'EMP_ID', 'JOB_ID', 'CMP_ID'];

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
