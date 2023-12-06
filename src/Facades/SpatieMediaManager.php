<?php

namespace Khurram554\MediaLibrary\SpatieMediaManager\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Khurram554\MediaLibrary\SpatieMediaManager\SpatieMediaManager
 */
class SpatieMediaManager extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Khurram554\MediaLibrary\SpatieMediaManager\SpatieMediaManager::class;
    }
}
