<?php

namespace VigStudio\TablerIcons;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class TablerIconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tabler-icons');
        File::requireOnce(__DIR__ . '/../helpers/icon.php');

        // Publish views
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/tabler-icons'),
        ], 'tabler-icons-views');

        // Load test routes in development
        if (app()->environment(['local', 'testing'])) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/test.php');
        }

        // Register facade alias globally
        if (! class_exists('TablerIcon')) {
            class_alias(\VigStudio\TablerIcons\Facades\TablerIcon::class, 'TablerIcon');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the TablerIcon service
        $this->app->singleton('tabler-icon', function () {
            return new TablerIcon();
        });

        // Register the facade alias
        $this->app->alias('tabler-icon', \VigStudio\TablerIcons\TablerIcon::class);
    }
}
