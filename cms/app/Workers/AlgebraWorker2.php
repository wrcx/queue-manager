<?php

namespace App\Workers;

class AlgebraWorker2
{
    /**
     *  Arithmetic Resolver
     * @param  string $input Input
     * @return string      Result
     */
    public static function arithmeticResolver($input)
    {
        return strrev($input);
    }
}