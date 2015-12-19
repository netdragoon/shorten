<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;

class IsGd extends ProviderContract
{

    /**
     * IsGd constructor.
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

        $this->address = 'http://is.gd/create.php?format=simple&url=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->information['url'] = 'http://is.gd/';

        $this->information['name'] = 'IsGd';

        return $this;

    }
}