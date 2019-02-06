<?php

namespace App\Modules\Project\Providers;

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
        $this->loadTranslationsFrom(module_path('project', 'Resources/Lang', 'app'), 'project');
        $this->loadViewsFrom(module_path('project', 'Resources/Views', 'app'), 'project');
        $this->loadMigrationsFrom(module_path('project', 'Database/Migrations', 'app'), 'project');
        $this->loadConfigsFrom(module_path('project', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('project', 'Database/Factories', 'app'));
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
