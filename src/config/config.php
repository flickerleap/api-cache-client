<?php

return [
    'server' => env('API_CACHE_SERVER_URL', 'http://localhost/api/request'),
    'ttl' => env('API_CACHE_SERVER_TTL', '86400'), // 1 day
];