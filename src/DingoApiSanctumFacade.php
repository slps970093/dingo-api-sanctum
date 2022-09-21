<?php

namespace Slps970093\DingoApiSanctum;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Slps970093\DingoSanctum\Skeleton\SkeletonClass
 */
class DingoApiSanctumFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dingo-sanctum';
    }
}
