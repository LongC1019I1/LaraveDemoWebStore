<?php

namespace App\Providers;

use App\Http\Repositories\UserRepository;
use App\Http\Repositories\UserRepositoryInterface;
use App\Http\Services\UserService;
use App\Http\Services\UserServiceInterface;
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
        $this->app->singleton(UserServiceInterface::class, UserService::class );
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
    }
}
