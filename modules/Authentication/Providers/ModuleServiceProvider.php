<?php

namespace Modules\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom( base_path('modules/Authentication/Resources/migrations') );
    }

    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(ViewServiceProvider::class);
    }
}
