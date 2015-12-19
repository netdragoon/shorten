<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;

class Googl extends ProviderContract
{

    private $key;

    /**
     * Googl constructor.
     */
    public function __construct($url, $key)
    {

        $this->create($url, $key);

    }

    /**
     * @param $url
     * @param $key
     */
    public function create($url, $key)
    {

        $this->address = 'https://www.googleapis.com/urlshortener/v1/url?key=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->key = $key;

        $this->information['url'] = 'https://www.googleapis.com/';

        $this->information['name'] = 'Googl';

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