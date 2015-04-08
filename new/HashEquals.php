<?php

$secret = '980gudDSFK90j34rf';
$bad    = 'letmein';

$expected  = crypt($secret, '$2a$07$TotallyRandom5t1nGdsrewfe$');
$correct   = crypt($secret, '$2a$07$TotallyRandom5t1nGdsrewfe$');
$incorrect = crypt($bad,    '$2a$07$TotallyRandom5t1nGdsrewfe$');

var_dump($expected);
var_dump($correct);
var_dump($incorrect);

var_dump(hash_equals($expected, $correct));
var_dump(hash_equals($expected, $incorrect));
