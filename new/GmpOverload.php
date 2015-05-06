<?php

$a = gmp_init(2, 10);
$b = gmp_init(4, 10);
$c = gmp_init(8, 10);

$add         = $a + $b;
$multiply    = $a * $b;
$exponential = ($a ** $b) / $c;

var_dump((int) $add);
var_dump((int) $multiply);
var_dump((string) $exponential);

