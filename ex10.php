#!/usr/bin/php
<?php

/*-----------CLASS------------*/

class User {
    public $name;

    function __construct($name) {
        echo "Hello $name!\n";
    }
    public function getName() {
        return $this->$name;
    }
    public function setName($new_name) {
        $this->$name = $new_name;
    }
}

$thomas = new User("bon");
echo $thomas.getName();
// $thomas.__construct("zefzerfzef");
$anonymous = new User("");
$serguei = new User("Serguei");

// echo($thomas->getName() . "\n");
// echo($anonymous->getName() . "\n");
// //$anonymous->setName("Grace");
// echo($anonymous->getName() . "\n");

?>