<?php

use Canducci\Shorten\Contracts\ProviderContract;
use Canducci\Shorten\IsGd;
use Canducci\Shorten\Shorten;

if (!function_exists('shorted'))
{

    function shorted(ProviderContract $provider)
    {

        return new Shorten($provider);

    }

}

if (!function_exists('isgd'))
{

    function isgd($url)
    {

        return new IsGd($url);

    }

}