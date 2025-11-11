<?php
$a=array("Volvo"=>"value1","BMW"=>"value2");

if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>


<hr>


<?php
$b=array("value1","value2");

if (array_key_exists(1,$b))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }


?>

<hr>


<?php
$b=array("value1","value2");

if (array_key_exists(2,$b))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }


?>