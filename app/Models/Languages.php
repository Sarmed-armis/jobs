<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Languages extends Model
{

    protected $table = 'language_name';

    protected $fillable = [
        'language_name'
    ];

    public $timestamps = false;



}
