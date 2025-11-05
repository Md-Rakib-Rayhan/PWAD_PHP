<?php


    $myfile = fopen("student.txt", "r"); // Open file, read file

    // $the_file = fgets($myfile); // just single line asbe

    // echo $the_file;

    while(!feof($myfile)){
        // echo $the_file . "<br>"; // it make infinity / becaise it get just one line text
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);

?>
