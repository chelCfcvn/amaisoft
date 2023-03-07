<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer(
            'dashboard',
            'App\View\StaffComposer'
        );
        view()->composer(
            ['staffs.edit','staffs.create','positions.show'],
            'App\View\PositionComposer'
        );
        view()->composer(
            ['staffs.edit','staffs.create','departments.show'],
            'App\View\DepartmentComposer'
        );
        view()->composer(
            ['users.show'],
            'App\View\UserComposer'
        );
        view()->composer(
            ['users.create'],
            'App\View\StaffNoUserComposer'
        );
        view()->composer(
            ['manager.staffs'],
            'App\View\StaffOfManagerComposer'
        );
        view()->composer(
            ['manager.profile'],
            'App\View\ManagerProfileComposer'
        );
        view()->composer(
            ['staff.profile'],
            'App\View\StaffProfileComposer'
        );
        view()->composer(
            ['mails.pas'],
            'App\View\PassUserComposer'
        );

    }
}
