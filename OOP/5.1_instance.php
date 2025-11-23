<?php

# Used to Check whether an object belongs to a specific class


class animal {}
class dog extends animal{}
class cat{}


$obj = new dog();
$obj202 = new cat();



var_dump($obj instanceof animal); # inherite so true

echo "<br>";
var_dump($obj instanceof dog);

echo "<br>";
var_dump($obj instanceof cat); # "cat" is not present in "$obj"

echo "<br>";
var_dump($obj202 instanceof cat);


echo "<br>";
echo $obj instanceof animal;
echo "<br>";

if($obj instanceof dog) {
  echo "The object is AnotherClass <br>";
}



?>