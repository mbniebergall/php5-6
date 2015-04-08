<?php

$input = file_get_contents('php://input');

var_dump($input);

$httpRawPostData = $HTTP_RAW_POST_DATA;

var_dump($httpRawPostData);


$inputAgain = file_get_contents('php://input');

var_dump($inputAgain);
