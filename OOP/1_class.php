<?php

    class Fruit{
        public $name;
        // private $name; // Class er baire theke access hobe na
        // protected $name; // Class er baire theke access hobe na
        public $color;
    }

    $fruitObj = new Fruit;
    // var_dump($fruitObj);
    $fruitObj->name = "Mango";
    $fruitObj->color = "Purple";
    var_dump($fruitObj);
    echo "<br>";


    $fruitObj2 = new Fruit;
    $fruitObj2 -> name = "Banana";
    $fruitObj2 -> color = "Yellow";
    var_dump($fruitObj2);
    echo "<br>";
?>
