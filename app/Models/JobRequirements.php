<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobRequirements extends Model
{

    protected $table = 'job_requirements';


    protected $fillable = [
        'description',
        'job_id'
    ];

    public $timestamps = false;
}
