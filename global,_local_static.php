<?php


$x = 5; // global scope
 

function myTest1() {
  // using x inside this function will generate an error
//   echo "<p>Variable x inside function is: $x</p>";
} 

function myTest() {
  global $x; // tHIS the way to access
  echo "<p>Variable x inside function is: $x</p>";
}

function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}


myTest();
myTest1();
myTest2();

echo "<p>Variable x outside function is: $x</p>";


// ___________________________static________________________

function myTest3() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest3();
myTest3();
myTest3();
echo "<br>";

function myTest4() {
  $x = 0;
  echo $x;
  $x++;
}

myTest4();
myTest4();
myTest4();






?>