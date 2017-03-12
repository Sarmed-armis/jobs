<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobLanguage extends Model
{
    protected $table = 'job_languages';

    protected $fillable = [
        'language_id',
        'job_id',
    ];

    public $timestamps = false;
}
