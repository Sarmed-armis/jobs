<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = 'permissions';

    protected $fillable = [
        'key',
        'description'
    ];

    public $timestamps = false;
}
