<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "pwad68";

    # database connect korar age database create kore nite hobe
    // new mysqli($host, $user, $password, $db);

    mysqli_report(MYSQLI_REPORT_OFF); # mysql er defult error report off kore dilam if er vitor die kaj korar jonno

    $db = new mysqli($host, $user, $password, $database);
    if($db->connect_error){
        die("Connection Fail ". $db->connect_error); # die() same as exit()
        # The script/code ends right here, er por r code run hobe na
    }
    else{
        echo "<br>Connection Successful<br>";
    }



?>