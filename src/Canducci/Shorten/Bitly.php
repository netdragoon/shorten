<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\BitlyContract;

class Bitly extends BitlyContract
{

    protected $token;

    /**
     * Bitly constructor.
     * @param $url
     * @param $token
     */
    public function __construct($url, $token)
    {

        $this->create($url, $token);

    }

    /**
     * @param $url
     * @param $token
     * @return $this
     */
    public function create($url, $token)
    {

        $this->address = 'https://api-ssl.bitly.com/v3/shorten?access_token=%s&longUrl=%s&format=txt';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->token = $token;

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