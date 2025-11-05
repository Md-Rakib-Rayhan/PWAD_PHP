<?php

    class Fruit{
        private $name;
        private $color;
        
        // setter
        function set_name($name){ // private variable/property golo function diye baire theke access kora jabe
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
    // var_dump($obj1);
    // print_r($obj1);

    // echo $obj1 -> get_name();
    $obj1 -> get_name();





?>