#!/usr/bin/php
<?php

/*----------LOOP---------*/

function loop($string, $times)
{
    $save = NULL;
    for ($i = 0; $i < $times; $i++) {
        $save = $save . $string;
    }
    return "$save\n";
}

echo loop("coucou ", 6);

?>