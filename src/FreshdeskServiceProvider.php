<?php

namespace Lamesya\Freshdesk;

use Exception;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class FreshdeskServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->booting( function () {
            $loader = AliasLoader::getInstance();
            $loader->alias( 'Freshdesk', 'Lamesya\Freshdesk\FreshdeskFacade' );
        } );

        $this->app->singleton(Freshdesk::class, function ($app) {
            $apiKey = $app['config']->get('services.freshdesk.api_key');
            $domain = $app['config']->get('services.freshdesk.domain');

            if (! $apiKey) {
                throw new Exception('Freshdesk was not configured in services.php configuration file.');
            }

            return new Freshdesk($apiKey, $domain);
        });

        $this->app->alias(Freshdesk::class, 'freshdesk');
    }
 
    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return ['freshdesk'];
    }
}