<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Php Syntax</h3>
  
    <!-- 1 way -->
    <?php
        echo "Hello ";
        $Color = "Red";
        // echo $color;
        ECho $Color;
    ?>


    <!-- 2 way -->
    <?= "<br >Hello world <br>". $Color ?> <!-- one line statement -->


    <!-- 3 way -->
    <?
    echo "<br> ere <br>";
    // To use this short_tag turn on "short_open_tag" // check the instruction in 01_syntax.php
    ?>

</body>
</html>