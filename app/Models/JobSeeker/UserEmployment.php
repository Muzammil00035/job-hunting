<?php

namespace App\Models\JobSeeker;

use App\Models\Auth\JobSeeker;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEmployment extends Model
{
    use HasFactory;
    protected $table = 'user_employments';

    public function jobseeker()
    {
        return $this->belongsTo(JobSeeker::class, 'USR_ID');
    }
}
