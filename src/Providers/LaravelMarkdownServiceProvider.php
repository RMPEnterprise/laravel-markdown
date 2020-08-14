<?php

namespace RMPEnterprise\LaravelMarkdown\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;
use RMPEnterprise\LaravelMarkdown\LaravelMarkdownTransformer;

class LaravelMarkdownServiceProvider extends ServiceProvider implements DeferrableProvider
{
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
        $source = realpath(__DIR__ . '/../config/laravel-markdown.php');

        $this->publishes([$source => config_path('laravel-markdown.php')]);

        $this->mergeConfigFrom($source, 'laravel-markdown');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('laravelMarkdown', function () {
            return new LaravelMarkdownTransformer;
        });
    }
}
