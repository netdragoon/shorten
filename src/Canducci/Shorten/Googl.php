<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\GooglContract;

class Googl extends GooglContract
{

    /**
     * Googl constructor.
     * @param $url
     * @param $key
     */
    public function __construct($url, $key)
    {

        parent::__construct();

        $this->create($url, $key);

    }

    /**
     * @param $url
     * @param $key
     * @return $this
     */
    public function create($url, $key)
    {

        $this->setAddress('https://www.googleapis.com/urlshortener/v1/url?key=%s');

        $this->setLongUrl($url);

        $this->setKey($key);

        $this->information['url'] = 'https://www.googleapis.com/';

        $this->information['name'] = 'Googl';

        return $this;

    }

    /**
     * @return mixed
     */
    public function getContent()
    {

        $result = $this
            ->getClient()
            ->postResult(
                sprintf($this->address, $this->key),
                json_encode(
                    array('longUrl' => $this->longurl)
                )
            );

        return json_decode($result)->id;

    }

}