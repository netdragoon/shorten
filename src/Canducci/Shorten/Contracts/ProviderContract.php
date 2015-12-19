<?php

namespace Canducci\Shorten\Contracts;

use Canducci\Shorten\Curl;

abstract class ProviderContract
{

    protected $information = array();

    protected $address;

    protected $client;

    protected $longurl;

    /**
     * ProviderContract constructor.
     */
    public function __construct()
    {

        $this->setClient(new Curl());

    }


    /**
     * @param $longurl
     * @return $this
     */
    protected function setLongUrl($longurl)
    {

        $this->longurl = $longurl;

        return $this;

    }

    /**
     * @param $client
     * @return $this
     */
    protected function setClient($client)
    {

        $this->client = $client;

        return $this;

    }

    /**
     * @param $address
     * @return $this
     */
    protected function setAddress($address)
    {

        $this->address = $address;

        return $this;

    }

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

    /**
     * @return mixed
     */
    public function getContent()
    {

        return $this
            ->getClient()
            ->getResult(sprintf($this->address, $this->longurl));

    }

}