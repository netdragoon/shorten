<?php

use Illuminate\Foundation\Testing;

class Shorten extends TestCase
{

    public function setUp()
    {

        parent::setUp();

    }

    public function getShortenInstance()
    {
        return app('shorten');
    }

    public function getBitlyInstance()
    {
        return app('bitly');
    }

    public function getGooglInstance()
    {
        return app('googl');
    }

    public function getIsGdInstance()
    {
        return app('isgd');
    }

    public function getMigreMeInstance()
    {
        return app('migreme');
    }

    public function getTinyUrlInstance()
    {
        return app('tinyurl');
    }

    public function getTrImInstance()
    {
        return app('trim');
    }

    public function testShortenInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenContract',
            $this->getShortenInstance());

    }

    public function testBitlyInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\BitlyContract',
            $this->getBitlyInstance());

    }

    public function testGooglInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\GooglContract',
            $this->getGooglInstance());

    }

    public function testIsGdInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\IsGdContract',
            $this->getIsGdInstance());

    }

    public function testMigreMeInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\MigreMeContract',
            $this->getMigreMeInstance());

    }

    public function testTinyUrlInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\TinyUrlContract',
            $this->getTinyUrlInstance());

    }

    public function testTrImInstance()
    {

        $this->assertInstanceOf('Canducci\Shorten\Contracts\TrImContract',
            $this->getTrImInstance());

    }

    public function testShortenReceiveBitly()
    {
        $bitly = $this->getBitlyInstance()->create('https://packagist.org','bc6da10fdeaf9464d82cdf475cfb3b19c1a506ca');
        $shorten = $this->getShortenInstance()->create($bitly);
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

    public function testShortenReceiveGoogl()
    {
        $googl = $this->getGooglInstance()->create('https://packagist.org','AIzaSyD8UPkwOX2SZJGBFKazFZ1wFIJeVu6UWMA');
        $shorten = $this->getShortenInstance()->create($googl);
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

    public function testShortenReceiveIsGd()
    {
        $isgd = $this->getIsGdInstance()->create('https://packagist.org');
        $shorten = $this->getShortenInstance()->create($isgd);
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

    public function testShortenReceiveMigreMe()
    {
        $migreme = $this->getMigreMeInstance()->create('https://packagist.org');
        $shorten = $this->getShortenInstance()->create($migreme);
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

    public function testShortenReceiveTinyUrl()
    {
        $tinyurl = $this->getMigreMeInstance()->create('https://packagist.org');
        $shorten = $this->getShortenInstance()->create($tinyurl);
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

    public function testShortenReceiveTrIm()
    {
        $trim = $this->getMigreMeInstance()->create('https://packagist.org');
        $shorten = $this->getShortenInstance()->create($trim,'36b56b77ac24e5595b626b38c6e00074');
        $receive = $shorten->receive();
        $this->assertInstanceOf('Canducci\Shorten\Contracts\ShortenReceiveContract',
            $receive);
    }

}