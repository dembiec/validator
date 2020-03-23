<?php
namespace Validator;
use Validator\Provider;
use Validator\Helpers\Classes as C;
use Validator\Helpers\Json as J;

class Validator extends Provider
{
    public function __call(string $method = NULL, array $arguments = NULL)
    {
        call_user_func_array([C::namespace($method), $method], $arguments);
        return $this;
    }

    public function existErrors() : bool
    {
        return empty(self::$validationResult) ? FALSE : TRUE;
    }

    public function showErrors() : array
    {
        return self::$validationResult;
    }

    public function errorMessages() : array
    {
        if (!$this->existErrors()) {
            foreach (self::$validationResult as $arrayKey => $errorArray) {
                foreach ($errorArray as $error) {
                    $messageFile = J::decode(C::class($error));
                    $messages[$arrayKey][] = $messageFile[$error];
                }
            }
        } else {
            $messages = [];
        }
        return $messages;
    }
}