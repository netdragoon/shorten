<?php

namespace Canducci\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

class Shorten extends Facade
{

    /**
     *
     */
    protected static function getFacadeAccessor()
    {

        return 'shorten';

    }

}