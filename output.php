<?php
    $a = "2025";
    echo "Hello", $a, "<br>";
    echo "Hello$a<br>";
    echo "Hello{$a}<br>"; // {} use for not mixup with string / only for visibility for coder

    echo "<br>"; 
    printf("%d Happy New Year, %s <br>", $a, "Md. Rakib Rayhan"); //placeholder
    printf("Get the money %.2f <br>", 20.1);


    $output = sprintf("Hello dear %s <br>", "Rayhan"); // aita(sprint) just stucture ready kore direct print kore na
    echo $output;

    

?>