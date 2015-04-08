<?php

namespace NewStuff
{
    const AWESOME_VALUE = 100;

    function doStuff($passItIn)
    {
        var_dump(__FUNCTION__);
        var_dump($passItIn);
    }

}

namespace OtherStuff
{
    use const NewStuff\AWESOME_VALUE;
    use function NewStuff\doStuff;

    var_dump(AWESOME_VALUE);
    doStuff('passed in value');
}

