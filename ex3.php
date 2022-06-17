<?php

/*--------MY_CONCAT---------*/

function my_concat($str1, $str2)
{
    $save = "$str1 $str2\n";
    return $save;
}

echo my_concat("Hello", "World !");

?>