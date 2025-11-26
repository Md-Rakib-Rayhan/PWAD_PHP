<?php  include_once('db_config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th,td{
            padding: 15px 30px;
        }
    </style>
</head>
<body>
    <h2>Insert Data in Manufacturer table</h2>

    <form action="" method="post">

        Name <br>
        <input type="text" name="name" placeholder="Enter name here"> <br>
        
        Address <br>
        <input type="text" name="address" placeholder="Enter address here"> <br>
        
        Contact <br>
        <input type="text" name="contact" placeholder="Enter name here"> <br> <br>
        
        <input type="submit" name="submit" value="Submit"> 
        
    </form>

    <h1>List of Current Manufacturer</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Number</th>
            <th>Action</th>
        </tr>

        <?php
            $sql = "SELECT * FROM manufacturer;";
            $row_data = $db->query($sql);
            while ($row = $row_data->fetch_assoc()) {
        
        ?>

        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td><a href="manufacturer_delete.php?id=<?php echo $row['Id']; ?>">DELETE</a></td>
        </tr>

        <?php
        }
        ?>

    </table>


    <?php

        if(isset($_POST['submit']) && $_POST['name']!= "" && $_POST['address']!= "" && $_POST['contact']!= ""){

            $name = $_POST['name'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];


            $sql = "CALL manufacturer_insert('$name', '$address', '$contact')";
            $db->query($sql);



            if($db->affected_rows){
              echo "<h1>Successfully Inserted</h1>";
              echo "<img src='cat_kiss.gif' width='200px'>";
            }else{
              echo "<h1>Problem Occure, Not Inserted</h1>";
            }
        }
        else if(isset($_POST['submit'])){
            echo "<img src='gif_pic.gif' width='200px'>";
            echo "<h1>You need to fillup all</h1>";
        }



    
    ?>

</body>
</html>