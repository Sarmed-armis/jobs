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
        'why_choose_us',
        'created_at',
        'updated_at'
    ];


}
