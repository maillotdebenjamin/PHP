<?php

/*--------ARRAY---------*/

function display_array($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "$array[$i] ";
    }
    echo"\n";
    return 0;
}

?>