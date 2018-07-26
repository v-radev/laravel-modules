<?php

namespace Modules\Authentication\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'Modules\Authentication\Controllers';


    public function map()
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('modules/Authentication/Resources/authentication_routes.php'));
    }
}
