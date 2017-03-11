<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobResponsibilities extends Model
{
    protected $table = 'job_responsibilities';

    protected $fillable = [
        'description',
        'job_id'
    ];

    public $timestamps = false;
}
