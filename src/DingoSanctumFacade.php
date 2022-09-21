<?php

namespace Slps970093\DingoSanctum;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Slps970093\DingoSanctum\Skeleton\SkeletonClass
 */
class DingoSanctumFacade extends Facade
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
