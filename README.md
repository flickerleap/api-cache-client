# API Cache Client

## Installation
```bash
composer require flickerleap/api-cache-client
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
    $request->type = 'refresh'; //This will force an update
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