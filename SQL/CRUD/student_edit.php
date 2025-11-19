<?php include_once("db_config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $id = $_GET["id"];
        $sql_sel = "SELECT * FROM students WHERE id = $id;";

        $rowData = $db->query($sql_sel);
        $row = $rowData->fetch_object();
        // echo "<pre>"; print_r($row);

    ?>

    <h3>Student Entry</h3>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row->name;?>"> <br>
        <input type="date" name="dob" placeholder="Enter Your Date of Birth" value="<?php echo $row->date_of_birth;?>"> <br>
        <textarea name="notes" placeholder="Enter Notes"><?php echo $row->notes;?></textarea> <br>
        <input type="submit" value="Update" name="submit">
    </form>


    <?php
        
        if(isset($_POST['submit'])){

            extract($_POST);

            $sql_update = "UPDATE students SET name = '$name', date_of_birth = '$dob', notes = '$notes'  WHERE id = $id";
            $db -> query($sql_update);
            header("location:index.php");

            $db->close();
        }

    ?>

    
</body>
</html>