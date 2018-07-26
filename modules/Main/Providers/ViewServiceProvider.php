<?php

namespace Modules\Main\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $moduleViewsNamespace = 'main';
        $viewsPath = base_path('modules/Main/Resources/views');

        $this->loadViewsFrom(realpath($viewsPath), $moduleViewsNamespace);
    }
}
