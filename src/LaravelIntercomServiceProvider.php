<?php

namespace LiranCo\LaravelIntercom;

use Intercom\IntercomClient;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;

class LaravelIntercomServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/intercom.php' => config_path('intercom.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/intercom.php', 'intercom');
        
        $this->app->singleton('intercom', function (Container $app) {
            
            $client = new IntercomClient($app['config']->get('intercom.access_token'));
            
            return new IntercomWrapper($client);
            
        });
    }
}
