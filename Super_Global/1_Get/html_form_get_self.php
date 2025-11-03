<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        Name: <br>
        <input type="text" name="fname" placeholder="Enter Your Name"> <br>
        Age: <br>
        <input type="text" name="age" placeholder="Enter Your Age"> <br><br>
        <input type="submit" name="SAVE" value="Save">
    </form>

    <?php

    if(isset($_GET['SAVE'])){ // isset mean jodi value submit hoy(last input:submit aita dhora hoise) tahole true(1)
        echo $_GET['fname'] . "<br>";
        echo $_GET['age'] . "<br>";
        echo $_GET['SAVE'] . "<br>";
    }
    // same technique can be used for POST as well
    
    ?>
    
</body>
</html>