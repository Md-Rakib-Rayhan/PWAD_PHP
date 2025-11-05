<?php

interface Animal { // No class keyword need
    // public $name; // ❌ Not allowed (properties)
    public function makeSound();
}

class Cat implements Animal { // way of extends
  public function makeSound() {
    echo " Meow" . "<br>";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark <br>";
  }
}


$cat = new Cat();
$dog = new Dog();

$cat->makeSound();
$dog->makeSound();

$all_sound = [$cat, $dog];
foreach ($all_sound as $sound) {
    $sound -> makeSound();
}


?>


<!-- Interfaces vs. Abstract Classes
    1. Interfaces cannot have properties, while abstract classes can
    2. All interface methods must be public, while abstract class methods is public or protected
    3. All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    4. Classes can implement an interface while inheriting from another class at the same time
-->