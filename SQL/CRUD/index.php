<?php include_once("db_config.php");?>

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
            padding: 5px 10px;;
        }
    </style>
</head>

<?php

    $sql = "SELECT * FROM students"; # sql code
    $result = $db -> query( $sql ); # sql code run

    $db->close();

?>


<body>
    <table>
        <tr>
            <th>SL</th>
            <th>Stdent Name</th>
            <th>Date of Birth</th>
            <th>Notes</th>
            <th colspan="2">Action</th>
        </tr>

        
        <?php while($row = $result -> fetch_object()):?> 
        
        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->date_of_birth;?></td>
            <td><?php echo $row->notes;?></td>
            <td><a  href="student_edit.php?id=<?php echo $row->id;?>" style="color:green;">Edit</a></td>
            <td><a onclick="return confirm('Are you sure?')" href="student_delete.php?id=<?php echo $row->id;?>" style="color:red;">Delete</a></td>

            <!-- 4. Because we used return, the link behaves like this:

                If true(OK) → allow the browser to continue → go to the href
                If false(Cancle) → stop the click → do NOT go to href -->
        </tr>
    
        <?php endwhile?> 


    </table>
    <br>
    <button><a href="student_entry.php">Insert More Value</a></button>
    
</body>
</html>



