<?php


    // echo "<pre>";
    // print_r($_SERVER);

    foreach($_SERVER as $key => $value){
        // echo $key, " = ", $value, "<br>";
        echo $key, "<br>";
    }

?>

<?php

    $arr = [25, 20, 10, 12];

    foreach($arr as $index => $myvalue){
        echo $index, " => ", $myvalue, "<br>";
    }


?>
<?php

    // Another Super Global
    echo $_ENV['HOSTNAME'] = "Localhost";



?>