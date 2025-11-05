<!-- 
 2 step to to get session
 Step 1 : SESSION_start();
 Step 3 : echo $_SESSION[name];
-->

<?php

    session_start();

    // print_r($_SESSION);
    // echo $_SESSION["myname"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>I know You!</p>
    <h1>Your name is <?php 
    if(isset($_SESSION["myname"])){
        echo $_SESSION["myname"];
    } 
    else{
        echo "Sorry, I forgot";
    }?></h1>
</body>
</html>