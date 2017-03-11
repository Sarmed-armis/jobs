<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionsRoles extends Model
{
    protected $table = 'permissions_roles';
    protected $fillable = ['group_id','permission_id'];
    public $timestamps = false;

    public function permission()
    {
        return $this->hasOne('App\Models\Permission','id','permission_id');
    }
}
