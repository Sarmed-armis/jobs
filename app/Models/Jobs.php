<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{


    protected $table = 'jobs';

    protected $fillable =[
        'title',
        'summary',
        'number_positions',
        'location_id',
        'department_id',
        'expiry',
        'employment_type',
        'salary',
        'min_age',
        'max_age',
        'experience',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
      'expiry'
    ];
}
