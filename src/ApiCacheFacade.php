<?php

namespace FlickerLeap\ApiCache;

use Illuminate\Support\Facades\Facade;

class ApiCacheFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'api-cache';
    }
}