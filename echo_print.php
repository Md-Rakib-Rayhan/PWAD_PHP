<?php

// echo has no return value,
// while
// print has a return value of 1
// so it can be used in expressions


// echo can take multiple parameters, while print can take one argument
// echo is marginally faster than print


// perametter
echo "This ", "string echo <br>";
// print "This ", "string<br>"; // not work

echo "This ". "string echo <br>" ; //ok
print "This ". "string print <br>" ; //ok

print("hello hello print <br>");
echo("hello hello echo <br>");


print("hello" . "hello print <br>");
echo("hello" . "hello echo <br>");

// Not ganna work
// echo("hello" , "hello <br>");
// print("hello" , "hello <br>");


//  ________________________ Way of use____________

$name = "Rakib";

echo "<h2>$name</h2> <br>";
// echo '<h2>$name</h2> <br>'; // aita hobe na aita direct print hobe(value na)e
echo '<h2>' . $name . '</h2> <br>';
echo '<h2>' , $name , '</h2> <br>';

?>