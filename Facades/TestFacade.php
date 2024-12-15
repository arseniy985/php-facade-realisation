<?php

namespace Facades;

class TestFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'SuperProtectedDirectory\TestFacade';
    }
}
