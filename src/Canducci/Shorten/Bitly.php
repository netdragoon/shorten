<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\BitlyContract;

class Bitly extends BitlyContract
{

    /**
     * Bitly constructor.
     * @param $url
     * @param $token
     */
    public function __construct($url, $token)
    {

        parent::__construct();

        $this->create($url, $token);

    }

    /**
     * @param $url
     * @param $token
     * @return $this
     */
    public function create($url, $token)
    {

        $this->setAddress('https://api-ssl.bitly.com/v3/shorten?access_token=%s&longUrl=%s&format=txt');

        $this->setLongUrl($url);

        $this->setToken($token);

        $this->information['url'] = 'http://www.bitly.com/';

        $this->information['name'] = 'Bitly';

        return $this;

    }

    /**
     * @return mixed
     */
    public function getContent()
    {

        return $this
            ->getClient()
            ->getResult(sprintf($this->address, $this->token, $this->longurl));

    }

}