<?php

namespace App\Providers;

use App\Http\Repositories\UserRepository;
use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Services\UserServices;
use App\Http\Services\UserServicesInterface;
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
        $this->app->singleton(UserServicesInterface::class, UserServices::class );
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
    }
}
