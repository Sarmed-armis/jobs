<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','fullname','department_id','location_id','permission_group_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    public function department()
    {
        return $this->hasOne('App\Models\Departments','department_id','id');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Locations','location_id','id');
    }

    public function group()
    {
        return $this->hasOne('App\Models\PermissionsGroups','permission_group_id','id');
    }


}
