<?php

    $num1 = 500;
    $num2 = "5";

    // this reason it's call lose type
    $result = $num1 * $num2; // this is call juggling (string thaka sorteu multiply korse)
    echo $result; 
    echo "<br>";

?>
<?php


    $a = "1.2e3"; //exponensial auto convert
    $b = 10;
    echo $a+$b;
    echo "<br>";


?>

<?php

    $total = "45 fire engine";
    $income = 10;
    echo $income+$total; // still add / with a worning
    echo "<br>";


    $total = "fire engine 45";
    echo $income+$total; // but not now
    echo "<br>";

?>

