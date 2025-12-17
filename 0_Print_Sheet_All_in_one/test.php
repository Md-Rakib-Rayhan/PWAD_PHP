<?php

class person{
    public $name;

    function __construct($name){
        echo "Your Name is " . $name;
    }
}
$obj = new person("Rakib");

// class person{
//     public $name;

//     function show($name){
//         echo "Your Name is " . $name;
//     }
// }

// $obj = new person();
// $obj->show("Rakib");


?>