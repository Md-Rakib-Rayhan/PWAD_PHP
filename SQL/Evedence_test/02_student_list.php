<?php
include_once("00_db_config.php");
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

    <h3>Student List</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>

        <?php

            $sql = "SELECT * FROM students";
            $row = $db->query($sql);
     
            while($res = $row->fetch_object())
            {
        
        ?>
        <tr>
            <td><?php echo $res->id; ?></td>
            <td><?php echo $res->name; ?></td>
            <td><?php echo $res->address; ?></td>
            <td><?php echo $res->mobile; ?></td>
            <td><a onclick="return confirm('Are you sure?')" href="02_delete.php?id=<?php echo $res->id;?>" style="color:red;">Delete</a></td>

        
        </tr>

        <?php } ?>
    </table>



    <h3>Result List</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Module Name</th>
            <th>Total Marks</th>
            <th>Student id</th>
            <th>Action</th>
        </tr>

        <?php

            $sql2 = "SELECT * FROM results";
            $row2 = $db->query($sql2);
     
            while($res2 = $row2->fetch_object())
            {
        
        ?>
        <tr>
            <td><?php echo $res2->id; ?></td>
            <td><?php echo $res2->module_name; ?></td>
            <td><?php echo $res2->total_marks; ?></td>
            <td><?php echo $res2->student_id; ?></td>
            <td><?php echo "del" ?></td>

        
        </tr>

        <?php } ?>
    </table>

</body>
</html>