<?php

namespace Canducci\Shorten\Contracts;

abstract class GooglContract extends ProviderContract
{

    protected $key;

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