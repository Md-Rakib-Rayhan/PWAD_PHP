<?php

    class Fruit{

        // Private properties (cannot be accessed directly outside the class)
        private $name;
        private $color;
        
        // setter
        // public function diye baire theke access kora jabe
        function set_name($name){ 
        // public function set_name($name){ // same but private dile abar baire access hobe na
            $this->name = $name;
        }

        // getter
        function get_name(){
            // return "Name: ". $this->name;
            echo "Name: ". $this->name;
        }
    }


    
    $obj1 = new Fruit;
    $obj1 -> set_name("Apple");

    // echo $obj1 -> get_name();
    $obj1 -> get_name();


?>