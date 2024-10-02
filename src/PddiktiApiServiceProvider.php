<?php

namespace IlhamriSKY\PddiktiApi;

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
        // Register the Api class in the service container as a singleton
        $this->app->singleton(Api::class, function ($app) {
            return new Api();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * This method is used to perform actions after all services are registered.
     * You can use this method to publish configuration files, routes, etc.
     *
     * @return void
     */
    public function boot()
    {
        // You can publish config, routes, or other assets here if needed in the future
    }
}
