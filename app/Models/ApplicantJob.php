<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantJob extends Model
{
    protected $table = 'applicant_jobs';
    protected $fillable = [
        'job_id',
        'applicant_id',
        'status',
        'updated_at',
        'created_at'
    ];


}
