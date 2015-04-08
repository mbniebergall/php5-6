<?php

echo PHP_VERSION;

class Debug
{
    protected $someValue;

    protected $importantStuff;

    public function __set($name, $value)
    {
        if (!property_exists(__CLASS__, $name)) {
            return;
        }
        $this->$name = $value;
    }

    public function __debugInfo()
    {
        return [
            'someValue'      => $this->someValue,
            'importantStuff' => $this->importantStuff,
            'phpVersion'     => PHP_VERSION
        ];
    }
}

$debug = new Debug;
var_dump($debug);

$debug->someValue      = 'Go Team!';
$debug->importantStuff = 'Everything is awesome';
$debug->madeUpProperty = 'Everything is cool';

var_dump($debug);
