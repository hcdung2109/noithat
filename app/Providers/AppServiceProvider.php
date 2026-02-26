<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view): void {
            $siteSetting = null;

            if (Schema::hasTable('site_settings')) {
                $siteSetting = SiteSetting::query()->first();
            }

            $view->with('siteSetting', $siteSetting);
        });
    }
}
