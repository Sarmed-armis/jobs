<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{

    protected $table = 'question_answers';

    protected $fillable = [
        'answer',
        'question_id',
    ];


    public $timestamps = false;
}
