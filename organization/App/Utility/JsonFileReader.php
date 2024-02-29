<?php
namespace App\Utility;

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;

class JsonFileReader
{
    public function readFileAssociativeArray(string $filename): array
    {
        if(!file_exists($filename)){

            throw new FileNotFoundException("Something went wrong. File does not exist");

        }

        if(!file_exists($filename)){

            throw new BadJsonException("Something went wrong. Json is invalid");

        }

        $json = file_get_contents($filename);
        $items =  json_decode($json, true);
        return $items;
    }
    
}
 