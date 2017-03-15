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
        'image',
        'experience',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
      'expiry'
    ];

    public function requirements()
    {
        return $this->hasMany('App\Models\JobRequirements','id','job_id');
    }

    public function responsibilities()
    {
        return $this->hasMany('App\Models\JobResponsibilities','id','job_id');
    }

    public function languages()
    {
        return $this->hasMany('App\Models\JobLanguage','id','job_id');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Locations','id','location_id');
    }

    public function department()
    {
        return $this->hasOne('App\Models\Departments','id','department_id');
    }

    public function questions()
    {
        return $this->hasMany('App\Models\Questions','id','job_id');
    }

}
