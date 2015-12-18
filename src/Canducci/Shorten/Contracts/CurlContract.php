<?php

namespace Canducci\Shorten\Contracts;

abstract class CurlContract
{

    abstract public function result($url);

}