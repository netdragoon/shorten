<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ShortenProviderTypeContract;

class ShortenProviderType extends ShortenProviderTypeContract
{

    /**
     * ShortenProviderType constructor.
     * @param $name
     * @param $address
     */
    public function __construct($name, $address)
    {

        parent::__construct($name, $address);

    }

}