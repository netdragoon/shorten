<?php

namespace Canducci\Shorten\Contracts;

abstract class TrImContract extends ProviderContract
{

    protected $seed;

    protected $key;

    protected $keyword;

    protected $vanitydomain;

    /**
     * TrImContract constructor.
     */
    public function __construct()
    {

        parent::__construct();

    }

    /**
     * @return mixed
     */
    protected function getSeed()
    {

        return $this->seed;

    }

    /**
     * @param mixed $seed
     * @return TrImContract
     */
    protected function setSeed($seed)
    {

        $this->seed = $seed;

        return $this;

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
     * @return TrImContract
     */
    protected function setKey($key)
    {

        $this->key = $key;

        return $this;

    }

    /**
     * @return mixed
     */
    protected function getKeyword()
    {

        return $this->keyword;

    }

    /**
     * @param mixed $keyword
     * @return TrImContract
     */
    protected function setKeyword($keyword)
    {

        $this->keyword = $keyword;

        return $this;

    }

    /**
     * @return mixed
     */
    protected function getVanityDomain()
    {

        return $this->vanitydomain;

    }

    /**
     * @param mixed $vanitydomain
     * @return TrImContract
     */
    protected function setVanityDomain($vanitydomain)
    {

        $this->vanitydomain = $vanitydomain;

        return $this;
    }

}