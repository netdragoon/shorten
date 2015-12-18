<?php

namespace Canducci\Shorten\Providers;

use Canducci\Shorten\Shorten;
use Illuminate\Support\ServiceProvider;

class ShortenServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('shorten', function($app)
        {

            new Shorten(null);

        });
    }
}