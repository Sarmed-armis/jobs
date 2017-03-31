<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use League\Flysystem\Exception;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'fullname',
        'department_id',
        'location_id',
        'permission_group_id',
        'status',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function department()
    {
        return $this->hasOne('App\Models\Departments','id','department_id');
    }

    public function location()
    {
        return $this->hasOne('App\Models\Locations','id','location_id');
    }

    public function group()
    {
        return $this->hasOne('App\Models\PermissionsGroups','id','permission_group_id');
    }



    /**
     * This function check user if has permission
     * @param string $role
     * @return bool
     */
    public function hasRole($role = '')
    {

        try {

            $permissions = [];

            foreach ($this->group->permissions as $permission)
            {
                $permissions[] = $permission->roles->key;
            }

            return in_array($role,$permissions);

        }catch (Exception $e){

            return false;
        }

    }

}
