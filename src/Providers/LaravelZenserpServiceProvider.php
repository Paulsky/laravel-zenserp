<?php

namespace WDevs\LaravelZenserp\Providers;

use Illuminate\Support\ServiceProvider;
use WDevs\LaravelZenserp\LaravelZenserp;

class LaravelZenserpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-zenserp');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-zenserp');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/zenserp.php' => config_path('zenserp.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-zenserp'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/laravel-zenserp'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-zenserp'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/zenserp.php', 'laravel-zenserp');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-zenserp', function () {
            return new LaravelZenserp;
        });
    }
}
