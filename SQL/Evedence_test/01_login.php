<?php

use Dom\Document;
include_once("00_db_config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Login Form</h3>
    <form action="" method="post">
        Email <br>
        <input type="text" name="email" placeholder="Enter Email"> <br>
        Password <br>
        <input type="text" name="password" placeholder="Enter Your Password"> <br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php

        if(isset($_POST['submit']) && $_POST['email']!="" && $_POST['password']!="")
            {
                $email = $_POST['email'];
                $password = md5($_POST['password']);

                $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
                $runit =  $db->query($sql);
                $row_data = $runit->fetch_assoc();


                if($runit->num_rows > 0){
                // session_start();
                // $_SESSION["logedin"] = TRUE;
                // $_SESSION["email"] = $email;
                echo "You have loged in";
                }else{
                echo "Wrong Input";
                }
     


                
            }
        elseif(isset($_POST['submit'])){
            echo "Do left any box Empty";
        }


    ?>

    
</body>
</html>