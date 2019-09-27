<?php

namespace LiranCo\LaravelIntercom;

use Intercom\IntercomClient;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Container\Container;

class LaravelIntercomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/intercom.php' => config_path('intercom.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/intercom.php', 'intercom');

        // Register the main class to use with the facade
        $this->app->singleton('intercom', function (Container $app) {
	        
	        $client = new IntercomClient($app['config']->get('intercom.access_token'));
	        
	        return new IntercomWrapper($client);
	        
        });
    }
}
