<?php
$db = new mysqli("localhost", "root", "", "evidence_test");
?>

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
            padding: 10px 20px;
        }
    </style>
</head>
<body>

    <form action="">
        Name <br>
        <input type="text" name="name"> <br>
        Address <br>
        <input type="text" name="address"> <br>
        Contact <br>
        <input type="text" name="contact"> <br><br>
        <input type="submit" name="submit" value="Submit"> <br>
    </form>

    <?php

        if(isset($_REQUEST['submit']) && $_REQUEST['name'] != "" && $_REQUEST['address'] != "" && $_REQUEST['contact']!= "")
            {
                $name = $_REQUEST['name'];
                $address = $_REQUEST['address'];
                $contact = $_REQUEST['contact'];

                $sql = "CALL manufacturer_entry('$name', '$address', '$contact')";
                $db -> query($sql);
                echo "Data is Inserted";
            }

        elseif(isset($_REQUEST['submit']))
            {
                echo "All Entry Should Fillup";
            }
            
    ?>

    <br>
    <hr>
    <br>
    
    <h3>Manufacturer</h3>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>contact_no</th>
        </tr>
        <?php

        $sql2 = "SELECT * FROM manufacturer";
        $row2 = $db -> query($sql2);
        
        while($datas2 = $row2 -> fetch_array())
        {
        ?>
        <tr>
            <td><?php echo $datas2['id']; ?></td>
            <td><?php echo $datas2['name']; ?></td>
            <td><?php echo $datas2['address']; ?></td>
            <td><?php echo $datas2['contact_no']; ?></td>
        </tr>

        <?php
        }
        ?>
    </table>

    <br>
    <button><a href="3_trigger.php">TRIGGER</a></button>

</body>
</html>