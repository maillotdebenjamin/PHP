#!/usr/bin/php
<?php

function display_array($array)
{
    for ($i = 0; $i < count($array); $i++) {
        echo "$array[$i] ";
    }
    echo"\n";
    return 0;
}

/*---------PRINT-ARGS-----------*/

function my_print_args(...$array)
{
    display_array($array);
    return $array;
}

my_print_args("coucou", "bonjour", 42, "wa");

?>