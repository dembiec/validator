<?php
namespace Validator\Helpers;

class Json
{
    public static function decode(string $file = NULL) : array
    {
        $jsonPath =  dirname(__DIR__).'/messages/'.strtolower($file).'.json';
        try {
            $jsonFile = file_get_contents($jsonPath);
            return json_decode($jsonFile , TRUE);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage();
        }
    }
}