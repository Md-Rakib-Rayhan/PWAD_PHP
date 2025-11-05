<?php
// very semilar to const

class greeting {
  public static function welcome() {
    echo "Hello World!" . "<br>";
  }
}

greeting::welcome();            // (::) it's call Scope resulation

?>


<?php
class A {
  public static function welcome() {
    echo "Hello World!" . "<br>";
  }

  public function __construct() {
    self::welcome();
  }
}
class B {
  public function message() {
    A::welcome();
  }
}
new A();
$obj = new B();
$obj -> message();
?>