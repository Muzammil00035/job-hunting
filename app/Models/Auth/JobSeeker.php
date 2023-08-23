<?php

namespace App\Models\Auth;

use App\Models\CMP\JobPosted;
use App\Models\JobSeeker\JobInfo;
use App\Models\JobSeeker\UserEducation;
use App\Models\JobSeeker\UserEmployment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Globals\ApplicantJobs;

class JobSeeker extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'JobSeeker';
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the jobseeker associated with the JobSeeker
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function applicant(): BelongsTo
    {
        return $this->belongsTo(ApplicantJobs::class, 'USR_ID');
    }

    public function educations()
    {
        return $this->hasMany(UserEducation::class, 'USR_ID');
    }

    public function employment()
    {
        return $this->hasMany(UserEmployment::class, 'USR_ID');
    }

    public function jobInfo()
    {
        return $this->hasOne(JobInfo::class, 'USR_ID');
    }

}
