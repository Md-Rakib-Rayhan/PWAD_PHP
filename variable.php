<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        A variable starts with the $ sign, followed by the name of the variable
        A variable name must start with a letter or the underscore character
        A variable name cannot start with a number
        A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
        Variable names are case-sensitive ($age and $AGE are two different variables)
    </p>
    <br>
    <br>

    <?php

    $a = "Rakib ";
    $_ = "Rayhan";
    $_1 = "Md. ";
    // $1a = "dsf"; // not work
    
    echo "Hello ", $_1, $a, $_;
    echo "<br> I love ". $_. "<br>";
    echo "<br> I love $a <br>";

    // Get the data type
    var_dump($a);

    ?>
</body>
</html>