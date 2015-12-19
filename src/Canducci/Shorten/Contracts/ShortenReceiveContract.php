<?php

namespace Canducci\Shorten\Contracts;

abstract class ShortenReceiveContract extends JsonArrayContract
{

    protected $longurl;

    protected $shorturl;

    protected $providerType;

    /**
     * ShortenReceiveContract constructor.
     * @param ShortenProviderTypeContract $providerType
     * @param array $receive
     */
    public function __construct(ShortenProviderTypeContract $providerType, array $receive)
    {

        $this->providerType = $providerType;

        $this->longurl = $receive['longurl'];

        $this->shorturl = $receive['shorturl'];

    }

    /**
     * @return mixed
     */
    public function getLongUrl()
    {

        return $this->longurl;

    }

    /**
     * @return mixed
     */
    public function getShortUrl()
    {

        return $this->shorturl;

    }

    /**
     * @return mixed
     */
    public function getProviderType()
    {

        return $this->providerType;

    }



}