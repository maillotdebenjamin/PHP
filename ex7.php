<?php

/*-------SWITCH-CASE--------*/

function switch_case($string)
{
    $array = ["GET", "POST", "DELETE", "PUT", "PATCH", NULL];

    for ($i = 0; $array[$i] != NULL; $i++) {
        if (strcmp($string, $array[$i]) == 0) {
            echo "Method:$array[$i]\n";
            return 0;
        }
    }
    echo "Method:Unknown\n";
    return 0;
}

switch_case("POST");

?>