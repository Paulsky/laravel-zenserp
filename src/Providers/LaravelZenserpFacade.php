<?php

namespace WDevs\LaravelZenserp\Providers;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WDevs\LaravelZenserp\Skeleton\SkeletonClass
 */
class LaravelZenserpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-zenserp';
    }
}
