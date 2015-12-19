<?php

namespace Canducci\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

class MigreMe extends Facade
{

    protected static function getFacadeAccessor ()
    {

        return 'migreme';

    }

}