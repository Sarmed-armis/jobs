<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';

    protected $fillable = [
        'gender',
        'firstname',
        'lastname',
        'birthday',
        'mobile',
        'email',
        'cv',
        'city_id',
        'job_id',
        'status',
        'why_choose_us',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'birthday'
    ];

    public function city()
    {
        return $this->hasOne('App\Models\Cities','city_id','id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\ApplicantAnswers','applicant_id','id');
    }

}
