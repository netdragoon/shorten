<?php

namespace Canducci\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

class TinyUrl extends Facade
{

    protected static function getFacadeAccessor ()
    {

        return 'tinyurl';

    }


}