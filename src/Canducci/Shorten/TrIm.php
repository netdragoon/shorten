<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\TrImContract;

class TrIm extends TrImContract
{

    /**
     * TrIm constructor.
     */
    public function __construct($url, $key, $seed = null, $keyword = null, $vanitydomain = null)
    {

        parent::__construct();

        $this->create($url, $key, $seed, $keyword, $vanitydomain);

    }

    /**
     * @param $url
     * @param $key
     * @param null $seed
     * @param null $keyword
     * @param null $vanitydomain
     * @return $this
     */
    public function create($url, $key, $seed = null, $keyword = null, $vanitydomain = null)
    {

        $this->setAddress('https://tr.im/links');

        $this->setLongUrl($url);

        $this->setKey($key);

        $this->setSeed($seed);

        $this->setKeyword($keyword);

        $this->setVanityDomain($vanitydomain);

        $this->information['url'] = 'https://tr.im/';

        $this->information['name'] = 'TrIm';

        return $this;

    }

    /**
     * @return mixed
     */
    public function getContent()
    {

        $result = $this
            ->getClient()
            ->postResult(
                $this->getAddress(),
                json_encode(
                    array(
                        'long_url' => $this->getLongUrl(),
                        'seed' => $this->getSeed(),
                        'keyword' => $this->getKeyword(),
                        'vanity_domain' => $this->getVanityDomain()
                    )
                ),
            array('x-api-key:'.$this->getKey())
        );

        return json_decode($result)->url;

    }

}