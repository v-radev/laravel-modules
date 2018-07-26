<?php

namespace Modules\Main\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(ViewServiceProvider::class);

        if ($this->app->environment('local')) {
            // If you disable autodiscovery, them manually register providers here for local env
            // $this->app->register(ServiceProvider::class);
        }
    }
}
