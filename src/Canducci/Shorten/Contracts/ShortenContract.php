<?php

namespace Canducci\Shorten\Contracts;

abstract class ShortenContract
{

    protected $provider;

    abstract public function create(ProviderContract $provider);

    abstract public function receive();


}