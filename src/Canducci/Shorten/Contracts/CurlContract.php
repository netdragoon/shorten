<?php

namespace Canducci\Shorten\Contracts;

abstract class CurlContract
{

    abstract public function getResult($url);

    abstract public function postResult($url, $values, array $headers = array());

}