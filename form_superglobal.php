<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">


        <form action="" method="get">
            Name:
            <input type="text" name="Name" placeholder="Enter Your Name"><br>
            Email:
            <input type="text" name="Email" placeholder="Enter Your Email"> <br> <br>
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset" value="Reset">
        </form>

    

    <?php

        // Super Global variable
        // $_POST
        // $_REQUEST
        // $_GET

        // print_r($_GET);
        // var_dump ($_GET);
        echo "<pre>";
        // print_r($_POST);
        // print_r($_GET);
        echo "</pre>";

    ?>



    <?php


    if (isset($_GET["submit"])) {
        $name = $_GET["Name"];
        $email = $_GET["Email"];
        echo $name . "<br>" . $email;
    }



    ?>


</body>
</html>