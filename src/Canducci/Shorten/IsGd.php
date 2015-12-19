<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\IsGdContract;

class IsGd extends IsGdContract
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

        $this->setAddress('http://is.gd/create.php?format=simple&url=%s');

        $this->setLongUrl($url);

        $this->information['url'] = 'http://is.gd/';

        $this->information['name'] = 'IsGd';

        return $this;

    }

}