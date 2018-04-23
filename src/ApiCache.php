<?php

namespace FlickerLeap\ApiCache;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiCache
{
    public static function request(ApiCacheRequest $params)
    {
        $client = new Client();
        $params->ttl = ($params->ttl) ? $params->ttl : config('api-cache.ttl');

        try {
            $response = $client->request('POST', config('api-cache.server'), ['form_params' => $params->toArray()]);
        } catch (GuzzleException $e) {
            return "Error sending to caching server: " . $e->getMessage();
        }

        $body = $response->getBody();
        return json_decode($body->getContents(), true);
    }

}
