<?php
namespace Validator\Modules;
use Validator\Provider;

class Types extends Provider
{
  public static function array() : self
  {
    is_array(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function bool() : self
  {
    is_bool(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function double() : self
  {
    is_double(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function float() : self
  {
    is_float(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function int() : self
  {
    is_int(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function long() : self
  {
    is_long(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function object() : self
  {
    is_object(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function string() : self
  {
    is_string(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }
}