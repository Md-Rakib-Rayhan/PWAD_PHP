<?php

    echo "Hello, World!<br>";              
    print "Hello, World!<br><br><hr>";
    // print — works like echo but returns 1 (so can be used in expressions) example in echo_vs_print.php



    // Concatenation ( . ) — combine two strings / variables____________________
    $name = "Rakib"; $age = 25;
    echo "Name: " . $name . "<br>Age: " . $age . "<br>"; // The dot (.) joins strings together
    print "My name is " . $name . " and I am " . $age . " years old.<br><hr>";
 


    echo "<h3> print_r() </h3>";
    // print_r — print arrays or objects in a readable format____________________
    $arr = array("HTML", "CSS", "PHP", "JS");
    print_r($arr);
    echo "<pre>"; // use <pre> tag for better view
    print_r($arr);
    echo "</pre><br><hr>";



    echo "<h3> printf() sprintf() </h3>";
    // printf / sprintf — formatted output____________________
    $a = "2025"; $score = 98.765;
    printf("%d Happy New Year, %s <br>", $a, "Md. Rakib Rayhan"); //placeholder
    printf("Score: %.2f %%<br>", $score); // formatted to 2 decimal places

    // sprintf directly print hoy na | variable a value format er jonno use kore
    $formatted = sprintf("User: %s | Score: %.1f%%", $name, $score); 
    echo $formatted;
    echo "<hr>";



    echo "<h3> var_dump() </h3>";
    // var_dump — detailed debugging info (type + value)____________________
    var_dump($arr);
    echo "<br>";
    var_dump($name);
    echo "<hr>";
    

    echo "hello \"hi\"<hr>"; //escape     

?>