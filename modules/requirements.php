<?php
namespace Validator\Modules;
use Validator\Provider;

class Requirements extends Provider
{
  public static function checked() : self
  {
    !empty(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function confirm($confirmed = NULL) : self
  {
    self::$validationData === $confirmed ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function require() : self
  {
    !empty(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }
}