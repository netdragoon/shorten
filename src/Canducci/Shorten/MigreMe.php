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

        parent::__construct();

        $this->create($url);

    }

    /**
     * @param $url
     * @return $this
     */
    public function create($url)
    {

        $this->setAddress('http://migre.me/api.txt?url=%s');

        $this->setLongUrl($url);

        $this->information['url'] = 'http://migre.me/';

        $this->information['name'] = 'MigreMe';

        return $this;

    }

}