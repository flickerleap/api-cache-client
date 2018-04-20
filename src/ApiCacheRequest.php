<?php

namespace FlickerLeap\ApiCache;

use Illuminate\Database\Eloquent\Model;

class ApiCacheRequest extends Model
{
    protected $fillable = [
        'key',
        'meth',
        'url',
        'data',
        'apiresponse',
    ];
}
