<?php

namespace VigStudio\TablerIcons\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\View\View render(string $name, array $attributes = [])
 * @method static array all()
 * @method static bool exists(string $name)
 * @method static array search(string $search)
 *
 * @see \VigStudio\TablerIcons\TablerIcon
 */
class TablerIcon extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tabler-icon';
    }

    /**
     * Handle dynamic, static calls to the object.
     *
     * @param  string  $method
     * @param  array  $args
     * @return mixed
     */
    public static function __callStatic($method, $args)
    {
        $instance = static::getFacadeRoot();

        // If the method exists on the instance, call it
        if (method_exists($instance, $method)) {
            return $instance->$method(...$args);
        }

        // Otherwise, try the magic method
        return $instance::__callStatic($method, $args);
    }
}
