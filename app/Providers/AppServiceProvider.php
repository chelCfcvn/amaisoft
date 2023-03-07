<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LoginService::class, function ($app) {
            return new LoginService();
        });
        $this->app->bind(AdminService::class, function ($app) {
            return new AdminService();
        });
        $this->app->bind(StaffService::class, function ($app) {
            return new StaffService();
        });
        $this->app->bind(PositionService::class, function ($app) {
            return new PositionService();
        });
        $this->app->bind(DepartmentService::class, function ($app) {
            return new DepartmentService();
        });
        $this->app->bind(UserService::class, function ($app) {
            return new UserService();
        });
        $this->app->bind(SendMailService::class, function ($app) {
            return new SendMailService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
