<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
         View::composer(
            ['site.*'],
            'App\Http\ViewComposers\SiteViewComposer'
        );
    }

}