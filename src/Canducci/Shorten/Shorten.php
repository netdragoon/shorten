<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;
use Canducci\Shorten\Contracts\ShortenContract;

class Shorten extends ShortenContract
{

    /**
     * Shorten constructor.
     */
    public function __construct(ProviderContract $provider = null)
    {

        if (is_null($provider) === false)
        {

            $this->provider = $provider;

        }

    }

    /**
     * @param ProviderContract $provider
     * @return $this
     */
    public function create(ProviderContract $provider)
    {

        $this->provider = $provider;

        return $this;

    }

    /**
     * @return mixed
     */
    public function receive()
    {

        return $this->provider->content();

    }


}