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
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
