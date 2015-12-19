<?php

namespace Canducci\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

class Googl extends Facade
{

    protected static function getFacadeAccessor ()
    {

        return 'googl';

    }

}