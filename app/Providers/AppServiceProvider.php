<?php

namespace App\Providers;

use App\Models\MailConfig;
use App\Models\SiteConfig;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Route;

class AppServiceProvider extends ServiceProvider
{
    public function boot(SiteConfig $siteConfig)
    {
        Carbon::setLocale('pt-br');

        if  (Schema::hasTable('site_config')){
            $this->siteConfig(SiteConfig::select('key','value')->get()->toArray());
        }
        if  (Schema::hasTable('mail_config')){
            $this->mailConfig(MailConfig::first());
        }
    }

    private function siteConfig($config)
    {
        foreach ($config as $item) {
            config()->set(['site'=>$item]);
        }
    }

    private function mailConfig($config)
    {
        if ($config){
            config()->set(['mail'=>$config->toArray()]);
        }
    }

    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Iber\Generator\ModelGeneratorProvider');
        }
    }
}
