<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicantAnswers extends Model
{
    protected $table = 'applicant_answers';
    protected $fillable = [
        'querstion_id',
        'answer_id',
        'applicant_id'
    ];

    public $timestamps = false;
}
