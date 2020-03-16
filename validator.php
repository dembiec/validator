<?php
namespace Validator;
use Validator\Provider;
use Validator\Helpers\Classes as C;

class Validator extends Provider
{
    public function __call(string $method = NULL, array $arguments = NULL)
    {
        call_user_func_array([C::namespace($method), $method], $arguments);
        return $this;
    }

    public function existErrors() : bool
    {
        return empty(self::$validationResult);
    }

    public function showErrors() : array
    {
        return self::$validationResult;
    }
}
