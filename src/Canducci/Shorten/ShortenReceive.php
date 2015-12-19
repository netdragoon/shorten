<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ShortenProviderTypeContract;
use Canducci\Shorten\Contracts\ShortenReceiveContract;

class ShortenReceive extends ShortenReceiveContract
{

    /**
     * ShortenReceive constructor.
     * @param ShortenProviderTypeContract $providerType
     * @param array $receive
     */
    public function __construct(ShortenProviderTypeContract $providerType, array $receive)
    {

        parent::__construct($providerType, $receive);

    }

    /**
     * @return array
     */
    public function toArray()
    {

        $values = array();

        $values['shorturl'] = $this->getShortUrl();

        $values['longurl'] = $this->getLongUrl();

        $values['provider'] = array(

            'name' => $this->getProviderType()->getName(),

            'address' => $this->getProviderType()->getAddress()

        );

        return $values;

    }

    /**
     * @return json
     */
    public function toJson()
    {

        return json_encode($this->toArray(),  JSON_PRETTY_PRINT);

    }

}