<?php
// String interpolation means embedding variables directly inside a string


$box = "hello";

echo "My name is Rayhan $box <br>";
echo "My name is Rayhan {$box} <br>"; // {} not necessary here but it necessary in array, so use it is best practice
print "My name is Rayhan {$box} <br><br>";


// by using single quotes (') it don't work, it just take it as string
echo 'My name is Rayhan $box <br>';
echo 'My name is Rayhan {$box} <br>'; 
print 'My name is Rayhan {$box} <br><br>';



$cities = ["Dhaka"=>5000, "Cumilla"=>8000]; // array but index fix deya, 0,1,2 diye call hobe na

// aine {3rd braket} na dile hobe na
echo "the population of the Dhaka is {$cities['Dhaka']} <br><br>";
?>