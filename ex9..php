#!/usr/bin/php
<?php

/*-----------CLASS------------*/

class User {
    public $name;

    function __construct($name) {
        echo "Hello $name !\n";
    }
}

$user_1 = new User("marge");

?>