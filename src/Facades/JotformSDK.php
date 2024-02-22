<?php

namespace ChrisReedIO\JotformSDK\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisReedIO\JotformSDK\JotformSDK
 */
class JotformSDK extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ChrisReedIO\JotformSDK\JotformSDK::class;
    }
}
