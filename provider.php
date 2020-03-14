<?php
namespace Validator;

class Provider
{
  protected static $validationData = NULL;

  public function make($validationData = NULL)
  {
    self::$validationData = $validationData;
    return $this;
  }
}