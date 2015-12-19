<?php

use Canducci\Shorten\Bitly;
use Canducci\Shorten\Googl;
use Canducci\Shorten\IsGd;
use Canducci\Shorten\MigreMe;
use Canducci\Shorten\Shorten;
use Canducci\Shorten\TinyUrl;
use Canducci\Shorten\TrIm;
use Canducci\Shorten\Contracts\ProviderContract;

if (!function_exists('shorten'))
{

    function shorten(ProviderContract $provider)
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

        return new Bitly($url, $token);

    }

}

if (!function_exists('googl'))
{

    function googl($url, $key)
    {

        return new Googl($url, $key);

    }

}

if (!function_exists('tr_im'))
{

    function tr_im($url, $key)
    {

        return new TrIm($url, $key);

    }

}