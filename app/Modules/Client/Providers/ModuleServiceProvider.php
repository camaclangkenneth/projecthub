<?php

namespace App\Modules\Client\Providers;

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
        $this->loadTranslationsFrom(module_path('client', 'Resources/Lang', 'app'), 'client');
        $this->loadViewsFrom(module_path('client', 'Resources/Views', 'app'), 'client');
        $this->loadMigrationsFrom(module_path('client', 'Database/Migrations', 'app'), 'client');
        $this->loadConfigsFrom(module_path('client', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('client', 'Database/Factories', 'app'));
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
