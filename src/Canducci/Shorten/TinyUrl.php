<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\TinyUrlContract;

class TinyUrl extends TinyUrlContract
{

    /**
     * TinyUrl constructor.
     * @param $url
     */
    public function __construct($url)
    {

        $this->create($url);

    }

    /**
     * @param $url
     * @return $this
     */
    public function create($url)
    {

        $this->address = 'http://tinyurl.com/api-create.php?url=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->information['url'] = 'http://tinyurl.com/';

        $this->information['name'] = 'TinyUrl';

        return $this;

    }

}