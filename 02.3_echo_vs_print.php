<?php

// echo is faster than print
// echo has no return value, print has a return value of 1
// echo can take multiple arguments, while print can take only one argument
// (it's technically not an argument, it's an comma-separated expressions)


print("hello print <br>"); // parentheses() are totally optional/Unnecessary
echo("hello echo <br>");

echo "This ". "string echo <br>" ; 
print "This ". "string print <br>" ; 
print("hello " . "print <br>");
echo("hello " . "echo <br>");


// echo is a language construct, not a real function. echo can take multiple arguments but not with parentheses()
echo "This ", "string echo <br>";        // perametter (p1 , p2)
// echo("hello" , "hello <br>"); ❌

// print construct does not support multiple arguments separated by commas
// print "This ", "string<br>"; ❌
// print("hello" , "hello <br>"); ❌

// "Language Construct" ≠ "Constructor"


$x = print "Testing print return value...<br>"; // return 1(true) to x
// $x = echo "test"; // not work error
echo $x;


//  ________________________ Way of use____________

$name = "Rakib";

echo "<h2>$name</h2> <br>";
// echo '<h2>$name</h2> <br>'; // aita hobe na aita direct print hobe(value na)
echo '<h2>' . $name . '</h2> <br>';
echo '<h2>' , $name , '</h2> <br>';



?>