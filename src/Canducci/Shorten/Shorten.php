<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;
use Canducci\Shorten\Contracts\ShortenContract;

class Shorten extends ShortenContract
{

    /**
     * Shorten constructor.
     * @param ProviderContract|null $provider
     */
    public function __construct(ProviderContract $provider = null)
    {

        if (is_null($provider) === false)
        {

            $this->setProvider($provider);

        }

    }

}