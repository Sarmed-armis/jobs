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

    public function requirements()
    {
        return $this->hasMany('App\JobRequirements','job_id','id');
    }

    public function responsibilities()
    {

        return $this->hasMany('App\JobResponsibilities','job_id','id');
    }

    public function languages()
    {
        return $this->hasMany('App\JobLanguage','job_id','id');
    }

    public function location()
    {
        return $this->hasOne('App\Locations','location_id','id');
    }

    public function department()
    {
        return $this->hasOne('App\Departments','department_id','id');
    }

    public function questions()
    {
        return $this->hasMany('App\Questions','job_id','id');
    }
}
