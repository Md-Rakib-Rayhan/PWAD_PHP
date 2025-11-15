<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Login Form</h3>
    <form action="">
        Name : <br>
        <input type="text" name="name" placeholder="Enter Your Name"> <br>
        Email : <br> 
        <input type="text" name="email" placeholder="Enter Your Email"> 
        <p><b>Note: </b>Enter your name between 4 to 8 digit</p>
        <input type="submit" name="submit" value="Submit"> 
    </form>
    <br>
    


    <?php
        if(isset($_REQUEST['submit']) && $_REQUEST['name'] != "" && $_REQUEST['email'] != ""){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];

            $pattern_name = "/^[A-Za-z0-9.]{4,8}$/";
            $pattern_email = "/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}$/";

            if(preg_match($pattern_name, $name) && preg_match($pattern_email, $email)){
                echo "Hi!, Welcome Mr. " . $name. "<br>";
                echo "And Your Email is ". $email;
            }else{
                echo "Wrong name or email input";
            }
            

        }
    
    ?>
</body>
</html>