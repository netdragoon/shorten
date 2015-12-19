##Canducci Shorten Url

__Providers:__ _BitLy_, _Googl_, _IsGd_, _MigreMe_, _TinyUrl_ and _TrIm._

[![Build Status](https://travis-ci.org/netdragoon/shorten.svg?branch=master)](https://travis-ci.org/netdragoon/shorten)
[![Packagist](https://img.shields.io/packagist/dt/canducci/shorten.svg?style=flat)](https://packagist.org/packages/canducci/shorten)
[![Packagist](https://img.shields.io/packagist/dd/canducci/shorten.svg?style=flat)](https://packagist.org/packages/canducci/shorten)
[![Packagist](https://img.shields.io/packagist/dm/canducci/shorten.svg?style=flat)](https://packagist.org/packages/canducci/shorten)
[![Packagist](https://img.shields.io/packagist/l/canducci/shorten.svg)](https://packagist.org/packages/canducci/shorten)
[![Packagist](https://img.shields.io/packagist/v/canducci/shorten.svg?label=version)](https://packagist.org/packages/canducci/shorten)
[![](https://img.shields.io/twitter/url/https/packagist.org/packages/canducci/shorten.svg?style=social)]()

The package offers providers in their most current version can be selected for obtaining URL shortened. Are they:

- Bitly (https://bitly.com/)
- Googl (https://developers.google.com/url-shortener/v1/getting_started)
- IsGd (http://is.gd)
- MigreMe (http://migre.me/)
- TinyUrl (http://tinyurl.com/)
- TrIm (https://tr.im/links)

All of these providers work in a clear and objective manner to generate the urls, of course you must choose one or perhaps all for the generation of short url for your systems.

## Quick start

### Required setup

In the `require` key of `composer.json` file add the following

```PHP
"canducci/shorten": "0.0.1" 

```

Run the Composer update comand

```PHP
$ composer update
```    

In your `config/app.php` add `providers` array

```PHP   
'providers' => [ 
    ...,
    Canducci\Shorten\Providers\ShortenServiceProvider::class,
    
```
    
At the end of `config/app.php` add o `aliases` (Facade) in array

```PHP
'aliases' => [ 
    ...,
    'Shorten' => Canducci\Shorten\Facades\Shorten::class,
    'IsGd' => Canducci\Shorten\Facades\IsGd::class,
    'TinyUrl' => Canducci\Shorten\Facades\TinyUrl::class,
    'TrIm' => Canducci\Shorten\Facades\TrIm::class,
    'Googl' => Canducci\Shorten\Facades\Googl::class,
    'MigreMe' => Canducci\Shorten\Facades\MigreMe::class,
    'Bitly' => Canducci\Shorten\Facades\Bitly::class,

```

### How to use?

Simple example using only one of the providers (IsGd):

```PHP
$provider = IsGd::create('https://packagist.org/packages/canducci/shorten');

$shorten = Shorten::create($provider);

$receive = $shorten->receive();

var_dump($receive);
var_dump($receive->getLongUrl());
var_dump($receive->getShortUrl());
var_dump($receive->getProviderType()->getName());
var_dump($receive->getProviderType()->getAddress());

//results
object(Canducci\Shorten\ShortenReceive)#225 (3) {
  ["longurl":protected]=>
  string(47) "https://packagist.org/packages/canducci/shorten"
  ["shorturl":protected]=>
  string(19) "http://is.gd/amftYu"
  ["providerType":protected]=>
  object(Canducci\Shorten\ShortenProviderType)#224 (2) {
    ["name":protected]=>
    string(4) "IsGd"
    ["address":protected]=>
    string(13) "http://is.gd/"
  }
}

string(47) "https://packagist.org/packages/canducci/shorten"

string(19) "http://is.gd/amftYu"

string(4) "IsGd"

string(13) "http://is.gd/"

```

_Injection Contracts_

```PHP
Route::get('shorten1',
    function(
        Canducci\Shorten\Contracts\IsGdContract $isgd,
        Canducci\Shorten\Contracts\TinyUrlContract $tinyurl,
        Canducci\Shorten\Contracts\MigreMeContract $migreme,
        Canducci\Shorten\Contracts\BitlyContract $bitly,
        Canducci\Shorten\Contracts\GooglContract $googl,
        Canducci\Shorten\Contracts\TrImContract $trim,
        Canducci\Shorten\Contracts\ShortenContract $shorten
    )
{   

    $provider0 = $isgd->create('https://packagist.org/packages/canducci/shorten');
    $provider1 = $tinyurl->create('https://packagist.org/packages/canducci/shorten');
    $provider2 = $migreme->create('https://packagist.org/packages/canducci/shorten');
    $provider3 = $bitly->create('https://packagist.org/packages/canducci/shorten','key_bitly');
    $provider4 = $googl->create('https://packagist.org/packages/canducci/shorten','key_google');
    $provider5 = $trim->create('https://packagist.org/packages/canducci/shorten','key_api');

    $shorten0 = $shorten->create($provider0);
    $shorten1 = $shorten->newInstance()->create($provider1);
    $shorten2 = $shorten->newInstance()->create($provider2);
    $shorten3 = $shorten->newInstance()->create($provider3);
    $shorten4 = $shorten->newInstance()->create($provider4);
    $shorten5 = $shorten->newInstance()->create($provider5);

    echo $shorten0->receive()->getShortUrl();
    echo '<br>';
    echo $shorten1->receive()->getShortUrl();
    echo '<br>';
    echo $shorten2->receive()->getShortUrl();
    echo '<br>';
    echo $shorten3->receive()->getShortUrl();
    echo '<br>';
    echo $shorten4->receive()->getShortUrl();
    echo '<br>';
    echo $shorten5->receive()->getShortUrl();

    return;


});
```

_Facades_

```PHP
$provider0 = IsGd::create('https://packagist.org/packages/canducci/shorten');
$provider1 = TinyUrl::create('https://packagist.org/packages/canducci/shorten');
$provider2 = MigreMe::create('https://packagist.org/packages/canducci/shorten');
$provider3 = Bitly::create('https://packagist.org/packages/canducci/shorten','key_bitly');
$provider4 = Googl::create('https://packagist.org/packages/canducci/shorten','key_google');
$provider5 = TrIm::create('https://packagist.org/packages/canducci/shorten','key_api');

$shorten0 = Shorten::create($provider0);
$shorten1 = Shorten::newInstance()->create($provider1);
$shorten2 = Shorten::newInstance()->create($provider2);
$shorten3 = Shorten::newInstance()->create($provider3);
$shorten4 = Shorten::newInstance()->create($provider4);
$shorten5 = Shorten::newInstance()->create($provider5);

echo $shorten0->receive()->getShortUrl();
echo '<br>';
echo $shorten1->receive()->getShortUrl();
echo '<br>';
echo $shorten2->receive()->getShortUrl();
echo '<br>';
echo $shorten3->receive()->getShortUrl();
echo '<br>';
echo $shorten4->receive()->getShortUrl();
echo '<br>';
echo $shorten5->receive()->getShortUrl();

```

_Functions_

```PHP
$provider0 = isgd('https://packagist.org/packages/canducci/shorten');
$provider1 = tinyurl('https://packagist.org/packages/canducci/shorten');
$provider2 = migreme('https://packagist.org/packages/canducci/shorten');
$provider3 = bitly('https://packagist.org/packages/canducci/shorten','key_bitly');
$provider4 = googl('https://packagist.org/packages/canducci/shorten','key_google');
$provider5 = tr_im('https://packagist.org/packages/canducci/shorten','key_api');

$shorten0 = shorten($provider0);
$shorten1 = shorten($provider1);
$shorten2 = shorten($provider2);
$shorten3 = shorten($provider3);
$shorten4 = shorten($provider4);
$shorten5 = shorten($provider5);

echo $shorten0->receive()->getShortUrl();
echo '<br>';
echo $shorten1->receive()->getShortUrl();
echo '<br>';
echo $shorten2->receive()->getShortUrl();
echo '<br>';
echo $shorten3->receive()->getShortUrl();
echo '<br>';
echo $shorten4->receive()->getShortUrl();
echo '<br>';
echo $shorten5->receive()->getShortUrl();
```

_Single Instance_

```PHP
$provider0 = new \Canducci\Shorten\IsGd('https://packagist.org/packages/canducci/shorten');
$provider1 = new \Canducci\Shorten\TinyUrl('https://packagist.org/packages/canducci/shorten');
$provider2 = new \Canducci\Shorten\MigreMe('https://packagist.org/packages/canducci/shorten');
$provider3 = new \Canducci\Shorten\Bitly('https://packagist.org/packages/canducci/shorten','key_bitly');
$provider4 = new \Canducci\Shorten\Googl('https://packagist.org/packages/canducci/shorten','key_google');
$provider5 = new \Canducci\Shorten\TrIm('https://packagist.org/packages/canducci/shorten','key_api');

$shorten0 = new \Canducci\Shorten\Shorten($provider0);
$shorten1 = new \Canducci\Shorten\Shorten($provider1);
$shorten2 = new \Canducci\Shorten\Shorten($provider2);
$shorten3 = new \Canducci\Shorten\Shorten($provider3);
$shorten4 = new \Canducci\Shorten\Shorten($provider4);
$shorten5 = new \Canducci\Shorten\Shorten($provider5);

echo $shorten0->receive()->getShortUrl();
echo '<br>';
echo $shorten1->receive()->getShortUrl();
echo '<br>';
echo $shorten2->receive()->getShortUrl();
echo '<br>';
echo $shorten3->receive()->getShortUrl();
echo '<br>';
echo $shorten4->receive()->getShortUrl();
echo '<br>';
echo $shorten5->receive()->getShortUrl();

```

### Note

These three providers below must have a register in that site to be released to generate short url with token or key provided on the same register.

- Bitly (key_bitly) (https://bitly.com/)
- Googl (key_google) (https://developers.google.com/url-shortener/v1/getting_started)
- TrIm (key_api) (https://tr.im/links)

Different from the others only need to have information as to url so long to run the code successfully.