<?php

$arr = ["Hi", "my", "name", "is", "Rayhan"];

$data = implode(" _ - _ ", $arr); # "_" gap puron korbe ki diye ta dite hobe
$data_2 = implode("  ", $arr); # "_" gap puron korbe ki diye ta dite hobe
echo $data. "<br>";
echo $data_2;

?>