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


<h3>Manufacturer</h3>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>contact_no</th>
            <th>Action</th>
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
            <td><a onclick="return confirm('Are you sure?')" href="delete.php?id=<?php echo $datas2['id'];?>" style="color:red;">Delete</a></td>
        </tr>

        <?php
        }
        ?>
    </table>

<h3>Products</h3>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>manufacturer_id</th>
        </tr>
        <?php

        $sql = "SELECT * FROM product";
        $sql2 = "SELECT * FROM manufacturer";
        $row = $db -> query($sql);
        
        while($datas = $row -> fetch_array())
        {
        ?>
        <tr>
            <td><?php echo $datas['id']; ?></td>
            <td><?php echo $datas['name']; ?></td>
            <td><?php echo $datas['price']; ?></td>
            <td><?php echo $datas['manufacturer_id']; ?></td>
        </tr>

        <?php
        }
        ?>
    </table>


    <br>
    <button><a href="4_view.php">VIEW</a></button>


    
    
</body>
</html>