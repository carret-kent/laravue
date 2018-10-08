<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class DevelopmentServiceProvider extends ServiceProvider
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
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') !== 'production') {
            $this->registerServiceProviders();

            $this->registerFacadeAliases();
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Loda local service providers
     */
    protected function registerServiceProviders()
    {
        foreach ($this->localProviders as $provider)
        {
            $this->app->register($provider);
        }
    }

    /**
     * Load additional Aliases
     * Base file Alias load is /config/app.php => aliases
     */
    public function registerFacadeAliases()
    {
        $loader = AliasLoader::getInstance();
        foreach ($this->facadeAliases as $alias => $facade)
        {
            $loader->alias($alias, $facade);
        }
    }
}
