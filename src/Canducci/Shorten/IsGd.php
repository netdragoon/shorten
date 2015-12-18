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

        $this->address = 'http://is.gd/create.php?format=simple&url={0}';

        $this->client = new Curl();

        $this->url = url;

    }

    /**
     * @return mixed
     */
    public function content()
    {

        return $this->client->result($this->url);

    }
}