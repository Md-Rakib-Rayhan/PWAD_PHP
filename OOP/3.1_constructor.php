<?php

class Fruit{
    public $name;
    public $color;

    // default paramitter value set korle, pore argument pass na korle Error asbe na & default value use hobe
    function __construct($name = "Unknown", $color = "Unknown"){
        $this->name = $name;
        $this->color = $color;

    }
    function getname(){
        return "Name: ". $this->name. "<br>Color: " .$this->color;
    }

}

$ObjFruit = new Fruit();
echo $ObjFruit->getname(); echo "<hr>";

$ObjFruit = new Fruit("Mango", "Orange");
echo $ObjFruit->getname();
?>
