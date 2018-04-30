# API Cache Client

## Installation
```bash
composer require flickerleap/api-cache-client
```

Add to `.env`
```
API_CACHE_SERVER_URL=http://localhost.test/request
API_CACHE_SERVER_TTL=86400
```

## Usage
```php
use FlickerLeap\ApiCache\ApiCache;
use FlickerLeap\ApiCache\ApiCacheRequest;

/* ----- */

    $url = 'example.com';
    $token = 'some-token';

    $request = new ApiCacheRequest();

    $request->key = 'some-unique-identifier';
    $request->ttl = '10'; //Optional, will overwrite old TTL if new TTL has also already passed. Default set in config file.
    $request->type = 'refresh'; //Optional, will force a new pull.
    $request->meth = 'GET';
    $request->url = $url;
    $request->data = [
        'curl' => [
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_USERPWD => "$token:X",
        ],
    ];

    $response = ApiCache::request($request);
```

Optional to generate config file
```bash
php artisan vendor:publish vendor:publish --provider="FlickerLeap\ApiCache\ApiCacheServiceProvider"
```