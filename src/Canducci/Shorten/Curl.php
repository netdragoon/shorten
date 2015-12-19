<?php

namespace Canducci\Shorten;

use Canducci\Shorten\Contracts\CurlContract;

class Curl extends CurlContract
{

    /**
     * @param $url
     * @return mixed
     */
    public function getResult($url)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec($ch);

        curl_close($ch);

        return $data;

    }

}