<?php
namespace Validator\Helpers;

class Iterator
{
    private static $key = 0;

    public static function readKey(array $array = [])
    {
        if (!empty($array)) {
            self::$key = array_key_last($array);
            self::$key += 1;
        }
    }

    public static function key() : int
    {
        return self::$key;
    }
}