<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use \App\Models\Permissions;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        foreach ($this->getPermissions() as $permission) {
            $gate->define($permission->key, function ($user) use ($permission) {
                if ($user->hasRole($permission->key)) {
                    return true;
                };
            });
        }

    }


    public function getPermissions()
    {

        $Permissions = new Permissions();

        if(Schema::hasTable($Permissions->getTable()))
        {
            return $Permissions->all();
        }else{
            return [];
        }
    }

}
