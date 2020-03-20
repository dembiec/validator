<?php
namespace Validator\Modules;
use Validator\Provider;

class Characters extends Provider
{
  public static function isChar($char = NULL) : self
  {
    preg_match('/'.$char.'/', self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function lenChar($size = 1) : self
  {
    strlen(self::$validationData) === $size ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function maxChar($max = 2) : self
  {
    strlen(self::$validationData) <= $max ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function minChar($min = 1) : self
  {
    strlen(self::$validationData) >= $min ?: self::validationError(__FUNCTION__);
    return new self;
  }
}