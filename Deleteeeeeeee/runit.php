<?php    

// $total = "25 students";   # php first a 25 peye add kore disilo  # $total = "students 25";    aita dile abar error asbe
// $more = 10;    
// $total = $total + $more;    
// echo "$total";    
# RESULT : 35 with warning ||| (Maybe just only in php) (in js result willbe 25 students)

?>

<hr>

<?php

$data = "Hello Hello";
$compressed = gzcompress($data); # Looks like garbage (binary data)
echo $compressed . "<br>";

$uncompressed = gzuncompress($compressed); # Returns original text
echo $uncompressed;

# What does it do?
# Makes data smaller (good for storage, caching, saving large text, etc.)
# Uses DEFLATE algorithm (not GZIP format)
# Returns binary data (not readable as text)
# Good for compressing strings, not files — although you can compress file contents after reading them
?>

<hr>


<?php    
$score = 1234;    
$scoreboard = (array) $score;    
echo $scoreboard[0];    
?>

<hr>

 <?php
$x = 15 ;
$y = 20 ;
// echo ++$x;
// echo $x++;
if($x < ++$x || $y < ++$y)
{
echo "Hello World";
}
else
{
echo "Hii everyone";
}
?>


<hr>


<?php
$a;
if ($a)
{ echo "hi"; }
else
{ echo "How are you"; }
?>


