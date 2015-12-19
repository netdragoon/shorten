<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\ProviderContract;

class TrIm extends ProviderContract
{

    private $seed;

    private $key;

    private $keyword;

    private $vanitydomain;

    /**
     * TrIm constructor.
     */
    public function __construct($url, $key, $seed = null, $keyword = null, $vanitydomain = null)
    {

        $this->address = 'https://tr.im/links';

        $this->client = new Curl();

        $this->longurl = $url;

        $this->key = $key;

        $this->seed = $seed;

        $this->keyword = $keyword;

        $this->vanitydomain = $vanitydomain;

        $this->information['url'] = 'https://tr.im/';

        $this->information['name'] = 'TrIm';

    }

    public function getContent()
    {

        $result = $this
            ->getClient()
            ->postResult(

                $this->address,

                json_encode(

                    array(
                        'long_url' => $this->longurl,
                        'seed' => $this->seed,
                        'keyword' => $this->keyword,
                        'vanity_domain' => $this->vanitydomain
                    )

                ),

            array('x-api-key:'.$this->key)

        );

        return json_decode($result)->url;


    }



}