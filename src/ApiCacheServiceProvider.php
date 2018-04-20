<?php

namespace FlickerLeap\ApiCache;

use Illuminate\Support\ServiceProvider;

class ApiCacheServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('api-cache.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ApiCache::class, function () {
            return new ApiCache();
        });
        $this->app->alias(ApiCache::class, 'api-cache');
    }
}