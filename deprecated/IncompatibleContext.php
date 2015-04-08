<?php

class IncompatibleContext
{
    public function nonStatic()
    {
        var_dump(__CLASS__);
    }

    public static function isStatic()
    {
        var_dump(__METHOD__);
    }
}

$class = new IncompatibleContext;
$class->isStatic();

$class::nonStatic();
