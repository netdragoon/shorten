<?php

use Canducci\Shorten\Contracts\ProviderContract;
use Canducci\Shorten\IsGd;
use Canducci\Shorten\MigreMe;
use Canducci\Shorten\Shorten;
use Canducci\Shorten\TinyUrl;

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

if (!function_exists('tinyurl'))
{

    function tinyurl($url)
    {

        return new TinyUrl($url);

    }

}

if (!function_exists('migreme'))
{

    function migreme($url)
    {

        return new MigreMe($url);

    }

}

if (!function_exists('bitly'))
{

    function bitly($url, $token)
    {

        return new \Canducci\Shorten\Bitly($url, $token);

    }

}