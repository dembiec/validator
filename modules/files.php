<?php
namespace Validator\Modules;
use Validator\Provider;

class Files extends Provider
{
  public static function dir() : self
  {
    is_dir(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function extension($extension = NULL) : self
  {
    if (is_array($extension)) {
      if (!in_array(pathinfo(self::$validationData, PATHINFO_EXTENSION), $extension)) {
        self::validationError(__FUNCTION__);
      }
    } else {
      if ( pathinfo(self::$validationData, PATHINFO_EXTENSION) !== $extension) {
        self::validationError(__FUNCTION__);
      }
    }
    return new self;
  }

  public static function file() : self
  {
    is_file(self::$validationData) ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function maxSize($max = 2) : self
  {
    filesize(self::$validationData) <= $max ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function minSize($min = 1) : self
  {
    filesize(self::$validationData) >= $min ?: self::validationError(__FUNCTION__);
    return new self;
  }
  
  public static function size($size = 1) : self
  {
    filesize(self::$validationData) === $size ?: self::validationError(__FUNCTION__);
    return new self;
  }
}