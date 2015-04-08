<?php

$string = '{"a": "something", "bob": true, "jane": FALSE, "empty": null, "nullValue": NULL}';
$string = 'TrUe';

var_dump(json_decode($string, true));
var_dump(json_last_error());

$test = ['abc' => null, true, FALSE];
$jsonTest = json_encode($test);
var_dump(json_last_error());

var_dump($jsonTest);

var_dump(json_decode($jsonTest, true));
var_dump(json_last_error());
