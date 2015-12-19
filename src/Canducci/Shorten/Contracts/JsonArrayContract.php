<?php
/**
 * Created by PhpStorm.
 * User: Fulvio
 * Date: 18/12/2015
 * Time: 22:11
 */

namespace Canducci\Shorten\Contracts;


abstract class JsonArrayContract
{

    abstract public function toArray();

    abstract public function toJson();

}