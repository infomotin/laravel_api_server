<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Geolocation\Geolocation;
use App\Services\MAP\Map;
use App\Services\Satellite\Satellite;

class GeolocationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Geolocation::class, function ($app) {
            $map = new Map();
            $satellite = new Satellite();

            return new Geolocation($map, $satellite);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
