<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ShortenProviderTypeContract;

class ShortenProviderType extends ShortenProviderTypeContract
{

    /**
     * ShortenProviderType constructor.
     */
    public function __construct($name, $address)
    {

        parent::__construct($name, $address);

    }
}