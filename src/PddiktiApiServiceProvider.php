<?php

namespace Ilhamrisky\PddiktiApi;

use Illuminate\Support\ServiceProvider;

class PddiktiApiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * This method is used to bind classes or interfaces into Laravel's
     * service container. We will register the API class here so that
     * it can be injected and used easily throughout the Laravel application.
     *
     * @return void
     */
    public function register()
    {
        // Register the Api class in the service container
        $this->app->singleton(Api::class, function ($app) {
            return new Api();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * This method is used to perform actions that should happen after
     * all other services are registered. It can be used to publish
     * configuration files, routes, and other package assets if needed.
     *
     * @return void
     */
    public function boot()
    {
        // No assets or configurations to publish, but you can add logic here if needed
    }
}
