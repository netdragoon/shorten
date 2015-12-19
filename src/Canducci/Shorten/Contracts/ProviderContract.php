<?php

namespace Canducci\Shorten\Contracts;


abstract class ProviderContract
{

    protected $information = array();

    protected $address;

    protected $client;

    protected $longurl;

    abstract public function getContent();

    /**
     * @return mixed
     */
    protected function getClient()
    {

        return $this->client;

    }

    /**
     * @return mixed
     */
    public function getInformation()
    {

        return $this->information;

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
    public function getAddress()
    {

        return $this->address;

    }

}