<?php

namespace Canducci\Shorten\Contracts;


abstract class ProviderContract
{

    protected $address;

    protected $client;

    protected $url;

    abstract public function content();

}