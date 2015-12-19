<?php

namespace Canducci\Shorten\Contracts;

use Canducci\Shorten\Shorten;

abstract class GooglContract extends ProviderContract
{

    protected $key;

    /**
     * GooglContract constructor.
     */
    public function __construct()
    {

        parent::__construct();

    }


    /**
     * @return mixed
     */
    protected function getKey()
    {

        return $this->key;

    }

    /**
     * @param mixed $key
     * @return GooglContract
     */
    protected function setKey($key)
    {

        $this->key = $key;

        return $this;

    }

}