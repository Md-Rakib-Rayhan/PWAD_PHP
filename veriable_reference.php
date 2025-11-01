<?php

    $value1 = "Hello World";
    $value2 = & $value1; // reference variable


    $value2 = "Let Go";

    
    echo $value1, "<br>";
    echo $value2, "<br>";


    $value1 = "I am the ruler";


    echo $value1, "<br>";
    echo $value2, "<br>";




?>