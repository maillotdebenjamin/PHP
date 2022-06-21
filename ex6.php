#!/usr/bin/php
<?php

/*--------ARRAY---------*/

function display_array($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "$array[$i]\n";
    }
    return 0;
}

display_array([422, "bon"])

?>