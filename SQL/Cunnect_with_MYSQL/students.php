<?php include_once("db_config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

    $sql = "SELECT * FROM products"; # sql code
    $result = $db -> query( $sql ); # sql code run

    $row = $result -> fetch_assoc(); # to display here (1 row asbe)
    // $row1 = $result -> fetch_array(); # array akare anbo
    // $row2 = $result -> fetch_object(); # objec akare anbo

    echo $row["product_name"];
    echo "<pre>";
    // echo $row2->product_name."<br>"; # for object
    // print_r($row);
    // print_r($row1);
    // print_r($row2);

    // while($row1 = $result -> fetch_array()) # fetch jotokkhon korbe tokokkhon  true
    //     {
    //         echo $row1["product_name"] . "<br>";
    //         print_r($row1);
    //     }


     $db->close(); # er pore r query run korte parbo na but fetch korte parbo jodi age query declare thake
    # $result = $db -> query( $sql ); i am taking about this one

?>



<body>

    <table>
        <tr>
            <th>Product Name</th>
            <th>price</th>
        </tr>


        
        <?php while($row2 = $result -> fetch_object()):?> 
        
        <tr>
            <td><?php echo $row2->product_name;?></td>
            <td><?php echo $row2->price;?></td>
        </tr>
    
        <?php endwhile?> 

        <!-- Same -->
        <?php // while($row2 = $result -> fetch_object()){?> 
        <?php // }?>


    </table>
    
</body>
</html>



