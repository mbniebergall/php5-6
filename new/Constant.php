<?php

class Constant
{
    const SOME_NUMBER = 15;

    const ANOTHER_NUMBER = 5;

    const ADD_NUMBERS = self::SOME_NUMBER + self::ANOTHER_NUMBER;

    const STRING_NUMBERS = self::SOME_NUMBER . ' plus ' . self::ANOTHER_NUMBER .
        ' is ' . self::ADD_NUMBERS;

    public function doMath()
    {
        return self::SOME_NUMBER + self::ANOTHER_NUMBER;
    }
}

var_dump(Constant::SOME_NUMBER);

var_dump(Constant::ANOTHER_NUMBER);

var_dump(Constant::ADD_NUMBERS);

var_dump(Constant::STRING_NUMBERS);

var_dump((new Constant())->doMath());
