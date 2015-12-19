<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\MigreMeContract;

class MigreMe extends MigreMeContract
{

    /**
     * MigreMe constructor.
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

        $this->address = 'http://migre.me/api.txt?url=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->information['url'] = 'http://migre.me/';

        $this->information['name'] = 'MigreMe';

        return $this;

    }

}