<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionTypes extends Model
{
    protected $table = 'question_types';

    protected $fillable = [
        'type'
    ];

    public $timestamps = false;
}
