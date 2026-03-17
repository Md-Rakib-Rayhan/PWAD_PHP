<?php
    class Student{
        public $name; // Property

        public function set_name($name){ //Method
            $this->name = $name;
        }
    }

    $studentObj = new Student;          // Object
    $studentObj -> name = "John";       // Assigning value to property
    $studentObj -> set_name("John");    // Calling method to set value to property
    // print_r($studentObj);
?>
    

<?php
    class Fruit {
        public $name;   // Accessible from anywhere
        public $color;

        // private $name;    // Accessible only inside this class
        // protected $name;  // Accessible inside this class and child classes
    }


    $fruitObj = new Fruit;
    $fruitObj->name = "Mango";
    $fruitObj->color = "Purple";
    var_dump($fruitObj);
    echo "<br>";

// One class can be used to create multiple objects with multiple values
    $fruitObj2 = new Fruit;
    $fruitObj2 -> name = "Banana";
    $fruitObj2 -> color = "Yellow";
    var_dump($fruitObj2);
?>
