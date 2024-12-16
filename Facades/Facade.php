<?php

namespace Facades;

use BadMethodCallException;
use Exception;

abstract class Facade {

    /**
     * @throws Exception
     */
    protected static function getFacadeAccessor(): string {
        throw new Exception('Не реализовано');
    }

    /**
     * @throws Exception
     */
    public static function __callStatic($name, $arguments) {
        $instance = static::resolveFacade();
        if (method_exists($instance, $name)) {
            return call_user_func_array([$instance, $name], $arguments);
        }
        throw new BadMethodCallException("Метода $name не существует");
    }

    /**
     * @throws Exception
     */
    protected static function resolveFacade() {
        $accessor = 'SuperProtectedDirectoryForFacades\\' . ucfirst(static::getFacadeAccessor());
        if (!class_exists($accessor)){
            throw new Exception("Класс не найден $accessor");
        }
        return new $accessor;
    }
}
