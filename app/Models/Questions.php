<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{

    protected $table = 'questions';

    protected $fillable = [
        'description',
        'max_answer',
        'job_id'
    ];

    public $timestamps = false;
}
