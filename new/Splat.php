<?php

class Splat
{
    public function lotsOfArguments($a, $b, $c, $d, $e, $f)
    {
        var_dump($a);
        var_dump($b);
        var_dump($c);
        var_dump($d);
        var_dump($e);
        var_dump($f);
    }

    public function splatWithVariadic($first, ...$rest)
    {
        var_dump($first);
        var_dump($rest);
    }
}

$splat = new Splat;
$pass  = ['alligator', 'bear', 'camel', 'deer', 'elephant', 'fish'];

$splat->lotsOfArguments(...$pass);
$splat->splatWithVariadic('first comes a', ...$pass);

