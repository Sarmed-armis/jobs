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

    public function type()
    {
        return $this->hasOne('App\Models\QuestionTypes','type_id','id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\QuestionAnswer','question_id','id');
    }
}
