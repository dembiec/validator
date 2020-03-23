<?php
namespace Validator;
use Validator\Helpers\Iterator as I;

class Provider
{
  protected static $validationData = NULL;
  protected static $validationResult = [];

  public function make($validationData = NULL)
  {
    self::$validationData = $validationData;
    I::readKey(self::$validationResult);
    return $this;
  }

  public function validationError($methodName = NULL)
  {
    self::$validationResult[I::key()][] = $methodName;
  }
}