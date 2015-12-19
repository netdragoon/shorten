<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;

class IsGd extends ProviderContract
{

    /**
     * IsGd constructor.
     */
    public function __construct($url)
    {

        $this->address = 'http://is.gd/create.php?format=simple&url=%s';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->information['url'] = 'http://is.gd/';

        $this->information['name'] = 'IsGd';

    }

    /**
     * @return mixed
     */
    public function getContent()
    {

        return $this
            ->getClient()
            ->getResult(sprintf($this->address, $this->longurl));

    }
}