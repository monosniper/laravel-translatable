<?php

namespace Monosniper\LaravelTranslatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Monosniper\LaravelTranslatable\LaravelTranslatable
 */
class LaravelTranslatable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Monosniper\LaravelTranslatable\LaravelTranslatable::class;
    }
}
