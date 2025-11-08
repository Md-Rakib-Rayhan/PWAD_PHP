<?php


$a = uniqid();
echo $a . "<br>";
$a = uniqid("Name");
echo $a . "<br>";
$a = uniqid("Name", true);
echo $a . "<br>";
$a = uniqid("Name", false);
echo $a . "<br>";

?>