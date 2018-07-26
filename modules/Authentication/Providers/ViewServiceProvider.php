<?php

namespace Modules\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $moduleViewsNamespace = 'auth';
        $viewsPath = base_path('modules/Authentication/Resources/views');

        $this->loadViewsFrom(realpath($viewsPath), $moduleViewsNamespace);
    }
}
