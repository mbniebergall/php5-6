<?php

class ArrayKeys
{
    const KEY = 1;

    public $keys = [
        self::KEY => 'number 1 key',
        'another key',
        'last key'
    ];
}

$arrayKeys = new ArrayKeys;
var_dump($arrayKeys->keys);
