<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema as IlluminateSchema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $serviceBindings = $this->serviceBindings();
        foreach ($serviceBindings as $key => $val) {
            $this->app->bind($key, $val);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        IlluminateSchema::defaultStringLength(255);
    }

    private function serviceBindings()
    {
        return [
            "App\Services\Interfaces\UserServiceInterface" =>
            "App\Services\UserService",
            "App\Repositories\Interfaces\UserRepositoryInterface" =>
            "App\Repositories\UserRepository",
        ];
    }
}
