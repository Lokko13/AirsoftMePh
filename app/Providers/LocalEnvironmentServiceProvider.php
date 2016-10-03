<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LocalEnvironmentServiceProvider extends ServiceProvider
{
    /**
     * List of Local Enviroment Providers
     * @var array
     */
    protected $localProviders = [
        'Barryvdh\Debugbar\ServiceProvider',
    ];

    /**
     * List of only Local Enviroment Facade Aliases
     * @var array
     */
    protected $facadeAliases = [
        'Debugbar' => 'Barryvdh\Debugbar\Facade',
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->env === 'local') {
            $this->registerServiceProviders();
            $this->registerFacadeAliases();
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /* Load service providers*/
    protected function registerServiceProviders()
    {
        foreach ($this->localProviders as $provider)
        {
            $this->app->register($provider);
        }
    }

    /* Load additional Aliases */
    public function registerFacadeAliases()
    {
        $loader = AliasLoader::getInstance();
        foreach ($this->facadeAliases as $alias => $facade)
        {
            $loader->alias($alias, $facade);
        }
    }
}
