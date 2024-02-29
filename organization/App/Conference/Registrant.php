<?php

namespace App\Conference;

abstract class Registrant
{
    protected static $meta = 'Conference Registrant';

    public function getMeta(): string
    {
        return static::$meta;
        //return self::$meta;
    }   
}
