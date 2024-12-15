<?php

namespace Facades;

use SuperProtectedDirectory\TestFacade as Test;

class TestFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'SuperProtectedDirectory\TestFacade';
    }
}