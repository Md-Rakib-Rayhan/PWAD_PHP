<?php
class ClassName {
  public static $staticProp = "W3Schools <br>";
}

echo ClassName::$staticProp;
?>


<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value . "<br>";
  }
}

$pi = new pi();
echo $pi->staticValue();
?>



<?php

// Inheritence_______________________________ 
class x extends pi {
  public function xStatic() {
    // return self::$value; 
    return parent::$value; //_________way to get parent data
  }
}

// Get value of static property directly via child class
echo x::$value . "<br>"; // value is from pi

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>