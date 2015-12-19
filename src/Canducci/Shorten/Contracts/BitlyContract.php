<?php

namespace Canducci\Shorten\Contracts;

abstract class BitlyContract extends ProviderContract
{

    protected $token;

    /**
     * @return mixed
     */
    protected function getToken()
    {

        return $this->token;

    }

    /**
     * @param mixed $token
     * @return BitlyContract
     */
    protected function setToken($token)
    {

        $this->token = $token;

        return $this;

    }

}