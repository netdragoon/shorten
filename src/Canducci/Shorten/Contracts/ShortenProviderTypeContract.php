<?php

namespace Canducci\Shorten\Contracts;

abstract class ShortenProviderTypeContract
{

    protected $name;

    protected $address;

    /**
     * ShortenProviderTypeContract constructor.
     * @param $name
     * @param $address
     */
    public function __construct($name, $address)
    {

        $this->name = $name;

        $this->address = $address;

    }


    /**
     * @return mixed
     */
    public function getName()
    {

        return $this->name;

    }

    /**
     * @return mixed
     */
    public function getAddress()
    {

        return $this->address;

    }

}