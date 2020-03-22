<?php
namespace Validator\Modules;
use Validator\Provider;

class Formats extends Provider
{
  public static function email() : self
  {
    filter_var(self::$validationData, FILTER_VALIDATE_EMAIL) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function ip() : self
  {
    filter_var(self::$validationData, FILTER_VALIDATE_IP) ?: self::validationError(__FUNCTION__);
    return new self;
  }

  public static function url() : self
  {
    filter_var(self::$validationData, FILTER_VALIDATE_URL) ?: self::validationError(__FUNCTION__);
    return new self;
  }
}