<?php

namespace SundanceSolutions\LarachainTrimText\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SundanceSolutions\LarachainTrimText\LarachainTrimText
 */
class LarachainTrimText extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SundanceSolutions\LarachainTrimText\LarachainTrimText::class;
    }
}
