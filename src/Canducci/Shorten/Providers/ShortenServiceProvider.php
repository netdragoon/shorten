<?php

namespace Canducci\Shorten\Providers;

use Canducci\Shorten\Bitly;
use Canducci\Shorten\Googl;
use Canducci\Shorten\MigreMe;
use Canducci\Shorten\Shorten;
use Canducci\Shorten\TinyUrl;
use Canducci\Shorten\TrIm;
use Canducci\Shorten\IsGd;
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

        $this->app->singleton('trim', function()
        {

            return new TrIm(null, null);

        });

        $this->app->singleton('tinyurl', function()
        {

            return new TinyUrl(null);

        });

        $this->app->singleton('migreme', function()
        {

            return new MigreMe(null);

        });

        $this->app->singleton('googl', function()
        {

            return new Googl(null, null);

        });

        $this->app->singleton('bitly', function()
        {

            return new Bitly(null, null);

        });

        $this->app->singleton('isgd', function()
        {

            return new IsGd(null);

        });

        $this->app->singleton('shorten', function()
        {

            return new Shorten(null);

        });

    }

}