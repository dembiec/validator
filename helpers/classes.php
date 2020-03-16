<?php
namespace Validator\Helpers;

class Classes
{
    private static $map = [
        'Types' => ['array', 'bool', 'double', 'float', 'int', 'long', 'object', 'string']
    ];

    public static function namespace(string $method = NULL)
    {
        foreach (self::$map as $class => $methodArray) {
            if (in_array($method, $methodArray)) {
                return 'Validator\Modules\\'.$class; 
            }
        }
    }
}