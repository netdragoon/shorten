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

        $this->url = url;

    }

    /**
     * @return mixed
     */
    public function content()
    {

        return $this
            ->client
            ->result(sprintf($this->address, $this->url));

    }
}