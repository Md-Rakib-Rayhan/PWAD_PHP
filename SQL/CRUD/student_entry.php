<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Student Entry</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name"> <br>
        <input type="date" name="dob" placeholder="Enter Your Date of Birth"> <br>
        <textarea name="notes" placeholder="Enter Notes"></textarea> <br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if(isset($_REQUEST['submit'])):

            extract($_POST);

            $sql = "INSERT INTO students VALUES (NULL, '$name', '$dob', '$notes')";
            include_once("db_config.php");
            $db -> query($sql);

            header("location:index.php");
            $db->close();
        endif;
    ?>

</body>
</html>