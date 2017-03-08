<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionsGroups extends Model
{
    protected $table = 'permissions_groups';
    protected $fillable = ['name','description'];
    public $timestamps = false;
}
