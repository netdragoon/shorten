<?php

namespace Canducci\Shorten\Providers;

use Canducci\Shorten\Bitly;
use Canducci\Shorten\Googl;
use Canducci\Shorten\MigreMe;
use Canducci\Shorten\Shorten;
use Canducci\Shorten\TinyUrl;
use Canducci\Shorten\TrIm;
use Canducci\Shorten\IsGd;

use Canducci\Shorten\Contracts\BitlyContract;
use Canducci\Shorten\Contracts\GooglContract;
use Canducci\Shorten\Contracts\MigreMeContract;
use Canducci\Shorten\Contracts\ShortenContract;
use Canducci\Shorten\Contracts\TinyUrlContract;
use Canducci\Shorten\Contracts\TrImContract;
use Canducci\Shorten\Contracts\IsGdContract;

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

        $this->app->singleton('bitly', function()
        {

            return new Bitly(null, null);

        });

        $this->app->singleton('googl', function()
        {

            return new Googl(null, null);

        });

        $this->app->singleton('isgd', function()
        {

            return new IsGd(null);

        });

        $this->app->singleton('migreme', function()
        {

            return new MigreMe(null);

        });

        $this->app->singleton('tinyurl', function()
        {

            return new TinyUrl(null);

        });

        $this->app->singleton('trim', function()
        {

            return new TrIm(null, null);

        });

        $this->app->singleton('shorten', function()
        {

            return new Shorten(null);

        });

        $this->app->bind(BitlyContract::class, 'bitly');
        $this->app->bind(GooglContract::class, 'googl');
        $this->app->bind(IsGdContract::class, 'isgd');
        $this->app->bind(MigreMeContract::class, 'migreme');
        $this->app->bind(TinyUrlContract::class, 'tinyurl');
        $this->app->bind(TrimContract::class, 'trim');
        $this->app->bind(ShortenContract::class, 'shorten');

    }

}