<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;

class TinyUrl extends ProviderContract
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
     */
    public function create($url)
    {

        $this->address = 'http://tinyurl.com/api-create.php?url=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->information['url'] = 'http://tinyurl.com/';

        $this->information['name'] = 'TinyUrl';

    }

}