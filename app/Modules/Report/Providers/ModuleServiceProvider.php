<?php

namespace App\Modules\Report\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('report', 'Resources/Lang', 'app'), 'report');
        $this->loadViewsFrom(module_path('report', 'Resources/Views', 'app'), 'report');
        $this->loadMigrationsFrom(module_path('report', 'Database/Migrations', 'app'), 'report');
        $this->loadConfigsFrom(module_path('report', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('report', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
