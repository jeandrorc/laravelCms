<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{

    protected $namespace = 'App\Http\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->siteWebRoutes();
        $this->mapApiRoutes();
        $this->mapAdminRoutes();
        $this->mapWebRoutes();
    }

    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => ['web'],
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    protected function siteWebRoutes()
    {
        Route::group([
            'middleware' => ['web','siteMidleware'],
            'as' => 'site.',
            'prefix' => '/',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/site.php');
        });
    }

    protected function mapAdminRoutes()
    {
        Route::group([
            'middleware' =>['web','admin'],
            'as' =>'admin.',
            'prefix' => 'admin',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/admin.php');
        });
    }

    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
            'as' => 'api.'
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}
