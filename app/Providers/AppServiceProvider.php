<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->registerPolicies();
    
    //
//    Gate::define('isResto', function($user) {
//    return $user->role == 'RESTO';
//    });
//    Gate::define('isKurir', function($user) {
//    return $user->role == 'KURIR';
//    });
//    Gate::define('isKonsumen', function($user) {
//    return $user->role == 'KONSUMEN';
//    });
    }
}