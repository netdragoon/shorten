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

    /**
     * @param $url
     * @param $values
     * @param array $headers
     * @return mixed
     */
    public function postResult($url, $values, array $headers = array())
    {

        $ch = curl_init();

        $headers = array_merge(

            $headers,

            array
            (
                'Content-Type: application/json',
                'Content-Length: ' . strlen($values)
            )
        );

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_POST, 1);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $values);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $data = curl_exec($ch);

        curl_close($ch);

        return $data;

    }

}
