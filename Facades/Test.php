<?php

namespace Facades;

class Test extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'test';
    }
}