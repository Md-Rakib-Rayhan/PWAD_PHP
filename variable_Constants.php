<?php

// To create a constant, use the define() function.
// define(name, value);


define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;


const MYCAR = "Volvo";
echo MYCAR;

// No $ need


// const vs. define()
// ---------------------------------
// const cannot be created inside another block scope, like inside a function or inside an if statement.
// define() can be created inside another block scope.

?>