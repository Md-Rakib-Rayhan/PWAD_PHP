<?php

class Test{

    public $name;

    function __construct(){ // auto call "__" magic funtion
        echo "Hello";

    }
    function __destruct(){ // same but Does not accept any arguments/peramiter And akebare Last a print hobe
        echo "Bye Bye";

    }
}

$objtext = new Test();


?>

<hr>

<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;

    }
    function getname(){
        return "Name: ". $this->name. "<br>Color: " .$this->color;
    }

}

$ObjFruit = new Fruit("Mango", "Orange");
echo $ObjFruit->getname();


?>