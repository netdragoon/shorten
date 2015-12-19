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
     * @param mixed $name
     * @return ShortenProviderTypeContract
     */
    protected function setName($name)
    {

        $this->name = $name;

        return $this;

    }

    /**
     * @param mixed $address
     * @return ShortenProviderTypeContract
     */
    protected function setAddress($address)
    {

        $this->address = $address;

        return $this;

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