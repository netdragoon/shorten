<?php

namespace Canducci\Shorten\Contracts;

abstract class CurlContract
{

    abstract public function getResult($url);

}