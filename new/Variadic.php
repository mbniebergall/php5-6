<?php

class Variadic
{
    public function keepGoing($prefix, ...$numbers)
    {
        var_dump($prefix);
        var_dump($numbers);
    }

    public function optionalArguments($always, $sometimes = null, ...$arguments)
    {
        var_dump($always);
        var_dump($sometimes);
        var_dump($arguments);
    }
}

$variadic = new Variadic;
$variadic->keepGoing('fibonacci go! ', 1, 2, 3, 5, 8, 13, 21, 'and so on');
$variadic->optionalArguments('always passed', 'sometimes');
