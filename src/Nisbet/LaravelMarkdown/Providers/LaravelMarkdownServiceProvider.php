<?php

namespace Nisbet\LaravelMarkdown\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelMarkdownServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravelMarkdown'];
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../../config/laravel-markdown.php' => $this->app->getConfigurationPath() . '/' . ('laravel-markdown.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../../config/laravel-markdown.php', 'laravel-markdown');

        $this->app->singleton('laravelMarkdown', function () {
            return new \Nisbet\LaravelMarkdown\LaravelMarkdownTransformer();
        });
    }
}
