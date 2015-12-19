<?php

namespace Canducci\Shorten\Contracts;

use Canducci\Shorten\ShortenProviderType;
use Canducci\Shorten\ShortenReceive;

abstract class ShortenContract
{

    protected $provider;

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
    public function getProvider()
    {

        return $this->provider;

    }

    /**
     * @param mixed $provider
     * @return ShortenContract
     */
    protected function setProvider($provider)
    {

        $this->provider = $provider;

        return $this;

    }

    /**
     * @return mixed
     */
    public function receive()
    {

        $receive['shorturl'] = $this->provider->getContent();

        $receive['longurl'] = $this->provider->getLongUrl();

        $providerType = new ShortenProviderType(

            $this->provider->getInformation()['name'],

            $this->provider->getInformation()['url']

        );

        return new ShortenReceive($providerType, $receive);

    }

}