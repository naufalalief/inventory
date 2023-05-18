<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Vendors;
use App\Policies\VendorsPolicy;
use Spatie\Permission\Contracts\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Vendors::class => VendorsPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // Gate::define('create', 'read', 'update', 'delete',  function ($user) {

        //     if ($user->role == 'admin') {
        //         return true;
        //     }

        //     return false;
        // });
        // Gate::define('create', 'read', function ($user) {

        //     if ($user->role == 'user') {
        //         return true;
        //     }

        //     return false;
        // });
    }
}
