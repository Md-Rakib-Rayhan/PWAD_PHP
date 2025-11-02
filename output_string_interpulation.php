<?php

$box = "hello";

echo "My name is Rayhan $box <br>";
echo "My name is Rayhan {$box} <br><br>";


print "My name is Rayhan $box <br>";
print "My name is Rayhan {$box} <br><br>";


print 'My name is Rayhan $box <br>';
print 'My name is Rayhan {$box} <br><br>';



$cities = ["Dhaka"=>5000, "Cumilla"=>8000]; // array but index fix deya 0 diye call hobe na


echo "the population of the Dhaka is {$cities['Dhaka']} <br><br>";
// echo "the population of the Dhaka is $cities['Dhaka']"; {3rd braket} na dile hobe na

?>