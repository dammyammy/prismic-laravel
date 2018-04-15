<?php

namespace TedbreeDigital\Prismic;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../stubs/config/prismic.php' => config_path('prismic.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../stubs/views', 'prismic');

        $this->publishes([
            __DIR__.'/../stubs/views' => resource_path('views/vendor/prismic'),
        ], 'views');
    }



    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        \View::composer('*', \TedbreeDigital\Prismic\ViewComposers\PrismicComposer::class);

        $this->app->singleton('prismic', function ($app) {
            return new Prismic();
        });

        $this->app->bind(
            \TedbreeDigital\Prismic\Contracts\LinkResolverInterface::class,
            \TedbreeDigital\Prismic\LinkResolver::class
        );

        $this->mergeConfigFrom(
            __DIR__.'/../stubs/config/prismic.php', 'prismic'
        );
    }
}