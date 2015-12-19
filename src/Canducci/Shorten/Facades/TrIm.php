<?php

namespace Canducci\Shorten\Facades;

use Illuminate\Support\Facades\Facade;

class TrIm extends Facade
{

    protected static function getFacadeAccessor ()
    {

        return 'trim';

    }

}