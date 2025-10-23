<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Find Fectorial </h3>
    <form action="">
        <input type="number" name="mynumber" placeholder="Enter your number"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php

        // super global variable $_REQUEST, use to access data form form. Works for both GET and POST forms.
        if(isset($_REQUEST["submit"])){
            $mynum = $_REQUEST["mynumber"];

            $fect = 1;

            for($i = 1; $i <= $mynum; $i++){
                $fect *= $i;
            }

            echo $fect;
        }



    ?>
</body>
</html>