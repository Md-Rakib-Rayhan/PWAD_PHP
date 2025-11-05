<!-- An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code. -->
<!-- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. -->
 <?php

    abstract class parent_class{
        public $name;

        public function __construct($name){
            $this->name = $name;
        }


        abstract public function show_name(); 
        // abstract public function show_name(): string; // sting type sudho asbe


        //  abstract method er vitor kiso declared/value deya jabe na
        // abstract public function show_name(){ 
        //     return $this->name;}
    }

    // $obj1 = new parent_class(); // abstract class er object kora jay na/ sucho child er korte hoy

    class child1 extends parent_class{
        function show_name(){
            return "Hi, I am " . $this->name;
        }

    }

    $obj1 = new child1("Rayhan");
    echo $obj1->show_name();



?>

