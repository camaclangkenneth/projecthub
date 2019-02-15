<?php

namespace App\Modules\Task\Providers;

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
        $this->loadTranslationsFrom(module_path('task', 'Resources/Lang', 'app'), 'task');
        $this->loadViewsFrom(module_path('task', 'Resources/Views', 'app'), 'task');
        $this->loadMigrationsFrom(module_path('task', 'Database/Migrations', 'app'), 'task');
        $this->loadConfigsFrom(module_path('task', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('task', 'Database/Factories', 'app'));
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
