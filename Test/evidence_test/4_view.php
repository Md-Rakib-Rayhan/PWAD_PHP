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

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>manufacturer_id</th>
        </tr>
        <?php

        $sql = "SELECT * FROM exp_product";
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
        } $db->close();
        ?>


    </table>
    
</body>
</html>