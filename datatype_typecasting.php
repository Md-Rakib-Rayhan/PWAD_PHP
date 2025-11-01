<?php
    $num = 20;

    var_dump($num);
    $num = (float) $num;

    echo "<br>";
    var_dump($num);
    echo gettype($num); //double asbe


    echo "<br>";

?>

<?php
    $a = (string) 20;
    echo gettype($a);
    echo $a;

    echo "<br>";

    $b = (int) "20";
    echo gettype($b);
    echo $b;

    echo "<br>";

    $b = (int) "rakib";
    echo gettype($b);
    echo $b;


?>