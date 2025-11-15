<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Search Your Result</h3>
    <form action="" method="POST">
        Id : <br>
        <input type="number" name="id" placeholder="Enter Your id"> <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>


    <?php

    include("02_result_class.php");

    if(isset($_REQUEST['submit']) && $_REQUEST['id'] != ""){
        $id = $_REQUEST["id"];
        $student = new student("02_result.txt");
        $result = $student->result($id);



        echo $result;
    }

    
    
    ?>
    
</body>
</html>